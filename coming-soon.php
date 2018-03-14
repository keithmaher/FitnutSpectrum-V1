<!DOCTYPE html>
<?php ob_start(); ?>
<?php include "includes/database.php"; ?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FitNut | Full Spectrum Fitness</title>
    <?php include "includes/css-links.php" ?>
</head>

<body>
    <?php include "includes/shop-nav.php"; ?>

    <div class="bgimg-1 w3-display-container w3-opacity-min">
        <div class="w3-row">
            <div class="w3-col m12 w3-display-middle w3-hide-small w3-hide-medium" style="white-space:nowrap; width:60%; margin:0 auto;">
                <div class="w3-center w3-padding-large w3-white w3-xlarge w3-wide w3-animate-opacity">
                    <h1>Coming Soon</h1>
                    <p class="w3-hide-small w3-hide-medium">Shop is currently under construction</p>
                    <p class="w3-hide-small w3-hide-medium">Please contact the team for more information</p>
                    <p class="w3-hide-small w3-hide-medium">about Online Coaching by clicking <a href="mailto:fitnutspectrumfitness@gmail.com?Subject=General%20enquiry" target="_top">here</a>.</p>

                </div>
            </div>

            <div class="w3-col s12 w3-display-middle w3-hide-large">
                <div class="w3-card-4 w3-margin w3-white">
                    <div class="w3-container w3-center">
                        <h3><b>Coming Soon</b></h3><br>
                    </div>
                    <div class="w3-container w3-center">
                        <p>Shop is currently under construction</p>
                        <p>Email our team to find out more about coaching by clicking <a href="mailto:fitnutspectrumfitness@gmail.com?Subject=General%20enquiry" target="_top">here</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
</body>

</html>