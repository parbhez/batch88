<?php

require_once "../../common/header.php";
require_once "../../common/menu.php";

require_once "settings.php";

?>
<section id="contact-page" style="padding-top: 50px;">
    <div class="container">
        <div class="row wow fadeInDown">
            <div class="status alert alert-success alert-dismissable" style="<?php if (!isset($success)) echo 'display: none'?>"><?php echo $success ?></div>
            <div class="status alert alert-danger alert-dismissable" style="<?php if (!isset($error)) echo 'display: none'?>"><?php echo $error ?></div>
            <div class="status alert alert-warning alert-dismissable" style="<?php if (!isset($notification)) echo 'display: none'?>"><?php echo $notification ?></div>
            <form class="login-form" enctype="multipart/form-data" method="post" action="">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" value="<?php echo $myUserData[0]['first_name'] ?>" name="first_name" id="first_name" class="form-control" placeholder="Enter your first name">
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name *</label>
                        <input type="text" value="<?php echo $myUserData[0]['last_name'] ?>" name="last_name" id="last_name" class="form-control" required="required" placeholder="Enter your last name">
                    </div>
                    <div class="form-group">
                        <label for="nick_name">Nick Name</label>
                        <input type="text" value="<?php echo $myUserData[0]['nick_name'] ?>" name="nick_name" id="nick_name" class="form-control" placeholder="Enter your nick name">
                    </div>
                    <div class="form-group">
                        <label for="profile_picture">Profile Picture</label>
                        <input type="file" accept="image/*" data-max-size="10000" name="profile_picture" id="profile_picture" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="occupation">Occupation</label>
                        <input type="text" value="<?php echo $myUserData[0]['occupation'] ?>" name="occupation" id="occupation" class="form-control" placeholder="Enter your occupation name">
                    </div>
                    <div class="form-group">
                        <label for="organization">Organization</label>
                        <input type="text" value="<?php echo $myUserData[0]['organization'] ?>" name="organization" id="organization" class="form-control" placeholder="Enter your organization name">
                    </div>
                    <div class="form-group">
                        <label for="about_me">About me</label>
                        <textarea name="about_me" id="about_me" class="form-control" rows="8"><?php echo $myUserData[0]['about_me'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Gender *</label><br/>
                        <label for="male">Male </label>&nbsp;&nbsp;<input type="radio" <?php if ($myUserData[0]['gender'] == 'Male') echo "checked"; ?> name="gender" value="Male" id="male" required="required">&nbsp;&nbsp;
                        <label for="female">Female </label>&nbsp;&nbsp;<input type="radio" <?php if ($myUserData[0]['gender'] == 'Female') echo "checked"; ?> name="gender" value="Female" id="female" required="required">
                    </div>
                    <div class="form-group">
                        <label for="dob">Date of Birth *</label>
                        <input value="<?php echo date("d F Y", $myUserData[0]['date_of_birth']) ?>" type="text" name="dob" id="dob" class="form-control" required="required" placeholder="Enter your date of birth">
                    </div>
                    <div class="form-group col-sm-6" style="padding-left: 0;">
                        <label for="country">Country</label>
                        <select name="country" id="country" class="form-control">
                            <?php for($i = 0; $i < count($countryData); $i++) { ?>
                                <option <?php if ($myUserData[0]['country_id'] == $countryData[$i]['id']) echo "selected"; ?> value="<?php echo $countryData[$i]['id'] ?>"><?php echo $countryData[$i]['title'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group col-sm-6" style="padding-left: 0;">
                        <label for="city">City</label>
                        <select name="city" id="city" class="form-control">
                            <?php for($i = 0; $i < count($cityData); $i++) { ?>
                                <option <?php if ($myUserData[0]['city_id'] == $cityData[$i]['id']) echo "selected"; ?> value="<?php echo $cityData[$i]['id'] ?>"><?php echo $cityData[$i]['title'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg">Update Profile</button>
                        <button type="reset" name="reset" class="btn btn-primary btn-lg">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div><!--/.container-->
</section><!--/#contact-page-->
<script>
    $( function() {
        $( "#dob" ).datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "1900:2014",
            dateFormat: "dd MM yy"
        });
        tinymce.init({ selector:'textarea' });
        $('#country').select2();
        $('#city').select2();
    } );
</script>
<?php

require_once "../../common/footer.php";

?>
