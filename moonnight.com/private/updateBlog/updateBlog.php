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
    $blog_id = filterData($_REQUEST["blog_id"], $mysqlConnection);
    $description = filterData($_REQUEST["description"], $mysqlConnection);
    $category_id = filterData($_REQUEST["category"], $mysqlConnection);
    $current_time = time();
    $user_id = getSessionData('user_id');

    $publishBlogQuery = "UPDATE mn_blog
                    SET
                    title = '$title',
                    description = '$description',
                    category_id = '$category_id',
                    modified_time = '$current_time'
                    WHERE id = $blog_id";

    $createBlog = getMysqlData($publishBlogQuery, $mysqlConnection);
    if ($createBlog == true) {
        $success = "Blog updated successfully.";
    } else {
        $error = "Blog update failed. Please try again later.";
    }
}

$blog_id = filterData($_REQUEST['id'], $mysqlConnection);
$fetchBlogQuery = "SELECT * FROM mn_blog WHERE id = $blog_id";
$blogData = getMysqlData($fetchBlogQuery, $mysqlConnection);
