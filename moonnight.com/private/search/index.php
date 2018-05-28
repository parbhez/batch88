<?php

require_once "../../common/header.php";
require_once "../../common/menu.php";

require_once "search.php";
?>
<section id="blog" class="container">
    <div class="blog">
        <div class="row">
            <div class="center">
                <h2>Search our Archives</h2>
            </div>
            <div class="row wow fadeInDown">
                <div class="status alert alert-danger alert-dismissable" style="<?php if (!isset($error)) echo 'display: none'?>"><?php echo $error ?></div>
                <div class="status alert alert-success alert-dismissable" style="<?php if (!isset($success)) echo 'display: none'?>"><?php echo $success ?></div>
                <form class="login-form" method="post" action="">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter your title">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" id="description" class="form-control" rows="8"></textarea>
                        </div>
                        <div class="form-group col-sm-4" style="padding-left: 0;">
                            <label for="category">Blog Category</label>
                            <select name="category" id="category" class="form-control">
                                <option value="0">None</option>
                                <?php for ($i = 0; $i < count($categoryData); $i++) { ?>
                                    <option value="<?php echo $categoryData[$i]['id'] ?>"><?php echo $categoryData[$i]['title'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="clearfix">&nbsp;</div>
                        <div class="form-group">
                            <button type="submit"class="btn btn-primary btn-lg">Search Blog</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="center">
                <h2>Search Results</h2>
            </div>
            <div class="col-md-12">
                <?php if (count($myBlogData) > 0){
                    for ($i = 0; $i < count($myBlogData); $i++) { ?>
                        <div class="blog-item">
                            <div class="row">
                                <div class="col-xs-12 col-sm-2 text-center">
                                    <div class="entry-meta">
                                        <span id="publish_date"><?php echo date("d F Y", $myBlogData[$i]['created_time']); ?></span>
                                        <span><i class="fa fa-user"></i> <a href="<?php echo BASE_URL ?>public/profile?id=<?php echo $myBlogData[$i]['user_id'] ?>"><?php echo $myBlogData[$i]['nick_name']; ?></a></span>
                                        <!--<span><i class="fa fa-comment"></i> <a href="#">2 Comments</a></span>-->
                                        <span><i class="fa fa-pencil-square-o"></i> <a href="<?php echo BASE_URL ?>private/updateBlog?id=<?php echo $myBlogData[$i]['id'] ?>">Update Blog</a></span>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-10 blog-content">
                                    <h2><a href="<?php echo BASE_URL; ?>public/showBlog?id=<?php echo $myBlogData[$i]['id'] ?>"><?php echo $myBlogData[$i]['title'] ?></a></h2>

                                    <h3><?php echo substr(strip_tags($myBlogData[$i]['description']), 0, 250) . " [....]" ?></h3>
                                    <a class="btn btn-primary readmore" href="<?php echo BASE_URL; ?>public/showBlog?id=<?php echo $myBlogData[$i]['id'] ?>">Read More <i
                                            class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div><!--/.blog-item-->
                    <?php }
                        } else { ?>
                        <div class="blog-item">
                            <div class="row">
                                <div class="container">
                                    <div class="center">
                                        <div class="status alert alert-info alert-dismissable"><h3>No results found based on your search</h3></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
            </div><!--/.col-md-8-->
        </div><!--/.row-->
    </div>
</section><!--/#blog-->
<?php

require_once "../../common/footer.php";

?>