<?php
/**
 * Created by PhpStorm.
 * User: DBA
 * Date: 10/15/2017
 * Time: 4:02 PM
 */

redirectLoggedInUser();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mysqlConnection = getMysqlConnection();

    $email = filterData($_REQUEST['email'], $mysqlConnection);
    $password = filterData($_REQUEST['password'], $mysqlConnection);
    $password = md5($password);

    $emailCheckerQuery =
        "SELECT u.*, p.profile_picture FROM mn_users u
        LEFT JOIN mn_personal_info p ON u.id = p.user_id
        WHERE u.email = '$email' AND u.password = '$password'";

    $userWithCurrentEmail = getMysqlData($emailCheckerQuery, $mysqlConnection);

    if (count($userWithCurrentEmail) > 0){
        setSessionData("user_id", $userWithCurrentEmail[0]['id']);
        setSessionData("role_id", $userWithCurrentEmail[0]['role_id']);
        setSessionData("last_logged_in", $userWithCurrentEmail[0]['last_logged_in']);
        setSessionData("nick_name", $userWithCurrentEmail[0]['nick_name']);
        setSessionData("profile_picture", $userWithCurrentEmail[0]['profile_picture']);

        $current_time = time();

        $updateUsersLoginTimeQuery = "UPDATE mn_users SET last_logged_in = $current_time";
        $updateUsersLoginTime = getMysqlData($updateUsersLoginTimeQuery, $mysqlConnection);

        redirectToUserLanding();
    } else {
        $error = "Email and password doesn't match.";
    }
}