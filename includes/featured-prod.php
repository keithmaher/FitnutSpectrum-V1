

<div class="row">




  <?php
  $query = "SELECT * FROM product WHERE featured = 1";
  $send_query = mysqli_query($connection, $query);

  while($row = mysqli_fetch_array($send_query)) {

$product = <<<DELIMETER

<div class="col-lg-4 col-md-6" style="margin-bottom:1.5em; padding-left:0px; padding-right:30px;">
        <div class="w3-card w3-hover-shadow">
            <img class="card-img-top" src="http://placehold.it/700x400" alt="">
            <div class="w3-container">
                <h4 class="card-title">{$row['product_name']}</h4>
                <h5>&euro;{$row['product_price']}</h5>
                <p class="card-text">{$row['product_info_small']}</p>
                <br>
            </div>
            <div class="w3-container">
              <a href="item.php?id={$row['product_id']}"><button  class="w3-btn w3-red w3-round w3-left">Read More</button></a>
              <a href="signup.php?id={$row['product_id']}"><button  class="w3-btn w3-red w3-round w3-right">Buy Now</button></a><br><br>
            </div>
        </div>
    </div>
DELIMETER;

echo "$product";

}

?>

</div>
