<?php

require_once "../../common/header.php";
require_once "../../common/menu.php";

require_once "dashboard.php";
?>
<section id="blog" class="container">
    <div class="center">
        <h2>Blogs</h2>
        <p class="lead">Welcome to the knowledge of Moon-Night</p>
    </div>

    <div class="blog">
        <div class="row">
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
                                        <div class="status alert alert-info alert-dismissable"><h3>You have not written any blog yet.</h3></div>
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