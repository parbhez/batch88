<?php
/**
 * Created by PhpStorm.
 * User: DBA
 * Date: 10/7/2017
 * Time: 10:36 AM
 */

redirectPublicUser();

$mysqlConnection = getMysqlConnection();
$fetchCountryQuery = "SELECT * FROM mn_country";
$countryData = getMysqlData($fetchCountryQuery, $mysqlConnection);

$fetchCityQuery = "SELECT * FROM mn_city";
$cityData = getMysqlData($fetchCityQuery, $mysqlConnection);

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $first_name = filterData($_REQUEST['first_name'], $mysqlConnection);
    $last_name = filterData($_REQUEST['last_name'], $mysqlConnection);
    $gender = filterData($_REQUEST['gender'], $mysqlConnection);
    $dob = filterData($_REQUEST['dob'], $mysqlConnection);
    $nick_name = filterData($_REQUEST['nick_name'], $mysqlConnection);
    $occupation = filterData($_REQUEST['occupation'], $mysqlConnection);
    $organization = filterData($_REQUEST['organization'], $mysqlConnection);
    $about_me = filterData($_REQUEST['about_me'], $mysqlConnection);
    $country = filterData($_REQUEST['country'], $mysqlConnection);
    $city = filterData($_REQUEST['city'], $mysqlConnection);
    $current_time = time();
    $user_id = getSessionData("user_id");

    $updateError = false;
    if (isset($_FILES['profile_picture'])){
        if ($_FILES['profile_picture']['size'] > MAX_PROFILE_PICTURE_UPLOAD_SIZE){
            $error = "Error! File size exceeded.";
            $updateError = true;
        } else if (strpos($_FILES['profile_picture']['type'], "image/") === false){
            $error = "Error! File type is not supported.";
            $updatedError = true;
        } else {
            $filepath = realpath(dirname(__FILE__));
            //$uploadSystemPath = __DIR__ . "/../../uploads";
            $uploadSystemPath = $filepath . "/../../uploads";
            $fileName = $user_id . "_" . $current_time . "_" . $_FILES['profile_picture']['name'];
            $uploadFileStatus = move_uploaded_file($_FILES['profile_picture']['tmp_name'], "$uploadSystemPath/$fileName");

            if ($uploadFileStatus == false){
                $error = "Server error! File upload failed";
                $updatedError = true;
            } else {
                $uploadedProfilePictureUrl = BASE_URL . "uploads/$fileName";
                setSessionData("profile_picture", $uploadedProfilePictureUrl);
            }
        }
    }

    if ($updateError == false) {
        $updateUserQuery = "UPDATE mn_users
                        SET
                        nick_name = '$nick_name',
                        modified_time = $current_time
                        WHERE id = $user_id
                        ";

        setSessionData("nick_name", $nick_name);
        $updatedUser = getMysqlData($updateUserQuery, $mysqlConnection);

        $date_of_birth = strtotime($dob);
        $personalInfoUpdateQuery = "UPDATE mn_personal_info
                                SET
                                first_name = '$first_name',
                                last_name = '$last_name',
                                occupation = '$occupation',
                                organization = '$organization',
                                date_of_birth = $date_of_birth,
                                gender = '$gender',
                                about_me = '$about_me',
                                profile_picture = '$uploadedProfilePictureUrl',
                                city_id = $city,
                                country_id = $country,
                                modified_time = $current_time
                                WHERE user_id = $user_id";


        $updateUsersPersonalInfo = getMysqlData($personalInfoUpdateQuery, $mysqlConnection);

        if ($updateUsersPersonalInfo == true) {
            $success = "Congratulation! User has been updated successfully.";
        } else {
            $notification = "Update failed! Please try again later.";
        }
    }
}

$fetchCurrentUserQuery =
    "SELECT p.*, u.nick_name
    FROM mn_personal_info AS p
    LEFT JOIN mn_users AS u
    ON p.user_id = u.id
    WHERE u.id = $user_id";
$myUserData = getMysqlData($fetchCurrentUserQuery, $mysqlConnection);