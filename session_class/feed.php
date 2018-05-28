<?php

session_start();

//to check if the user_id is already stored at the login time in session
if (isset($_SESSION['user_id'])){
    $link = mysql_connect('localhost', 'root', '');

    if (!$link) {
        die('Reason for not connection with the database: ' . mysql_error());
    }

    $user_id = $_SESSION['user_id'];
    $sql_query = "SELECT * FROM batch88_personal_info WHERE user_id = $user_id";

    $connection_ok = mysql_select_db('batch88', $link);

    if ($connection_ok == true){
        $data = mysql_query($sql_query, $link);

        $row = mysql_fetch_array($data);

        echo "<h1>Welcome, " . $row['first_name'] . " " . $row['last_name'] . "</h1>";
        echo "<h3>Your details: " . $row['details'] . "</h3>";
        echo '<a href="logout.php">Logout</a>';
    }
} else {
    echo "Unne kida? Unnere chinina. Pisone jaiya login koira aien.";
}