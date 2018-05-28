<?php

require_once "../../common/header.php";
require_once "../../common/menu.php";

require_once "register.php";

?>
<section id="contact-page" style="padding-top: 50px;">
    <div class="container">
        <div class="center">
            <h2>It's very easy to have an account. Register here.</h2>
        </div>
        <div class="row wow fadeInDown">
            <div class="status alert alert-success alert-dismissable" style="<?php if (!isset($success)) echo 'display: none'?>"><?php echo $success ?></div>
            <div class="status alert alert-danger alert-dismissable" style="<?php if (!isset($error)) echo 'display: none'?>"><?php echo $error ?></div>
            <div class="status alert alert-danger alert-dismissable" id="passwordError" style="display: none;">Password doesn't match. Please check!</div>
            <div class="status alert alert-warning alert-dismissable" style="<?php if (!isset($notification)) echo 'display: none'?>"><?php echo $notification ?></div>
            <form class="login-form" method="post" action="" onsubmit="return checkValidation()">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter your first name">
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name *</label>
                        <input type="text" name="last_name" id="last_name" class="form-control" required="required" placeholder="Enter your last name">
                    </div>
                    <div class="form-group">
                        <label>Gender *</label><br/>
                        <label for="male">Male </label>&nbsp;&nbsp;<input type="radio" name="gender" value="Male" id="male" required="required">&nbsp;&nbsp;
                        <label for="female">Female </label>&nbsp;&nbsp;<input type="radio" name="gender" value="Female" id="female"required="required">
                    </div>
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" name="email" id="email" class="form-control" required="required" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="dob">Date of Birth *</label>
                        <input type="text" name="dob" id="dob" class="form-control" required="required" placeholder="Enter your date of birth">
                    </div>
                    <div class="form-group">
                        <label for="password">Password *</label>
                        <input type="password" name="password" id="password" class="form-control" required="required" placeholder="Enter your password">
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Confirm Password *</label>
                        <input type="password" name="confirm_password" id="confirm_password" class="form-control" required="required" placeholder="Please confirm your password">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg">Register</button>
                        <button type="reset" name="reset" class="btn btn-primary btn-lg" onclick="resetEverything();">Reset</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="get-started center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                <h2>Already have an account?</h2>
                <div class="request">
                    <h4><a href="<?php echo BASE_URL ?>public/login" style="padding: 5px 51px;">Enter Here</a></h4>
                </div>
            </div>
        </div>
    </div><!--/.container-->
</section><!--/#contact-page-->

<script type="text/javascript">
    $( function() {
        $( "#dob" ).datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "1900:2012",
            dateFormat: "dd MM yy"
        });
    } );

    function checkValidation(){
        var password = $("#password").val();
        var confirm_password = $("#confirm_password").val();
        if (password != confirm_password){
            $("#passwordError").slideDown();
            return false;
        } else {
            return true;
        }
    }

    function resetEverything(){
        $("#passwordError").slideUp();
    }
</script>

<?php

require_once "../../common/footer.php";

?>