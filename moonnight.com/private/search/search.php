<?php
/**
 * Created by PhpStorm.
 * User: DBA
 * Date: 10/7/2017
 * Time: 5:24 PM
 */

redirectPublicUser();
$myBlogData = array();

$mysqlConnection = getMysqlConnection();
$fetchCategoryQuery = "SELECT * FROM mn_category";
$categoryData = getMysqlData($fetchCategoryQuery, $mysqlConnection);

if ( strtoupper($_SERVER['REQUEST_METHOD']) == 'POST' ) {
    $title = filterData($_REQUEST["title"], $mysqlConnection);
    $description = filterData($_REQUEST["description"], $mysqlConnection);
    $category_id = filterData($_REQUEST["category"], $mysqlConnection);

    $searchCondition = '';
    if ($title != '') $searchCondition .= "b.title LIKE '%$title%' ";
    if ($description != '') {
        if ($searchCondition != '') $searchCondition .= "OR ";
        $searchCondition .= "b.description LIKE '%$description%' ";
    }
    if ($category_id != '0') {
        if ($searchCondition != '') $searchCondition .= "OR ";
        $searchCondition .= "b.category_id = $category_id ";
    }

    $blogListingQuery =
        "SELECT b.*, u.nick_name
  FROM mn_blog AS b
  LEFT JOIN mn_users AS u
  ON b.user_id = u.id
  WHERE $searchCondition
  ORDER BY b.created_time DESC";
    $myBlogData = getMysqlData($blogListingQuery, $mysqlConnection);
}
