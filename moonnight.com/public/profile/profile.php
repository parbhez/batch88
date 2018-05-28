<?php
/**
 * Created by PhpStorm.
 * User: DBA
 * Date: 10/21/2017
 * Time: 12:13 PM
 */

$mysqlConnection = getMysqlConnection();
$user_id = filterData($_REQUEST['id'], $mysqlConnection);
$fetchUserQuery =
    "SELECT p.*, u.nick_name, c.title AS country_name, a.title AS city_name FROM mn_users AS u
    LEFT JOIN mn_personal_info AS p ON p.user_id = u.id
    LEFT JOIN mn_country AS c ON c.id = p.country_id
    LEFT JOIN mn_city AS a ON a.id = p.city_id
    WHERE u.id = $user_id";
$myUserData = getMysqlData($fetchUserQuery, $mysqlConnection);