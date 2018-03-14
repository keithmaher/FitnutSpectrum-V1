<?php include "includes/header.php" ?>

<div id="wrapper">

<!-- Navigation -->
<?php include "includes/nav.php" ?>

<div id="page-wrapper">

<div class="container-fluid">

<?php

if(isset($_GET['source'])){
    $source = $_GET['source'];
}else{
    $source = "";
}

switch($source){
        
        case 'edit_member';
        include "includes/edit_member.php";

        break;
    
        case 'add_member';
        include "includes/add_member.php";
        break;
        
        
    default:
        include "includes/view_all_members.php";
    break;
        
        
        
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
