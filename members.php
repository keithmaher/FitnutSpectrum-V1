<!DOCTYPE html>
<?php ob_start(); ?>
<?php session_start(); ?>
<?php include "includes/database.php"; ?>
<?php
if(!isset($_SESSION['username']) && empty($_SESSION['username'])) {
   header ("Location: index.php");
}

 ?>



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
        <?php include "includes/shop-nav.php"; ?>

        <!-- FHOMEPAGE AND LOGO -->
        <div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
            <div class="w3-display-middle" style="white-space:nowrap;">
                <img class="w3-center w3-padding-large w3-xlarge w3-wide img-responsive" src="images/Picture1.png" width="600" height="300">
            </div>
        </div>



        <section class="shr-welcome-area" style="padding-bottom:100px;">
            <div class="container">
                <?php

$username = $_SESSION['username'];
$password = $_SESSION['password'];
$name = $_SESSION['admin_name'];
$product = $_SESSION['product_id'];
$status = $_SESSION['complete'];



          $query = "SELECT * FROM admin WHERE username = '$username' && password = '$password' ";
          $send_query = mysqli_query($connection, $query);
          while($row = mysqli_fetch_array($send_query)){

          $product_id = $row["product_id"];
          $image = $row["user_image"];

          ?>




                    <?php

          if(isset($_POST['create_image'])){
              $image = $_FILES['image']['name'];
              $image_tmp = $_FILES['image']['tmp_name'];

              move_uploaded_file($image_tmp, "images/$image");

                }

                $query = "UPDATE admin SET user_image = '$image' WHERE username = '$username' && password = '$password'";
                $send_query = mysqli_query($connection, $query);

                if(!$send_query){
                    die("QUERY FAILED ." . mysqli_error($connection));
                }

              ?>


                        <?php

          $query = "SELECT * FROM product WHERE product_id = '$product_id'";
          $send_query = mysqli_query($connection, $query);
          while($row = mysqli_fetch_array($send_query)){
          $product_cat_id = $row["product_cat_id"];
          ?>





                            <div class="w3-content w3-margin-top" style="max-width:1400px;">

                                <!-- The Grid -->
                                <div class="w3-row-padding">

                                    <div class="w3-third">

                                        <div class="w3-white w3-text-grey w3-card-4">
                                            <div class="w3-display-container">
                                                <img src="images/<?php echo $image; ?>" style="width:100%" alt="Picture">
                                            </div>
                                            <div class="w3-container">

                                                <h2>Welcome
                                                    <?php echo $name; ?>
                                                </h2>




                                            </div>

                                            <?php
if ($product_cat_id == 3) {
$p = <<<DELIMETER

<div class="w3-container">
          <button onclick="myFunction('Demo1')" class="w3-btn w3-red w3-round w3-left-align"  style="margin-bottom:20px;">Edit Details</button>

          <div id="Demo1" class="w3-container w3-hide">
          <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
          <label for="image">Upload image</label>
          <input type="file" name="image">
          </div>
          <div class="form-group">
          <input class="w3-btn w3-red w3-round" type="submit" name="create_image" value="Upload">
          </div>
          </form>
          </div>
        </div>

          <script>
          function myFunction(id) {
              var x = document.getElementById(id);
              if (x.className.indexOf("w3-show") == -1) {
                  x.className += " w3-show";
              } else {
                  x.className = x.className.replace(" w3-show", "");
              }
          }
          </script>

DELIMETER;

echo $p;

}
?>

                                        </div><br>

                                        <!-- End Left Column -->
                                    </div>


                                    <!-- Right Column -->
                                    <div class="w3-twothird">

                                        <div class="w3-container w3-card-2 w3-white w3-margin-bottom">
                                            <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-shopping-bag  fa-fw w3-margin-right w3-xxlarge w3-text-red"></i>
                                                <?php echo $row["product_name"]; ?>
                                            </h2>
                                            <div class="w3-container">
                                                <p>
                                                    <?php echo $row["product_info_large"]; ?>
                                                </p>
                                            </div><br>
                                        </div>

                                        <div class="w3-container w3-card-2 w3-white">
                                            <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-download fa-fw w3-margin-right w3-xxlarge w3-text-red"></i>Downloads</h2>
                                            <div class="w3-container">
                                                <ul>
                                                    <li>
                                                        <?php
            if($status == 0){
              echo "There was an issue with your payment, Please contact FitNut";
            }else{
             ?>
                                                            <a href="includes/files/<?php echo $row['product_file1'] ?>" style="color:black">Full Plan</a></li>

                                                    <li><a href="includes/files/<?php echo $row['product_file2'] ?>" style="color:black">Meal Plan</a></li>


                                                    <?php } ?>
                                                </ul>



                                            </div>
                                        </div>

                                        <a href="includes/logout.php"><button  class="w3-btn w3-red w3-round w3-right" style="margin-top:20px;">Logout</button></a>

                                        <!-- End Right Column -->
                                    </div>

                                    <!-- End Grid -->
                                </div>

                                <!-- End Page Container -->
                            </div>




                            <?php } ?>
                            <?php } ?>
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