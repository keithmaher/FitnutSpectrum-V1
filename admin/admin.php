<?php include "includes/header.php" ?>

    <div id="wrapper">

        <!-- Navigation -->
      <?php include "includes/nav.php" ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome <?php echo $_SESSION['admin_name'];?>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->


                <!-- /.row -->

<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    <?php
                        $query = "SELECT * FROM blog";
                        $select_all_blogs = mysqli_query($connection, $query);
                        $blog_count = mysqli_num_rows($select_all_blogs);

                        echo "<div class='huge'>$blog_count</div>"
                        ?>
                        <div>Blogs</div>
                    </div>
                </div>
            </div>
            <a href="blog.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    <?php
                        $query = "SELECT * FROM message";
                        $select_all_messages = mysqli_query($connection, $query);
                        $message_count = mysqli_num_rows($select_all_messages);
                        echo "<div class='huge'>$message_count</div>"
                        ?>
                      <div>Messages</div>
                    </div>
                </div>
            </div>
            <a href="view_message.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    <?php
                        $query = "SELECT * FROM members";
                        $select_all_members = mysqli_query($connection, $query);
                        $member_count = mysqli_num_rows($select_all_members);

                        echo "<div class='huge'>$member_count</div>"
                        ?>
                        <div>Members</div>
                    </div>
                </div>
            </div>
            <a href="view_all_members.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-list fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <?php
                        $query = "SELECT * FROM comments";
                        $select_all_comments = mysqli_query($connection, $query);
                        $comment_count = mysqli_num_rows($select_all_comments);

                        echo "<div class='huge'>$comment_count</div>"
                        ?>
                         <div>Comments</div>
                    </div>
                </div>
            </div>
            <a href="comments.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
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
