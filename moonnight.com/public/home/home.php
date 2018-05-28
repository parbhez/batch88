<?php
/**
 * Created by PhpStorm.
 * User: DBA
 * Date: 10/7/2017
 * Time: 5:24 PM
 */

$mysqlConnection = getMysqlConnection();
$blogListingQuery =
    "SELECT b.*, u.nick_name
  FROM mn_blog AS b
  LEFT JOIN mn_users AS u
  ON b.user_id = u.id
  ORDER BY b.created_time DESC";
$myBlogData = getMysqlData($blogListingQuery, $mysqlConnection);
