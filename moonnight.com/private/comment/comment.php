<?php
/**
 * Created by PhpStorm.
 * User: DBA
 * Date: 10/21/2017
 * Time: 4:17 PM
 */

require_once "../../utilities/settings.php";
require_once "../../library/custom/functions.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mysqlConnection = getMysqlConnection();
    $comment = strip_tags( filterData($_REQUEST['comment'], $mysqlConnection) );
    $user_id = filterData($_REQUEST['user_id'], $mysqlConnection);
    $blog_id = filterData($_REQUEST['blog_id'], $mysqlConnection);
    $current_time = time();

    $commentQuery =
        "INSERT INTO mn_comment
        (comment, blog_id, commented_by, created_time)
        VALUES
        ('$comment', $blog_id, $user_id, $current_time)
        ";

    $addComment = getMysqlData($commentQuery, $mysqlConnection);
    if ($addComment == true){
        echo "true";
    } else {
        echo "false";
    }
}