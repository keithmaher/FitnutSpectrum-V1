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
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-3216339693002508",
            enable_page_level_ads: true
        });
    </script>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- NAVIGATION -->
    <?php include "includes/navigation.php"; ?>

    <!-- FHOMEPAGE AND LOGO -->
    <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
        <div class="w3-display-middle" style="white-space:nowrap;">
            <img class="w3-center w3-padding-large w3-xlarge w3-wide img-responsive" src="images/Picture1.png" width="600" height="300">
        </div>
    </div>
    <!-- ABOUT FITNUT -->
    <?php include "includes/about.php"; ?>

    <!-- TEAM FITNUT -->
    <?php include "includes/team.php" ?>

    <!--BLOG SECTION-->
    <?php include "includes/blog.php"; ?>

    <!-- SUBSCRIBE SECTION-->
    <?php include "includes/subscribe.php"; ?>

    <!-- COONTACT CONTAINER -->
    <section class="shr-contact-area" id="contact">


        <div class="w3-content w3-container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="shr-section-title">
                        CONTACT US
                        <span class="shr-round"></span>
                    </h2>
                    <p><em>I'd love your feedback!</em></p><br>
                </div>
            </div>

            <!--  GOOGLE MAPS IFRAME-->
            <div class="w3-row w3-padding-32 w3-section">

                <!--  GOOGLE MAPS IFRAME-->
                <div class="w3-col m4 w3-container">
                    <br>
                    <div class="w3-round-large w3-greyscale w3-hide-small w3-hide-medium" style="width:100%;height:350px;"><iframe frameborder="0" height="400" style="border:1" src="https://www.google.com/maps/embed/v1/view?zoom=12&center=52.3558,-7.6903&key=AIzaSyA64wXlu4k65BirI6HEshyN8f6CoCF0p2w"></iframe></div>
                </div>

                <!--  CONTACT DETAILS-->
                <div class="w3-col m8 w3-panel">
                    <div class="w3-large w3-margin-bottom">
                        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Clonmel, Tipperary, Ireland<br>
                        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> <a class="kk w3-hide-small" href="mailto:fitnutspectrumfitness@gmail.com?Subject=General%20enquiry" target="_top">fitnutspectrumfitness@gmail.com</a>
                        <a class="kk w3-hide-medium w3-hide-large" href="mailto:fitnutspectrumfitness@gmail.com?Subject=General%20enquiry" target="_top"> Fitnut</a><br>
                        <i class="fa fa-facebook-official fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i><a class="kk" href="https://www.facebook.com/pg/fitnutspectrumfitness" target="_blank"> Facebook</a><br>
                        <i class="fa fa-instagram fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i><a class="kk" href="https://www.instagram.com/fitnut_spectrum/" target="_blank"> Instagram</a><br>
                        <i class="fa fa-snapchat fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> <a class="kk" onclick="document.getElementById('modal01').style.display='block'">Snapchat</a>
                    </div>
                    <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
                        <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
                        <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
                            <img class="pp" src="images/sn.jpg" style="border-radius:25%"><br><br>
                            <p class="w3-opacity w3-center w3-large w3-text-white">fullspectrum1</p>
                        </div>
                    </div>
                    <p>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave me a note:</p>

                    <!--  FORM FOR CONTACTING FITNUT-->
                    <div class="ll">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                                <div class="w3-half">
                                    <input class="w3-input w3-border" type="text" placeholder="Name" required="" name="name">
                                </div>
                                <div class="w3-half">
                                    <input class="w3-input w3-border" type="text" placeholder="Email" required="" name="email">
                                </div>
                            </div>
                            <textarea class="w3-input w3-border" placeholder="Message" required="" name="message"></textarea>
                            <div class="form-group">
                                <input class="w3-btn w3-round w3-red w3-right w3-section" type="submit" name="contact" value="Contact us">
                            </div>
                        </form>
                    </div>

                    <!--                //PHP FOR THE CONTACT FORM-->

                    <?php
if(isset($_POST["contact"])){
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$query = "INSERT INTO message (name, email, message) VALUES ('$name', '$email', '$message')";

$create_message_query = mysqli_query($connection, $query);
if(!$create_message_query){
die("QUERY FAILED ." . mysqli_error($connection));
}else{
header ("Location: message.php");
}
}
?>

                </div>
            </div>
        </div>
    </section>




    <!-- FOOTER -->
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
