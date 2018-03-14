<div class="col-lg-3">

    <a href="shopp.php#start" style="color:black;"><h1>Fit<span style="color:red;">Nut</span> Shop</h1></a>
    <div class="left-nav">



<?php

$query = "SELECT * FROM categories WHERE cat_id <= 3";
$send_query = mysqli_query($connection, $query);

while($row = mysqli_fetch_array($send_query)) {
  echo "<a href='shopp.php?id={$row['cat_id']}#start' class='list-group-item' style='font-size:16px;'>{$row['cat_title']} <i class='fa fa-arrow-circle-o-right w3-right' aria-hidden='true'></i></a>";
}
 ?>

    </div>

</div>
