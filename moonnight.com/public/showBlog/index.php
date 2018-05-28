<?php

require_once "../../common/header.php";
require_once "../../common/menu.php";

require_once "showBlog.php";
?>
<section id="blog" class="container">
    <div class="center">
        <h2>Blogs</h2>
        <p class="lead">Welcome to the knowledge of Moon-Night</p>
    </div>

    <div class="blog">
        <div class="row">
            <div class="col-md-12">
                <?php if (count($myBlogData) > 0){ ?>
                    <div class="blog-item">
                        <div class="row">
                            <div class="col-xs-12 col-sm-2 text-center">
                                <div class="entry-meta">
                                    <span id="publish_date"><?php echo date("d F Y", $myBlogData[0]['created_time']); ?></span>
                                    <span><i class="fa fa-user"></i> <a href="<?php echo BASE_URL ?>public/profile?id=<?php echo $myBlogData[0]['user_id'] ?>"><?php echo $myBlogData[0]['nick_name']; ?></a></span>
                                    <!--<span><i class="fa fa-comment"></i> <a href="#">2 Comments</a></span>-->
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-10 blog-content">
                                <h2 style="color: #c52d2f;"><?php echo $myBlogData[0]['title'] ?></h2>

                                <h3><?php echo $myBlogData[0]['description'] ?></h3>
                            </div>
                            <div class="sharethis-inline-share-buttons"></div>
                        </div>
                    </div><!--/.blog-item-->
                    <?php
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
                    <hr/>
                    <div id="commentContainer">
                        <?php for ($i = 0; $i < count($myBlogCommentData); $i++) { ?>
                            <div class="row" style="margin-bottom: 10px;">
                                <div class="media comment_section">
                                    <?php if ($myBlogCommentData[$i]['profile_picture'] != '') { ?>
                                        <div class="pull-left post_comments">
                                            <a href="#"><img src="<?php echo $myBlogCommentData[$i]['profile_picture'] ?>" class="img-circle" alt=""></a>
                                        </div>
                                    <?php } ?>
                                    <div class="media-body post_reply_comments">
                                        <h3><?php echo $myBlogCommentData[$i]['nick_name'] ?></h3>
                                        <h4><?php echo date("d F Y h:i A", $myBlogCommentData[$i]['created_time']) ?></h4>
                                        <p><?php echo $myBlogCommentData[$i]['comment'] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <div class="row" id="newComment" style="display: none; margin-bottom: 10px;">
                            <div class="media comment_section">
                                <div class="pull-left post_comments">
                                    <a href="#"><img src="<?php echo $myUserData[0]['profile_picture'] ?>" class="img-circle" alt=""></a>
                                </div>
                                <div class="media-body post_reply_comments">
                                    <h3><?php echo $myUserData[0]['nick_name'] ?></h3>
                                    <h4 id="time"></h4>
                                    <p id="comment"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr/>
                    <?php if ($user_id != false) { ?>
                        <div class="row">
                            <div id="clearfix">
                                <div class="alert alert-success" id="successMessage" style="display: none">Your comment has been published.</div>
                                <div class="message_heading alert alert-info">
                                    <h4>Leave a Replay</h4>
                                    <p>HTML code is not allowed</p>
                                </div>
                                <hr/>

                                <form onsubmit="return addComment();">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Message *</label>
                                                <textarea name="message" id="message" required class="form-control" rows="8"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-lg">Comment</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php } ?>
            </div><!--/.col-md-8-->
        </div><!--/.row-->
    </div>
</section><!--/#blog-->
<script type="text/javascript">
    var commentId = 1;
    function addComment(){
        $.ajax({
            method: "POST",
            url: "<?php echo BASE_URL ?>private/comment/comment.php",
            dataType: "json",
            data: {
                comment: $("#message").val(),
                user_id: "<?php echo $user_id; ?>",
                blog_id: "<?php echo $myBlogData[0]['id'] ?>"
            }
        })
            .done(function( msg ) {
                if (msg == true) {
                    var currentComment = $("#message").val();
                    $("#message").val("");
                    $("#successMessage").slideDown();
                    var newComment = $("#newComment").clone();
                    newComment.attr("id", commentId);
                    newComment.find("#comment").html(currentComment);
                    newComment.find("#time").html(new Date());
                    $("#commentContainer").append(newComment);
                    $("#" + commentId).slideDown();
                    commentId++;
                    setInterval(function(){ $("#successMessage").slideUp(); }, 3000);
                } else {
                    alert("Server error! Comment wasn't successful. Please try again later.");
                }
            });

        return false;
    }
</script>
<?php

require_once "../../common/footer.php";

?>