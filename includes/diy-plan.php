<div class="row">


    <?php
    $query = "SELECT * FROM product WHERE product_cat_id = 1";
    $send_query = mysqli_query($connection, $query);

    while($row = mysqli_fetch_array($send_query)) {

  $product = <<<DELIMETER

  <div class="col-lg-4 col-md-6" style="margin-bottom:1.5em; padding-left:0px; padding-right:30px;">
          <div class="w3-card w3-hover-shadow">
              <img class="card-img-top" src="http://placehold.it/700x400" alt="">
              <div class="w3-container">
                  <h4 class="card-title">{$row['product_name']}</h4>
                  <p class="card-text">{$row['product_info_small']}</p>
              </div>
              <div class="w3-container">
              <p class="card-text">&euro;{$row['product_price']}</p>
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
