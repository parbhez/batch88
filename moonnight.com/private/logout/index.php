<?php
/**
 * Created by PhpStorm.
 * User: DBA
 * Date: 10/7/2017
 * Time: 3:53 PM
 */
require_once "../../common/header.php";

session_start();
session_destroy();
redirectToPublicLanding();