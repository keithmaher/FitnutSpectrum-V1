<!DOCTYPE html>
<?php ob_start(); ?>
<?php include "includes/database.php"; ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FitNut | Full Spectrum Blog</title>
    <?php include "includes/css-links.php" ?>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-3216339693002508",
            enable_page_level_ads: true
        });
    </script>
</head>

<body>

    <?php include "includes/shop-nav.php"; ?>

    <section class="shr-welcome-area" id="news">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="shr-section-title">
                        WELCOME TO FIT<span>NUT</span> BLOG
                        <span class="shr-round"></span>
                    </h2>
                    <p class="shr-sub-title">Please enjoy and leave a comment below</p>
                </div>

                <div class="w3-col l8 s12">
                    <?php

if(isset($_GET['b_id'])){
$blog_select_id = $_GET['b_id'];
}

$query = "SELECT * FROM blog WHERE blog_id = $blog_select_id";
$select_blog = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($select_blog)){
$blog_id = $row["blog_id"];
$blog_title = $row["blog_title"];
$blog_author = $row["blog_author"];
$blog_date = $row["blog_date"];
$blog_image = $row["blog_image"];
$blog_content = $row["blog_content"];
$blog_tags = $row["blog_tags"];
$blog_comment_count = $row["blog_comment_count"];
$blog_status = $row["blog_status"];

?>

                        <!-- Blog entry -->
                        <div class="w3-card-4 w3-margin w3-white">
                            <img class="img-responsive" src="images/<?php echo $blog_image; ?>" alt="" style="width:100%; max-height:350px;"><br>
                            <div class="w3-container">
                                <h3><b><?php echo $blog_title?></b></h3>
                                <div class="shr-news-info clearfix">
                                    <ul class="w3-center">
                                        <li><i class="fa fa-pencil-square-o " aria-hidden="true"></i> Author:
                                            <?php echo $blog_author; ?>
                                        </li>
                                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> Published:
                                            <?php echo date("d-m-Y", strtotime($blog_date)); ?>
                                        </li>
                                        <li><i class="fa fa-comment" aria-hidden="true"></i>
                                            <?php echo $blog_comment_count; ?> Comments</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="w3-container">
                                <p>
                                    <?php echo $blog_content ?>
                                </p><br>
                                <div class="w3-row">
                                    <div class="w3-col m8 s12">
                                        <p><a href="blog.php"><button class="w3-btn w3-red w3-round"><b>« RETURN TO BLOGS</b></button></a></p>
                                    </div>
                                </div><br>
                            </div>
                        </div>
                        <hr>

                        <?php  } ?>


                        <?php
if(isset($_POST['create_comment'])){

$blog_select_id = $_GET['b_id'];
$comment_author = $_POST['comment_name'];
$comment_content = $_POST['comment_content'];

$query = "INSERT INTO comments (comment_post_id, comment_author, comment_content, comment_date) VALUES ( ' $blog_select_id', '$comment_author', '$comment_content', now())";

$create_comment_query = mysqli_query($connection, $query);

if(!$create_comment_query){
die("QUERY FAILED ." . mysqli_error($connection));
}

$query = "UPDATE blog SET blog_comment_count = blog_comment_count + 1 WHERE blog_id =  $blog_select_id";
$update_count = mysqli_query($connection, $query);
}

?>

                            <div class="w3-card-4 w3-margin w3-white">
                                <div class="w3-container">
                                    <h4>Leave a Comment:</h4>
                                    <form action="" method="post" role="form">

                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" name="comment_name" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="comment">Comment</label>
                                            <textarea class="form-control" rows="3" name="comment_content"></textarea>
                                        </div>

                                        <button type="submit" name="create_comment" class="w3-btn w3-red w3-round">Submit</button>
                                    </form><br>
                                </div>
                            </div>
                            <hr>

                            <?php


$query = "SELECT * FROM comments WHERE comment_post_id = $blog_select_id ORDER BY comment_id DESC";
$select_comment = mysqli_query($connection, $query);
if(!$select_comment){
die("QUERY FAILED" . mysqli_error($connection));
}
while($row = mysqli_fetch_assoc($select_comment)){
$comment_date = $row["comment_date"];
$comment_author = $row["comment_author"];
$comment_content = $row["comment_content"];

?>
                                <div class="w3-card-4 w3-margin w3-white">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object" src="images/no_image.jpg" width="150" height="100" alt="">
                                        </a>
                                        <div class="media-body w3-padding">
                                            <h4 class="media-heading">
                                                <?php echo $comment_author; ?>
                                                <small><?php echo date("d-m-Y", strtotime($comment_date)); ?></small>
                                            </h4>
                                            <?php echo $comment_content; ?>
                                        </div>
                                    </div>
                                </div>

                                <?php } ?>
                </div>

                <div class="w3-col l4">
                    <div class="w3-card-2 w3-margin w3-margin-top w3-hide-small">
                        <img src="images/evann.jpg" style="width:100%">
                        <div class="w3-container w3-white">
                            <h4><b>Evan Lynch</b></h4>
                            <p>I am a sports nutritionist and currently studying food science and health in the University of Limerick. I want to share my world with you.</p>
                        </div>
                    </div>
                    <hr>


                    <div class="w3-hide-small" style="width:100%; margin-left: 20px;">

                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- Fitnut Blog -->
                        <ins class="adsbygoogle" style="display:inline-block;width:300px;height:600px" data-ad-client="ca-pub-3216339693002508" data-ad-slot="6812379382"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>

                    </div>

                    <hr>

                    <div class="w3-hide-small" style="width:100%; margin-left: 20px;">

                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- Fitnut Blog 2 -->
                        <ins class="adsbygoogle" style="display:inline-block;width:300px;height:600px" data-ad-client="ca-pub-3216339693002508" data-ad-slot="9021763846"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>

                    </div>
                    <hr>
                </div>
            </div>
    </section>

    <!-- Footer -->
    <?php include "includes/footer.php"; ?>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/css3-animate-it.js"></script>
    <!-- css3-animate-it -->
    <script src="js/jquery.easing.min.js"></script>
    <!-- menu smooth scroll -->
    <script type="text/javascript" src="js/scroll_script.js"></script>
    <!-- to top smooth scroll -->
    <script type="text/javascript">
        //jQuery to collapse the navbar on scroll
        $(window).scroll(function() {
            if ($(".navbar").offset().top > 50) {
                $(".navbar-fixed-top").addClass("top-nav-collapse");
            } else {
                $(".navbar-fixed-top").removeClass("top-nav-collapse");
            }
        });

        //jQuery for page scrolling feature - requires jQuery Easing plugin
        $(function() {
            $('a.page-scroll').bind('click', function(event) {
                var $anchor = $(this);
                $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top
                }, 1500, 'easeInOutExpo');
                event.preventDefault();
            });
        });
    </script>
    <!-- /menu -->
    <a href="#top" class="w3-badge w3-red" id="toTop"><i class="fa fa-arrow-circle-up w3-center"></i></a>
</body>

</html>