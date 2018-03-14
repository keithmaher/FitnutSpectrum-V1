<!DOCTYPE html>
<?php ob_start(); ?>
<?php session_start(); ?>
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
    <?php include "includes/shop-nav.php"; ?>



    <section class="shr-welcome-area">
        <div class="container">

            <?php
          $query = "SELECT * FROM product WHERE product_id =" . $_GET['id'] . " ";
          $send_query = mysqli_query($connection, $query);

          while($row = mysqli_fetch_array($send_query)):

          ?>

                <div class="row">

                    <h1>Checkout</h1>


                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <?php echo $row['product_name']; ?>
                                </td>
                                <td>$
                                    <?php echo $row['product_price']; ?>
                                </td>

                            </tr>
                        </tbody>
                    </table>



                    <!--  ***********CART TOTALS*************-->

                    <div class="col-xs-6 pull-right ">
                        <h2>Cart Totals</h2>

                        <table class="table table-bordered" cellspacing="0">
                            <tr class="shipping">
                                <th>Shipping and Handling</th>
                                <td>Free Shipping</td>
                            </tr>

                            <tr class="order-total">
                                <th>Order Total</th>
                                <td><strong><span class="amount">$<?php echo $row['product_price']; ?></span></strong> </td>
                            </tr>



                            </tbody>

                        </table>

                        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_xclick">
                            <input type="hidden" name="business" value="fitnutspectrumfitness-facilitator@gmail.com">
                            <INPUT TYPE="hidden" NAME="currency_code" value="EUR">
                            <INPUT TYPE="hidden" NAME="return" value="http://www.fitnutspectrum.com/thank_you.php">

                            <input type="hidden" name="item_name" value="<?php echo $row['product_name']; ?>">
                            <input type="hidden" name="amount" value="<?php echo $row['product_price']; ?>">

                            <input class="w3-right" style="margin-bottom:20px;" type="image" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online">

                        </form>


                        <?php endwhile; ?>

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