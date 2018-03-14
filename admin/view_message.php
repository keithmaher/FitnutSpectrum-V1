<?php include "includes/header.php" ?>

<div id="wrapper">

<!-- Navigation -->
<?php include "includes/nav.php" ?>

<div id="page-wrapper">

<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
<div class="col-lg-12">
<h1 class="page-header">
Messages
</h1>

<table class="table table-bordered table-hover table-responsive">
<thead>
<tr>
<th>Name</th>
<th>Email</th>
<th>Message</th>
<th>Replied</th>
<th>Delete</th>
</tr>
</thead>
<tbodt>
<?php
$query = "SELECT * FROM message ORDER BY message_id DESC";
$select_members = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($select_members)){
$message_id = $row["message_id"];
$name = $row["name"];
$email = $row["email"];
$message = $row["message"];
$reply = $row["reply"];


echo "<tr>";
echo "<td>$name</td>";
echo "<td><a href='#'>$email</a></td>";
echo "<td>$message</td>";
echo "<td><a href='includes/replied_message.php?Replied=$message_id'>Replied</a> - $reply</td>";
echo "<td><a href='view_message.php?delete=$message_id'>Delete</a></td>";
echo "</tr>";

}

if(isset($_GET['delete'])){
    
    $delete_id = $_GET['delete'];
    $query = "DELETE FROM message WHERE message_id = $delete_id";
    $delete_query = mysqli_query($connection, $query);
    header ("Location: view_message.php");
   
}

?>                       
</tbodt>
</table>
           
          
         
</div>
</div>
<!-- /.row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>


<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
