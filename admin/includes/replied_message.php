<?php include "../../includes/db.php" ?>
<?php
if(isset($_GET['Replied'])){
  $reply_id = $_GET['Replied'];

$query = "SELECT * FROM message WHERE blog_id = $reply_id";
$reply_message = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($reply_message)){
$reply_message = $row["reply"];
}
 

$query = "UPDATE message SET reply = 'YES' WHERE message_id = $reply_id";
    
$message_query = mysqli_query($connection, $query);

if(!$message_query){
        die("QUERY FAILED ." . mysqli_error($connection));
    }else{
        header ("Location: ../view_message.php");
    }

}   
?>