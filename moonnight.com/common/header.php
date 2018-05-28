<?php
$filepath = realpath(dirname(__FILE__));
/* require_once __DIR__ . "/../utilities/settings.php";
require_once __DIR__ . "/../library/custom/functions.php"; */

require_once ($filepath . "/../utilities/settings.php");
require_once ($filepath . "/../library/custom/functions.php");

/* require_once __DIR__ . "/../utilities/settings.php";
require_once __DIR__ . "/../library/custom/functions.php"; */
?>
<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Moon-night</title>

    <!-- core CSS -->
    <link href="<?php echo BASE_URL ?>static/theme/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URL ?>static/theme/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URL ?>static/theme/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo BASE_URL ?>static/theme/css/main.css" rel="stylesheet">
    <!--Select2 CSS-->
    <link href="<?php echo BASE_URL ?>static/theme/select2/dist/css/select2.min.css" rel="stylesheet" />
    <!--Select2 CSS-->

    <!--jQuery UI CSS-->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>static/theme/jquery-ui/jquery-ui.css">
    <script src="<?php echo BASE_URL ?>static/theme/jquery-ui/external/jquery/jquery.js"></script>
    <!--jQuery UI CSS-->

    <link href="<?php echo BASE_URL ?>static/theme/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="<?php echo BASE_URL ?>static/theme/js/html5shiv.js"></script>
    <script src="<?php echo BASE_URL ?>static/theme/js/respond.min.js"></script>
    <![endif]-->

    <!--ShareThis JS-->
    <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=59ec6eadcc58690012e4b563&product=inline-share-buttons"></script>
</head><!--/head-->

<body class="">