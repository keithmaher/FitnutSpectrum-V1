<?php
if(isset($_GET['b_id'])){
  $edit_blog_id = $_GET['b_id'];
}

$query = "SELECT * FROM blog WHERE blog_id = $edit_blog_id";
$edit_blog = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($edit_blog)){
$blog_id = $row["blog_id"];
$blog_title = $row["blog_title"];
$blog_author = $row["blog_author"];
$blog_date = $row["blog_date"];
$blog_image = $row["blog_image"];
$blog_content = $row["blog_content"];
$blog_tags = $row["blog_tags"];
$blog_comment_count = $row["blog_comment_count"];
$blog_status = $row["blog_status"];
    

}

if(isset($_POST['edit_blog'])){
    $blog_title = $_POST['title'];
    $blog_author = $_POST['author'];
    $blog_date = date('d-m-Y');
    $blog_image = $_FILES['image']['name'];
    $blog_image_tmp = $_FILES['image']['tmp_name'];
    $blog_content = ($_POST['content']);
    $blog_tags = $_POST['tags'];
    move_uploaded_file($blog_image_tmp, "../images/$blog_image");
    
    if(empty($blog_image)){
        $query = "SELECT * FROM blog WHERE blog_id = $edit_blog_id";
        $select_image = mysqli_query($connection, $query);
        while($row = mysqli_fetch_array($select_image)){
            $blog_image = $row['blog_image'];
        }
    }
    
    $query = "UPDATE blog SET ";
    $query .= "blog_title = '$blog_title', ";
    $query .= "blog_author = '$blog_author', ";
    $query .= "blog_date = now(), ";
    $query .= "blog_image = '$blog_image', ";
    $query .= "blog_content = '$blog_content', ";
    $query .= "blog_tags = '$blog_tags' ";
    $query .= "WHERE blog_id = $edit_blog_id";

    $edit_blog_query = mysqli_query($connection, $query);
    
    if(!$edit_blog_query){
        die("QUERY FAILED ." . mysqli_error($connection));
    }else{
        header ("Location: blog.php");
    }

}
    
?> 




<div class="row">
<div class="col-lg-12">
<h1 class="page-header">
    Edit Blog
</h1>   

<form action="" method="post" enctype="multipart/form-data">                                                                               
<div class="form-group">
<label for="title">Blog Title</label>
<input value="<?php echo $blog_title; ?>" type="text" class="form-control" name="title">
</div>

<div class="form-group">
<label for="author">Blog Author</label>
<input value="<?php echo $blog_author; ?>" type="text" class="form-control" name="author">
</div>

<div class="form-group">
<label for="post_date">Post Date</label>
<div class="input-group date">
<input value="<?php echo $blog_date; ?>"type="date" name="post_date" class="form-control">
<label for="post_date" class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
</label>
</div>
</div>

<div class="form-group">
<label for="image">Post image</label>
<input type="file" name="image"> <br><img class="img-responsive" width="200" src="../images/<?php echo $blog_image; ?>"
    </input>
    
</div>

<div class="form-group">
<label for="content">Post Content</label>
<textarea class="form-control" name="content" cols="30" rows="10"><?php echo $blog_content; ?>"</textarea>
</div>

<div class="form-group">
<label for="tags">Post Tags</label>
<input value="<?php echo $blog_tags; ?>" type="text" name="tags" class="form-control"></input>
</div>

<div class="form-group">
<input class="btn btn-primary" type="submit" name="edit_blog" value="Edit Blog">
</div>
</form>
