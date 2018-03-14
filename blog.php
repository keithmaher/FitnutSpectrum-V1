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

    <?php
if(isset($_GET['page'])){
$page = $_GET['page'];
}else{
$page = "";
}

if($page == ""){
$page = 1;
}

if($page == "" || $page == 1){?>
        <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
            <div class="w3-display-middle" style="white-space:nowrap;">
                <img class="w3-center w3-padding-large w3-xlarge w3-wide img-responsive" src="images/Picture1.png" width="600" height="300">
            </div>
        </div>
        <?php
}?>

        <section class="shr-welcome-area" id="news">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2 class="shr-section-title">
                            WELCOME TO FIT<span>NUT</span> BLOG
                            <span class="shr-round"></span>
                        </h2>
                        <p class="shr-sub-title">Read some shit</p>
                    </div>

                    <div class="w3-col l8 s12">
                        <?php
if(isset($_GET['page'])){
$page = $_GET['page'];
}else{
$page = "";
}

if($page == ""){
$page = 1;
}

if($page == "" || $page == 1){
$page_1 = 0;
}else{
$page_1 = ($page * 3) - 3;
}

$blog_query_count = "SELECT * FROM blog";
$find_count = mysqli_query($connection, $blog_query_count);
$count = mysqli_num_rows($find_count);

$count = ceil($count/ 3);

$query = "SELECT * FROM blog ORDER BY blog_id DESC LIMIT $page_1, 3";
$select_blog = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($select_blog)){
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



                            <?php  } ?>

                            <!-- <div class="w3-card-4 w3-margin w3-white w3-hide-large">


                                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                <ins class="adsbygoogle" style="display:block" data-ad-format="fluid" data-ad-layout="image-top" data-ad-layout-key="-8i+1w-dq+e9+ft" data-ad-client="ca-pub-3216339693002508" data-ad-slot="2031482533"></ins>
                                <script>
                                    (adsbygoogle = window.adsbygoogle || []).push({});
                                </script>

                            </div>

                            <hr class="w3-hide-large">



                            <div class="w3-card-4 w3-margin w3-white w3-hide-small">
                                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                <!-- Fitnut2 -->
                                <!-- <ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-3216339693002508" data-ad-slot="5122224893"></ins>
                                <script>
                                    (adsbygoogle = window.adsbygoogle || []).push({});
                                </script>
                            </div>
                            <hr class="w3-hide-small"> -->

                            <!-- <div class="w3-card-4 w3-margin w3-white w3-hide-small">
                                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                <!-- Fitnut 3 -->
                                <!-- <ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px" data-ad-client="ca-pub-3216339693002508" data-ad-slot="5979779480"></ins>
                                <script>
                                    (adsbygoogle = window.adsbygoogle || []).push({});
                                </script>
                            </div> -->





                    </div>

                    <!-- Introduction menu -->
                    <div class="w3-col l4">

                        <?php
if(isset($_GET['page'])){
$page = $_GET['page'];
}else{
$page = "";
}

if($page == ""){
$page = 1;
}

if($page == "" || $page == 1){?>

                            <!-- About Card -->
                            <div class="w3-card-2 w3-margin w3-margin-top w3-hide-medium">
                                <img src="images/evann.jpg" style="width:100%">
                                <div class="w3-container w3-white">
                                    <h4><b>Evan Lynch</b></h4>
                                    <p>I am a sports nutritionist and currently studying food science and health in the University of Limerick. I want to share my world with you.</p>
                                </div>
                            </div>
                            <hr class="w3-hide-medium">



                            <?php
}?>



                            <div class="w3-card-4 w3-margin">
                                <div class="w3-container w3-padding">
                                    <h4>Search Posts</h4>
                                </div>
                                <form action="search.php" method="post">
                                    <div class="input-group" style="width:90%; margin:0 auto;">
                                        <input name="search" type="text" class="form-control w3-input w3-border w3-round">
                                        <span class="input-group-btn">
<button name="submit" class="btn btn-default" type="submit">
<span class="glyphicon glyphicon-search"></span>
                                        </button>
                                        </span>
                                    </div>
                                </form><br>
                            </div>
                            <!-- <hr class="w3-hide-small">



                            <div class="w3-hide-small" style="width:100%; margin-left: 20px;">

                                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                <!-- Fitnut Blog -->
                                <!-- <ins class="adsbygoogle" style="display:inline-block;width:300px;height:600px" data-ad-client="ca-pub-3216339693002508" data-ad-slot="6812379382"></ins>
                                <script>
                                    (adsbygoogle = window.adsbygoogle || []).push({});
                                </script>

                            </div> -->

                            <!-- <hr class="w3-hide-small"> -->

                            <!-- <div class="w3-hide-small" style="width:100%; margin-left: 20px;">

                                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                <!-- Fitnut Blog 2 -->
                                <!-- <ins class="adsbygoogle" style="display:inline-block;width:300px;height:600px" data-ad-client="ca-pub-3216339693002508" data-ad-slot="9021763846"></ins>
                                <script>
                                    (adsbygoogle = window.adsbygoogle || []).push({});
                                </script>

                            </div> -->
                    </div>

                    <!-- END GRID -->



                </div>
                <hr>
                <!-- END w3-content -->
            </div>

        </section>
        <ul class="w3-margin pager">
            <?php

for($i =1; $i<=$count; $i++){

if($i == $page){
echo "<li><a class='active_page' href='blog.php?page={$i}'>Page $i</a></li>";
}else{
echo "<li class='w3-margin'><a href='blog.php?page={$i}'>Page $i</a></li>";
}
}


?>
        </ul>

        <!-- Footer -->
        <?php include "includes/footer.php"; ?>

        <!-- Bootstrap core JavaScript -->
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
