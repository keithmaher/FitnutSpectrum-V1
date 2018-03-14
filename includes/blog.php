<section class="shr-news-area" id="news">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="shr-section-title">
                        RECENT BLOGS
                        <span class="shr-round"></span>
                    </h2>
                    <p class="shr-sub-title">Expand your mind to help improve the body.</p>
                    <br>
                </div>
            </div>

            <?php
if(isset($_GET['page'])){
$page = $_GET['page'];
}else{
$page = "";
}

if($page == ""){
$page = 1;
}

if($page == "" || $page == 1){
$page_1 = 0;
}else{
$page_1 = ($page * 2) - 2;
}

$blog_query_count = "SELECT * FROM blog";
$find_count = mysqli_query($connection, $blog_query_count);
$count = mysqli_num_rows($find_count);

$count = ceil($count/ 2);

$query = "SELECT * FROM blog ORDER BY blog_id DESC LIMIT $page_1, 2";
$select_blog = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($select_blog)){
$blog_id = $row["blog_id"];
$blog_title = $row["blog_title"];
$blog_author = $row["blog_author"];
$blog_date = $row["blog_date"];
$blog_image = $row["blog_image"];
$blog_content = substr($row["blog_content"],0,200);
$blog_tags = $row["blog_tags"];
$blog_comment_count = $row["blog_comment_count"];
$blog_status = $row["blog_status"];

?>


            <div class="row animatedParent animateOnce">
                <div class="col-sm-12">
                    <div class="shr-news-col animated fadeInLeftShort slow delay-250" style="border-left: 6px solid red;
    background-color: lightgrey;">
                        <div class="shr-news-content">
                            <a style="color: black; text-decoration: none;" href="i_blog.php?b_id=<?php echo $blog_id; ?>"><img class="w3-center img-responsive shr-awesome" style="display:inline;" src="images/<?php echo $blog_image; ?>">
                            <h2><?php echo $blog_title?></h2></a>
                            <div class="shr-news-info clearfix">
                                <ul>
                                    <li><i class="fa fa-clock-o" aria-hidden="true"></i> Published: <?php echo date("d-m-Y", strtotime($blog_date)); ?></li>
                                    <li><i class="fa fa-comment" aria-hidden="true"></i> <?php echo $blog_comment_count; ?> Comments</li>
                                </ul>
                            </div>
                            <p><?php echo $blog_content ?></p>
                        </div>
                    </div>


                    </div>
            </div>

                   <?php  } ?>

                    <div class="w3-container w3-center">
                    <a href="blog.php"><button class="w3-btn w3-red w3-round">VIEW MORE BLOGS</button></a>
                    </div>

        </div>
    </section>
