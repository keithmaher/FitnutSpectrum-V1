<div class="row">
<div class="col-lg-12">
<h1 class="page-header">
    Add New Member</h1>
                     
<?php
if(isset($_POST["create_member"])){
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$startdate = $_POST["startdate"];
$goal = $_POST["goal"];
$message = $_POST["message"];

$query = "INSERT INTO members (firstname, lastname, email, startdate, goal, message) VALUES ( '$firstname', '$lastname', '$email', '$startdate', '{$goal}', '$message')";

$create_member_query = mysqli_query($connection, $query);
    

if(!$create_member_query){
die("QUERY FAILED ." . mysqli_error($connection));
}else{
    header ("Location: members.php");
}
}
?>
                       
<form action="" method="post" enctype="multipart/form-data">                                                                               
<div class="form-group">
<label for="firstname">First Name</label>
<input type="text" class="form-control" name="firstname" placeholder="Enter First Name" required="">
</div>

<div class="form-group">
<label for="lastname">Last Name</label>
<input type="text" class="form-control" name="lastname"  placeholder="Enter Last Name" required="">
</div>

<div class="form-group">
<label for="email">Email</label>
<input type="email" name="email" class="form-control" placeholder="Enter member Email Address">
</div>


<div class="form-group">
<label for="startdate">Start Date:</label>
<div class="input-group date">
<input type="date" name="startdate" class="form-control" placeholder="Please select a date">
<label for="startdate" class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
</label>
    </div>
    </div>

<div class="form-group">
<label for="goal">Goal</label>
<select name="goal" class="form-control" >
<option value="Fat-Loss">Fat-Loss</option>
<option value="Diet">Diet</option>
<option value="Build-Muscle">Build Muscle</option>
<option value="Gain-Weight">Gain-Weight</option>
</select>
</div>

<div class="form-group">
<label for="message">Message</label>
<textarea name="message" placeholder="Write something.." class="form-control" style="height:200px"></textarea>
</div>

<div class="form-group">
<input class="btn btn-primary" type="submit" name="create_member" value="Add Member">
</div>
</form>