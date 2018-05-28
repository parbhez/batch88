<?php
/**
 * Created by PhpStorm.
 * User: DBA
 * Date: 10/17/2017
 * Time: 3:50 PM
 */

redirectPublicUser();

$mysqlConnection = getMysqlConnection();
$fetchCategoryQuery = "SELECT * FROM mn_category";
$categoryData = getMysqlData($fetchCategoryQuery, $mysqlConnection);

if ( strtoupper($_SERVER['REQUEST_METHOD']) == 'POST' ) {
    $title = filterData($_REQUEST["title"], $mysqlConnection);
    $description = filterData($_REQUEST["description"], $mysqlConnection);
    $category_id = filterData($_REQUEST["category"], $mysqlConnection);
    $current_time = time();
    $user_id = getSessionData('user_id');

    $publishBlogQuery = "INSERT INTO mn_blog
                    (user_id, title, description, category_id, created_time, mode_id)
                    VALUES
                    ($user_id, '$title', '$description', $category_id, $current_time, 2)";

    $createBlog = getMysqlData($publishBlogQuery, $mysqlConnection);
    if ($createBlog == true) {
        $success = "Blog created successfully.";
    } else {
        $error = "Blog creation failed. Please try again later.";
    }
}