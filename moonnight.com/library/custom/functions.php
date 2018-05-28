<?php
/**
 * Created by PhpStorm.
 * User: DBA
 * Date: 10/8/2017
 * Time: 3:45 PM
 */

function filterData($data, $connection){
    $filteredData = mysqli_real_escape_string($connection, $data);
    $filteredData = trim($filteredData);

    return $filteredData;
}

function getMysqlConnection(){
    $connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD);

    if (!$connection) {
        die('MySQL Error. Error message: ' . mysqli_error($connection));
    }

    $connection_ok = mysqli_select_db($connection, DATABASE);

    if ($connection_ok == true){
        return $connection;
    } else {
        die('MySQL Error. Error message: ' . mysqli_error($connection));
    }
}

function getMysqlData($query, $dbConnection){
    $resource = mysqli_query($dbConnection, $query);

    if (is_bool($resource) == false){
        $processedData = array();

        while (true){
            $row = mysqli_fetch_array($resource);
            if ($row != false){
                $processedData[] = $row;
            } else {
                break;
            }
        }

        return $processedData;
    } else {
        return $resource;
    }
}

function setSessionData($index, $value){
    if ( session_id() == false ) {
        session_start();
    }

    $_SESSION[$index] = $value;
}

function getSessionData($index){
    if ( session_id() == false ) {
        session_start();
    }

    return (isset($_SESSION[$index])) ? $_SESSION[$index] : false;

    //Used ternary operator above to achieve the following code
    /*if (isset($_SESSION[$index])) {
        return $_SESSION[$index];
    } else {
        return false;
    }*/
}

function redirectLoggedInUser(){
    if (getSessionData("user_id") != false){
        redirectToUserLanding();
    }
}

function redirectPublicUser(){
    if (getSessionData("user_id") == false){
        redirectToPublicLanding();
    }
}

function redirectToUserLanding(){
    $dashboard_url = BASE_URL . "private/dashboard";
    header("Location: $dashboard_url");
}

function redirectToPublicLanding(){
    $dashboard_url = BASE_URL . "public/home";
    header("Location: $dashboard_url");
}

function debug($array){
    echo "<pre>";
    var_dump($array);
    die;
}