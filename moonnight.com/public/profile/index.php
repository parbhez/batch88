<?php

require_once "../../common/header.php";
require_once "../../common/menu.php";

require_once "profile.php";

?>
<section id="about-us">
    <div class="container">
        <div class="team">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="single-profile-top wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInDown;">
                        <div class="media">
                            <?php if ($myUserData[0]['profile_picture'] != '') { ?>
                                <div class="pull-left">
                                    <a href="#"><img style="width: 340px; height: 240px;" class="media-object" src="<?php echo $myUserData[0]['profile_picture'] ?>" alt=""></a>
                                </div>
                            <?php } ?>
                            <div class="media-body">
                                <h4><?php echo $myUserData[0]['first_name'] . " " . $myUserData[0]['last_name'] . ", " . ( date("Y", time() - $myUserData[0]['date_of_birth']) - 1970 ) . " Years"; ?></h4>
                                <h5><?php echo $myUserData[0]['nick_name'] . ", " . $myUserData[0]['gender'] ?></h5>
                                <ul class="tag clearfix">
                                    <li class="alert alert-info">
                                        <?php
                                            if (isset($myUserData[0]['occupation']) && $myUserData[0]['occupation'] != '')
                                                echo $myUserData[0]['occupation'];

                                            if (isset($myUserData[0]['organization']) && $myUserData[0]['organization'] != '')
                                                echo " @ " . $myUserData[0]['organization'];
                                        ?>
                                    </li><br/>
                                    <li class="alert alert-success"><?php echo "From: " . $myUserData[0]['city_name'] . ", " . $myUserData[0]['country_name'] ?></li><br/>
                                </ul>

                                <ul class="social_icons">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div><!--/.media -->
                        <p><?php echo $myUserData[0]['about_me'] ?></p>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
</section>

<?php

require_once "../../common/footer.php";

?>