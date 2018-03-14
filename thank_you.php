<!DOCTYPE html>
<?php ob_start(); ?>
<?php session_start(); ?>
<?php include "includes/database.php"; ?>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>FitNut Full Spectrum Fitness</title>
<?php include "includes/css-links.php" ?>
</head>

<body>

<!--    //NAVIGATION-->

    <?php include "includes/shop-nav.php"; ?>

<!--    //HOME IMAGE AND LOGO-->



<?php

if (isset($_GET['tx'])) {
  $transaction = $_GET['tx'];
  $status = $_GET['st'];

  $email = $_SESSION['username'];
  $password = $_SESSION['password'];

if ($status === "Completed") {

  $query = "UPDATE admin SET complete = '1' WHERE password = $password";
  $edit_member_query = mysqli_query($connection, $query);

  if(!$edit_member_query){
  die("QUERY FAILED ." . mysqli_error($connection));
  }

}

}


?>





    <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
        <div class="w3-display-middle" style="white-space:nowrap;">

<!--            //LOGIN MODAL AND FORM-->

            <div action="" method="post" "modal fade" id="ModalFormLogin" role="dialog" ng-app="myApp">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title w3-margin-left w3-left w3-text-black">THANK YOU<br>LOGIN TO FITNUT</h1>
                        </div>
                        <div class="modal-body" style="padding-left:40px; padding-right:40px;">
                            <form class="form-horizontal" action="includes/login.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="text" class="w3-input w3-border w3-round" name="user" id="user" placeholder="username" autofocus required="" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="w3-input w3-border w3-round" placeholder="password (password)" name="pass" id="pass" required="" />
                                </div>
                                <div class="form-group w3-section">
                                    <button class="btn btn-danger w3-left" type="submit" name="login">Login</button>
                                    <p class="w3-right">Log in to see your profile.</p>
                                </div>
                            </form>
                        </div>
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
