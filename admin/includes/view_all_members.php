<div class="row">
<div class="col-lg-12">
<h1 class="page-header">
FitNut Members
</h1>

<table class="table table-bordered table-hover table-responsive">
<thead>
<tr>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Start Date</th>
<th>Goals</th>
<th>Message</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<tbodt>

<?php 
$query = "SELECT * FROM members ORDER BY member_id DESC";
$select_members = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($select_members)){
$member_id = $row["member_id"];
$firstname = $row["firstname"];
$lastname = $row["lastname"];
$email = $row["email"];
$startdate = $row["startdate"];
$goal = $row["goal"];
$message = $row["message"];


echo "<tr>";
echo "<td>$member_id</td>";
echo "<td>$firstname</td>";
echo "<td>$lastname</td>";
echo "<td><a href='#'>$email</a></td>";
echo "<td>$startdate</td>";
echo "<td>$goal</td>";
echo "<td>$message</td>";
echo "<td><a href='members.php?source=edit_member&e_member=$member_id'>Edit</a></td>";
echo "<td><a href='members.php?delete=$member_id'>Delete</a></td>";
echo "</tr>";

}                 
?>
                       
</tbodt>
</table>
                        
      
<?php
    
    if(isset($_GET['delete'])){
            $delete_id = $_GET['delete'];
            
            $query = "DELETE FROM members WHERE member_id = $delete_id";
            $delete_query = mysqli_query($connection, $query);
            header("Location: members.php");   
        }    
    
    
?>
                        
                        

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
