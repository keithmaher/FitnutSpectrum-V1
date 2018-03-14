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

    <?php include "includes/shop-nav.php"; ?>

    <!-- Page Content -->

    <div class="shr-contact-area" id="start">
        <div class="container" id="body-container">

            <?php include "includes/side-nav.php"; ?>

            <?php
$query = "SELECT * FROM product WHERE product_id =" . $_GET['id'] . " ";
$send_query = mysqli_query($connection, $query);

while($row = mysqli_fetch_array($send_query)):

?>



                <div class="col-md-9">

                    <!--Row For Image and Short Description-->

                    <div class="row" style="margin-top:10px;">

                        <div class="col-md-7">
                            <img class="img-responsive w3-hide-small w3-hide-medium" src="http://placehold.it/700x600" alt="">

                        </div>

                        <div class="col-lg-5 col-md-5" style="margin-bottom:1.5em; padding-left:0px; padding-right:30px;">
                            <div class="w3-card w3-hover-shadow">
                                <img class="card-img-top w3-hide-large" src="http://placehold.it/700x400" alt="">
                                <div class="w3-container">
                                    <h4 class="card-title">
                                        <?php echo $row['product_name']; ?>
                                    </h4>
                                    <h5>
                                        &euro;<?php echo $row['product_price']; ?>
                                    </h5>
                                    <p class="card-text">
                                        <?php echo $row['product_info_small']; ?>
                                    </p>
                                </div>
                                <div class="w3-container">
                                    <a href="signup.php?id=<?php echo $row['product_id'];?>"><button  class="w3-btn w3-red w3-round">Buy Now</button></a><br><br>
                                </div>
                            </div>
                        </div>



                    </div>
                    <!--Row For Image and Short Description-->


                    <hr>


                    <!--Row for Tab Panel-->

                    <div class="row">

                        <div role="tabpanel">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">

                                    <p></p>

                                    <p>
                                        <?php echo $row['product_info_large']; ?>
                                    </p>

                                </div>

                            </div>

                        </div>


                    </div>
                    <!--Row for Tab Panel-->




                </div>

                <?php endwhile; ?>


        </div>

    </div>


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
