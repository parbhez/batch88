<?php

require_once "../../common/header.php";
require_once "../../common/menu.php";

require_once "updateBlog.php";

?>
<section id="contact-page" style="padding-top: 50px;">
    <div class="container">
        <div class="row wow fadeInDown">
            <div class="status alert alert-danger alert-dismissable" style="<?php if (!isset($error)) echo 'display: none'?>"><?php echo $error ?></div>
            <div class="status alert alert-success alert-dismissable" style="<?php if (!isset($success)) echo 'display: none'?>"><?php echo $success ?></div>
            <form class="login-form" method="post" action="">
                <input type="hidden" name="blog_id" value="<?php echo $blogData[0]['id'] ?>">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Title *</label>
                        <input type="text" value="<?php echo $blogData[0]['title']; ?>" name="title" class="form-control" required="required" placeholder="Enter your title">
                    </div>
                    <div class="form-group">
                        <label>Description *</label>
                        <textarea name="description" id="description" class="form-control" rows="8"><?php echo $blogData[0]['description']; ?></textarea>
                    </div>
                    <div class="form-group col-sm-4" style="padding-left: 0;">
                        <label for="category">Blog Category *</label>
                        <select name="category" id="category" class="form-control" required="required">
                            <?php for ($i = 0; $i < count($categoryData); $i++) { ?>
                                <option <?php if ($blogData[0]['category_id'] == $categoryData[$i]['id']) echo "selected"; ?> value="<?php echo $categoryData[$i]['id'] ?>"><?php echo $categoryData[$i]['title'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="clearfix">&nbsp;</div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg">Update Blog</button>
                    </div>
                </div>
            </form>
        </div>
    </div><!--/.container-->
</section><!--/#contact-page-->
<script type="text/javascript">
    $(function() {
        $('#category').select2();
        tinymce.init({ selector:'textarea' });
    });
</script>
<?php

require_once "../../common/footer.php";

?>