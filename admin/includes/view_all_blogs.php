<div class="row">
<div class="col-lg-12">
<h1 class="page-header">
    View Blogs
</h1>



<table class="table table-bordered table-hover">
<thead>
<tr>
<th>ID</th>
<th>Title</th>
<th>Author</th>
<th>Date</th>
<th>Image</th>
<th>Content</th>
<th>Tags</th>
<th>Comments</th>
<th>Edit</th>
<th>Delete</th>
<th>View</th>
</tr>
</thead>
<tbody> 

<?php
$query = "SELECT * FROM blog ORDER BY blog_id DESC";
$select_blog = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($select_blog)){
$blog_id = $row["blog_id"];
$blog_title = $row["blog_title"];
$blog_author = $row["blog_author"];
$blog_date = $row["blog_date"];
$blog_image = $row["blog_image"];
$blog_content = substr($row["blog_content"],0,100);
$blog_tags = $row["blog_tags"];
$blog_comment_count = $row["blog_comment_count"];
    
    
echo "<tr>";
echo "<td>$blog_id</td>";
echo "<td>$blog_title</td>";
echo "<td>$blog_author</td>";
echo "<td>". date("d.m.Y", strtotime($blog_date))."</td>";
echo "<td><img src='../images/$blog_image' width='100'></td>";
echo "<td class='content'>$blog_content</td>";
echo "<td>$blog_tags</td>";
echo "<td>$blog_comment_count</td>";
echo "<td><a href='blog.php?source=edit_blog&b_id=$blog_id'>Edit</a></td>";
echo "<td><a href='blog.php?delete=$blog_id'>Delete</a></td>";
echo "<td><a href='../i_blog.php?b_id=$blog_id'>View</a></td>";
echo "</tr>";
 
}
?>           
 
</tbody> 
</table>

<?php
if(isset($_GET['delete'])){
    
    $delete_id = $_GET['delete'];
    $query = "DELETE FROM blog WHERE blog_id = $delete_id";
    $delete_query = mysqli_query($connection, $query);
    header ("Location: blog.php");
   
}











?>

