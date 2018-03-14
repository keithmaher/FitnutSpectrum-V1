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


    <?php
    $query = "SELECT * FROM product WHERE product_id =" . $_GET['id'] . " ";
    $send_query = mysqli_query($connection, $query);

    while($row = mysqli_fetch_array($send_query)):


    if(isset($_POST["create_member"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $id = $row['product_id'];

    $query = "INSERT INTO admin (admin_name, username, password, product_id) VALUES ( '$name', '$email', '$password', '$id')";

    $create_member_query = mysqli_query($connection, $query);


    if(!$create_member_query){
    die("QUERY FAILED ." . mysqli_error($connection));
    }else{

        $_SESSION['admin_name'] = $name;
        $_SESSION['username'] = $email;
        $_SESSION['password'] = $password;
        header ("Location: checkout.php?id=$id");
    }
    }
    ?>




        <!--    //HOME IMAGE AND LOGO-->

        <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
            <div class="w3-display-middle" style="white-space:nowrap;">

                <!--            //LOGIN MODAL AND FORM-->

                <div action="" method="post" "modal fade" id="ModalFormLogin" role="dialog" ng-app="myApp">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title w3-margin-left w3-left w3-text-black">FITNUT SIGNUP</h1>
                            </div>
                            <div class="modal-body" style="padding-left:40px; padding-right:40px;">
                                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="name">Your Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter Name" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter Your Email Address" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Enter Your Password" required="">
                                    </div>
                                    <div class="form-group">
                                        <?php echo $row['product_name']; ?>
                                    </div>
                                    <div class="form-group">

                                    </div>
                                    <div class="form-group w3-section">
                                        <button class="btn btn-danger w3-left" type="submit" name="create_member">Sign Up</button>
                                        <p class="w3-right" style="font-size:10px;">By Clicking "Sign Up" you will create an account <br>and proceed to final payment screen</p>
                                    </div>
                                </form>
                            </div>





                        </div>
                    </div>
                </div>






            </div>
        </div>


        <?php endwhile; ?>



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