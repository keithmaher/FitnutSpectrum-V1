<!DOCTYPE html>
<?php ob_start(); ?>
<?php session_start(); ?>
<?php include "includes/database.php"; ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FitNut | Full Spectrum Shop</title>
    <?php include "includes/css-links.php" ?>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
  <?php include "includes/shop-nav.php"; ?>

  <!-- FHOMEPAGE AND LOGO -->
  <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
      <div class="w3-display-middle" style="white-space:nowrap;">
          <img class="w3-center w3-padding-large w3-xlarge w3-wide img-responsive" src="images/Picture1.png" width="600" height="300">
      </div>
  </div>

    <div class="shr-contact-area" id="start">
    <div class="container" id="body-container">

        <div class="row">

<?php include "includes/side-nav.php"; ?>

            <div class="col-lg-9">

<?php include "includes/carousel.php" ?>

<?php
if(isset($_GET['id'])){
$p = $_GET['id'];
}

?>
<?php
switch ($p){
  case 1:
  ?>
  <h1 class="">DIY Nutrition Plans</h1>
  <?php include "includes/diy-plan.php" ?>
  </div>
<?php break;
case 2: ?>
<h1 class="">Exercise Plans</h1>
<?php include "includes/exercise-plan.php" ?>
</div>
<?php break;
case 3: ?>
<h1 class="">Full Spectrum Experience</h1>
<?php include "includes/online-coaching.php" ?>
</div>
<?php break;
default: ?>
<h1 class="">Featured Products</h1>
<?php include "includes/featured-prod.php" ?>
</div>

<?php
}?>

            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </div>
  </div>
    <!-- /.container -->


        <!-- FOOTER -->
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
