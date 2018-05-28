<?php

require_once "../../common/header.php";
require_once "../../common/menu.php";

require_once "home.php";
?>
    <section id="blog" class="container">
        <div class="center">
            <h2>Blogs</h2>
            <p class="lead">Welcome to the knowledge of Moon-Night</p>
        </div>

        <div class="blog">
            <div class="row">
                <div class="col-md-12">
                    <?php for ($i = 0; $i < count($myBlogData); $i++) { ?>
                        <div class="blog-item">
                            <div class="row">
                                <div class="col-xs-12 col-sm-2 text-center">
                                    <div class="entry-meta">
                                        <span id="publish_date"><?php echo date("d F Y", $myBlogData[$i]['created_time']); ?></span>
                                        <span><i class="fa fa-user"></i> <a href="<?php echo BASE_URL; ?>public/profile?id=<?php echo $myBlogData[$i]['user_id'] ?>"><?php echo ($myBlogData[$i]['nick_name'] != '') ? $myBlogData[$i]['nick_name'] : "No Name"; ?></a></span>
                                        <!--<span><i class="fa fa-comment"></i> <a href="#">2 Comments</a></span>-->
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-10 blog-content">
                                    <h2><a href="<?php echo BASE_URL; ?>public/showBlog?id=<?php echo $myBlogData[$i]['id'] ?>"><?php echo $myBlogData[$i]['title'] ?></a></h2>
                                    <h3><?php echo substr(strip_tags($myBlogData[$i]['description']), 0, 250) . " [....]" ?></h3>
                                    <a class="btn btn-primary readmore" href="<?php echo BASE_URL; ?>public/showBlog?id=<?php echo $myBlogData[$i]['id'] ?>">Read More <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div><!--/.blog-item-->
                    <?php } ?>
                </div><!--/.col-md-8-->
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->
<?php

require_once "../../common/footer.php";

?>