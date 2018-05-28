<?php

$user_id = getSessionData("user_id");
$nick_name = getSessionData("nick_name");
$profile_picture = getSessionData("profile_picture");

$menu = 'home';

if (strpos($_SERVER['REQUEST_URI'], "dashboard") !== false){
    $menu = 'dashboard';
} else if (strpos($_SERVER['REQUEST_URI'], "settings") !== false){
    $menu = 'settings';
} else if (strpos($_SERVER['REQUEST_URI'], "login") !== false){
    $menu = 'login';
} else if (strpos($_SERVER['REQUEST_URI'], "registration") !== false){
    $menu = 'registration';
} else if (strpos($_SERVER['REQUEST_URI'], "createBlog") !== false){
    $menu = 'createBlog';
} else if (strpos($_SERVER['REQUEST_URI'], "search") !== false){
    $menu = 'search';
}

?>

<style type="text/css">
    .nick_name_title{
        color: #c52d2f;
        margin-top: 0;
    }

    .nick_name_title img{
        width: 80px;
        height: 80px;
        opacity: .7;
    }

    .nick_name_title:hover img{
        opacity: 1;
    }

    .nick_name_title:hover a{
        color: white;
    }
</style>

<header id="header">
    <nav class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h2 class="nick_name_title">
                    <a href="<?php echo BASE_URL; ?>public/profile?id=<?php echo $user_id ?>" style="padding-bottom: 10px;">
                        <img src="<?php echo $profile_picture ?>" class="img-circle" alt="">
                        <?php echo $nick_name; ?>
                    </a>
                </h2>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="<?php if ($menu == 'home') echo "active" ?>"><a href="<?php echo BASE_URL; ?>public/home">Home</a></li>
                    <?php if ($user_id == false) { ?>
                        <li class="<?php if ($menu == 'login') echo "active" ?>"><a href="<?php echo BASE_URL; ?>public/login">Login</a></li>
                        <li class="<?php if ($menu == 'registration') echo "active" ?>"><a href="<?php echo BASE_URL; ?>public/registration">Registration</a></li>
                    <?php } else { ?>
                        <li class="<?php if ($menu == 'dashboard') echo "active" ?>"><a href="<?php echo BASE_URL; ?>private/dashboard">Dashboard</a></li>
                        <li class="<?php if ($menu == 'search') echo "active" ?>"><a href="<?php echo BASE_URL; ?>private/search">Search</a></li>
                        <li class="<?php if ($menu == 'createBlog') echo "active" ?>"><a href="<?php echo BASE_URL; ?>private/createBlog">Create Blog</a></li>
                        <li class="<?php if ($menu == 'settings') echo "active" ?>"><a href="<?php echo BASE_URL; ?>private/settings">Settings</a></li>
                        <li class=""><a href="<?php echo BASE_URL; ?>private/logout">Logout</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->

</header><!--/header-->