<?php
/**
 * Created by PhpStorm.
 * User: DBA
 * Date: 10/17/2017
 * Time: 6:16 PM
 */

$mysqlConnection = getMysqlConnection();
$blog_id = filterData($_REQUEST['id'], $mysqlConnection);
$blogListingQuery =
    "SELECT b.*, u.nick_name
  FROM mn_blog AS b
  LEFT JOIN mn_users AS u
  ON b.user_id = u.id
  WHERE b.id = $blog_id
  ORDER BY b.created_time DESC";
$myBlogData = getMysqlData($blogListingQuery, $mysqlConnection);

$fetchBlogCommentQuery =
    "SELECT c.*, u.nick_name, p.profile_picture
  FROM mn_comment c
  LEFT JOIN mn_users u ON u.id = c.commented_by
  LEFT JOIN mn_personal_info p ON p.user_id = u.id
  WHERE c.blog_id = $blog_id";
$myBlogCommentData = getMysqlData($fetchBlogCommentQuery, $mysqlConnection);

$user_id = getSessionData("user_id");
if ($user_id != false){
    $fetchCurrentUserQuery =
        "SELECT p.*, u.nick_name
    FROM mn_users u
    LEFT JOIN mn_personal_info p
    ON u.id = p.user_id WHERE u.id = $user_id";
    $myUserData = getMysqlData($fetchCurrentUserQuery, $mysqlConnection);
}
