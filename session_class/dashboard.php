<?php

//submitted data
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

//To connect with mysql system
$link = mysql_connect('localhost', 'root', '');

//to check if the connection was successful or not
if (!$link) {
    die('Reason for not connection with the database: ' . mysql_error());
}

//To select mysql database
$connection_ok = mysql_select_db('batch88', $link);

//prepare the query to execute
$query_to_execute = "SELECT * FROM batch88_users WHERE username = '$username' AND user_password = '$password'";

if ($connection_ok == true){
    //to run the saved query into mysql server
    $data = mysql_query($query_to_execute, $link);

    //to get data into php format from mysql resource
    $row = mysql_fetch_array($data);

    //to check if any data has come from the database
    if ($row != false){
        //to start the session
        session_start();
        //to store data into session
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];

        echo "Hello, you have logged in successfully. Welcome to IBCS-Primax";
    } else {
        echo "Dhurr, username and password vul diso. Thik koro mia.";
    }
}