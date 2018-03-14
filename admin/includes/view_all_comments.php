<div class="row">
<div class="col-lg-12">
<h1 class="page-header">
    View Comments
</h1>



<table class="table table-bordered table-hover">
<thead>
<tr>
<th>ID</th>
<th>Author</th>
<th>Date</th>
<th>Content</th>
<th>In Response To</th>
<th>Delete</th>
</tr>
</thead>
<tbody> 

<?php
$query = "SELECT * FROM comments ORDER BY comment_id DESC";
$select_blog = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($select_blog)){
$comment_id = $row["comment_id"];
$comment_post_id = $row["comment_post_id"];
$comment_author = $row["comment_author"];
$comment_date = $row["comment_date"];
$comment_content = substr($row["comment_content"],0,100);
    
    
echo "<tr>";
echo "<td>$comment_id</td>";
echo "<td>$comment_author</td>";
echo "<td>". date("d.m.Y", strtotime($comment_date))."</td>";
echo "<td class='content'>$comment_content</td>";
    $query = "SELECT * FROM blog WHERE blog_id = $comment_post_id";
    $select_blog_id_query = mysqli_query($connection, $query);
    while($row = mysqli_fetch_assoc($select_blog_id_query)){
        $blog_id = $row['blog_id'];
        $blog_title = $row['blog_title'];
        echo "<td><a href='../i_blog.php?b_id=$blog_id'>$blog_title</a></td>";
    }    
echo "<td><a href='comments.php?delete=$comment_id'>Delete</a></td>";
echo "</tr>";
 
}
?>           
 
</tbody> 
</table>
<?php
    if(isset($_GET['delete'])){
    
    $delete_id = $_GET['delete'];
    $query = "DELETE FROM comments WHERE comment_id = $delete_id";
    $delete_query = mysqli_query($connection, $query);
    header("Location: comments.php");
    }    
 
   
?>
