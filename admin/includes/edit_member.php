<?php
    
    
if(isset($_GET['e_member'])){
$edit_id = $_GET['e_member'];
}
    
$query = "SELECT * FROM members WHERE member_id = $edit_id ";
$select_members = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($select_members)){
$member_id = $row["member_id"];
$firstname = $row["firstname"];
$lastname = $row["lastname"];
$email = $row["email"];
$startdate = $row["startdate"];
$goal = $row["goal"];
$message = $row["message"];
}

        
 if(isset($_POST["edit_member"])){
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$startdate = $_POST["startdate"];
$goal = $_POST["goal"];
$message = $_POST["message"];       
        
$query = "UPDATE members SET ";
$query .= "firstname = '$firstname', ";
$query .= "lastname = '$lastname', ";
$query .= "email = '$email', ";
$query .= "startdate = '$startdate', ";
$query .= "goal = '$goal', ";
$query .= "message = '$message' ";
$query .= "WHERE member_id = $edit_id";
          
    
$edit_member_query = mysqli_query($connection, $query);

if(!$edit_member_query){
die("QUERY FAILED ." . mysqli_error($connection));
}else{
    header("Location: members.php");
}

                            
                            
                            
                        }
                        
                        
                        ?>

                        
<div class="row">
<div class="col-lg-12">
<h1 class="page-header">
    Edit member
</h1>                        
                        
                        
<form action="" method="post" enctype="multipart/form-data">                                                                               
<div class="form-group">
<label for="firstname">First Name</label>
<input type="text" value="<?php echo $firstname; ?>" class="form-control" name="firstname" placeholder="Enter First Name" required="">
</div>

<div class="form-group">
<label for="lastname">Last Name</label>
<input type="text" value="<?php echo $lastname; ?>"  class="form-control" name="lastname"  placeholder="Enter Last Name" required="">
</div>

<div class="form-group">
<label for="email">Email</label>
<input type="email" value="<?php echo $email; ?>"  name="email" class="form-control" placeholder="Enter member Email Address">
</div>


<div class="form-group">
<label for="startdate">Start Date:</label>
<div class="input-group date">
<input type="date" value="<?php echo $startdate; ?>"  name="startdate" class="form-control" placeholder="Please select a date">
<label for="startdate" class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
</label>
    </div>
    </div>

<div class="form-group">
<label for="goal">Goal</label>
<select name="goal" class="form-control" >

<option value="Fat-Loss"><?php echo $goal; ?></option>

<?php
    if($goal == "Fat-Loss"){
        echo "<option value='Diet'>Diet</option>";
        echo "<option value='Build-Muscle'>Build-Muscle</option>";
        echo "<option value='Gain-Weight'>Gain-Weight</option>";
    }else if($goal == "Diet"){
        echo "<option value='Fat-Loss'>Fat-Loss</option>";
        echo "<option value='Build-Muscle'>Build-Muscle</option>";
        echo "<option value='Gain-Weight'>Gain-Weight</option>";
    }else if($goal == "Build-Muscle"){
        echo "<option value='Fat-Loss'>Fat-Loss</option>";
        echo "<option value='Diet'>Diet</option>";
        echo "<option value='Gain-Weight'>Gain-Weight</option>";
    }else if($goal == "Gain-Weight"){
        echo "<option value='Fat-Loss'>Fat-Loss</option>";
         echo "<option value='Diet'>Diet</option>";
        echo "<option value='Build-Muscle'>Build-Muscle</option>";}
    
?>

</select>
</div>

<div class="form-group">
<label for="message">Message</label>
<textarea name="message" placeholder="Write something.." class="form-control" style="height:200px"><?php echo $message; ?></textarea>
</div>

<div class="form-group">
<input class="btn btn-primary" type="submit" name="edit_member" value="Edit Member">
</div>
</form>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
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
