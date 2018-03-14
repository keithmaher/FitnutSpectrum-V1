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
                    <p class="shr-sub-title">Here are your results</p>
                </div>
                <div class="w3-col l8 s12">

     <?php

    if(isset($_POST['submit'])){

    $search = $_POST['search'];

    $query = "SELECT * FROM blog WHERE blog_tags LIKE '%$search%' ";
    $search_query = mysqli_query($connection, $query);
    if(!$search_query){
        die("QUERY FAILED" . mysqli_error($connection));
    }
    }

    $count = mysqli_num_rows($search_query);
    if($count == 0){
        echo "<h2>Sorry No result for '$search'</h2><br>Click <a href='index.php'>here</a> to retutn";
    }else{

while($row = mysqli_fetch_assoc($search_query)){
$blog_id = $row["blog_id"];
$blog_title = $row["blog_title"];
$blog_author = $row["blog_author"];
$blog_date = $row["blog_date"];
$blog_image = $row["blog_image"];
$blog_content = substr($row["blog_content"],0,200);
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
                                </p>
                            </div>
                            <div class="w3-row">
                                <div class="w3-col m8 s12 w3-margin">
                                    <p><a href="i_blog.php?b_id=<?php echo $blog_id; ?>"><button class="w3-btn w3-red w3-round">READ MORE »</button></a></p>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <?php  }

    }?>

                </div>

                <div class="w3-col l4">
                    <div class="w3-card-2 w3-margin w3-margin-top">
                        <img src="images/evann.jpg" style="width:100%">
                        <div class="w3-container w3-white">
                            <h4><b>Evan Lynch</b></h4>
                            <p>I am a sports nutritionist and currently studying food science and health in the University of Limerick. I want to share my world with you.</p>
                        </div>
                    </div>
                    <hr>

                    <div class="w3-card-2 w3-margin">
                        <div class="w3-container w3-padding">
                            <h4>Search Posts</h4>
                        </div>
                        <form action="search.php" method="post">
                            <div class="input-group">
                                <input name="search" type="text" class="form-control">
                                <span class="input-group-btn">
<button name="submit" class="btn btn-default" type="submit">
<span class="glyphicon glyphicon-search"></span>
                                </button>
                                </span>
                            </div>
                        </form><br>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include "includes/footer.php"; ?>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/css3-animate-it.js"></script>
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