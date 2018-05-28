<?php
/**
 * Created by PhpStorm.
 * User: DBA
 * Date: 10/8/2017
 * Time: 3:28 PM
 */

redirectLoggedInUser();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $mysqlConnection = getMysqlConnection();

    $first_name = filterData($_REQUEST['first_name'], $mysqlConnection);
    $last_name = filterData($_REQUEST['last_name'], $mysqlConnection);
    $email = filterData($_REQUEST['email'], $mysqlConnection);
    $dob = filterData($_REQUEST['dob'], $mysqlConnection);
    $gender = filterData($_REQUEST['gender'], $mysqlConnection);
    $password = filterData($_REQUEST['password'], $mysqlConnection);
    $confirm_password = filterData($_REQUEST['confirm_password'], $mysqlConnection);

    if ($password != $confirm_password){
        $error = "Password doesn't match.";
        return;
    }

    $emailCheckerQuery = "SELECT * FROM mn_users WHERE email = '$email'";

    $userWithCurrentEmail = getMysqlData($emailCheckerQuery, $mysqlConnection);

    if (count($userWithCurrentEmail) > 0){
        $error = "Email already exists. Please try with another email.";
    } else {
        $created_time = time();
        $auth_code = rand(MIN_RANDOM_NUMBER, MAX_RANDOM_NUMBER);
        $password = md5($password);
        $role_id = SUBSCRIBER;

        $newUserQuery = "INSERT INTO mn_users
                        (email, password, role_id, created_time, auth_code)
                        VALUES
                        ('$email', '$password', $role_id, $created_time, '$auth_code')";

        $createNewUser = getMysqlData($newUserQuery, $mysqlConnection);

        if ($createNewUser == true){
            $user_id = mysqli_insert_id($mysqlConnection);
            $date_of_birth = strtotime($dob);

            $personalInfoQuery = "INSERT INTO mn_personal_info
                (user_id, first_name, last_name, date_of_birth, gender, created_time)
                VALUES
                ($user_id, '$first_name', '$last_name', $date_of_birth, '$gender', $created_time)";

            $createPersonalInfo = getMysqlData($personalInfoQuery, $mysqlConnection);

            //TODO: Email needs to be sent from here.
            $success = "Congratulation! User has been created successfully. You have got an email.&nbsp;
            Please verify your email by following the instruction of your email and then login here. Thanks.";

        } else {
            $error = "Server error! Please try again later.";
        }
    }
}
