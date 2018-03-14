<div class="row">
<div class="col-lg-12">
<h1 class="page-header">
    Add Blog
</h1>

<?php
if(isset($_POST['create_blog'])){
    $blog_title = $_POST['title'];
    $blog_author = $_POST['author'];
    $blog_date = $_POST['date'];
    $blog_image = $_FILES['image']['name'];
    $blog_image_tmp = $_FILES['image']['tmp_name'];
    $blog_content = ($_POST['content']);
    $blog_tags = $_POST['tags'];
    
    
    move_uploaded_file($blog_image_tmp, "../images/$blog_image");
    
    $query = "INSERT INTO blog(blog_title, blog_author, blog_date, blog_image, blog_content, blog_tags) VALUES ('{$blog_title}', '{$blog_author}', now(), '{$blog_image}', '{$blog_content}', '{$blog_tags}')";
    
    $create_blog_query = mysqli_query($connection, $query);
    
    if(!$create_blog_query){
        die("QUERY FAILED ." . mysqli_error($connection));
    }else{
        header ("Location: blog.php");
    }

}



?>
<form action="" method="post" enctype="multipart/form-data">                                                                               
<div class="form-group">
<label for="title">Blog Title</label>
<input type="text" class="form-control" name="title">
</div>

<div class="form-group">
<label for="author">Blog Author</label>
<input type="text" class="form-control" name="author">
</div>

<div class="form-group">
<label for="post_date">Post Date</label>
<div class="input-group date">
<input type="date" name="date" class="form-control">
<label for="post_date" class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
</label>
</div>
</div>

<div class="form-group">
<label for="image">Post image</label>
<input type="file" name="image">
</div>

<div class="form-group">
<label for="content">Post Content</label>
<textarea class="form-control" name="content" cols="30" rows="10"></textarea>
</div>

<div class="form-group">
<label for="tags">Post Tags</label>
<input type="text" name="tags" class="form-control"></input>
</div>

<div class="form-group">
<input class="btn btn-primary" type="submit" name="create_blog" value="Publish">
</div>
</form>