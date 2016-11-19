 <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">PW-BSI
                    <small>Categories</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url('');?>">Home</a>
                    </li>
                    <li class="active">News List</li>
                </ol>
            </div>
        </div>

        <?php 
        function echo_limit($str,$len)
        {
            if (strlen($str)<$len)
            {
                echo $str."....";
            }
            else
            {
                $limit = substr($str,0,$len);
                echo $limit."....";
            };
        };
        ?>
        <!-- /.row -->

        <!-- Blog Post Row -->
        <?php foreach ($result as $row) {?>
        <div class="row">
            <!--<div class="col-md-1 text-center">
                <p><i class="fa fa-camera fa-4x"></i>
                </p>
                <p>June 17, 2014</p>
            </div>-->
            <!--<div class="col-md-5">
                <a href="blog-post.html">
                    <img class="img-responsive img-hover" src="http://placehold.it/600x300" alt="">
                </a>
            </div>-->
            <div class="col-md-6">
                <h3>
                    <a href="<?php echo site_url('content/get_news')."/".$row->id;?>"><?php echo_limit($row->title,50);?></a>
                </h3>
                <!--<p>by <a href="#">Start Bootstrap</a>
                </p>-->
                <p><?php echo_limit($row->content,150);?></p>
                <a href="<?php echo site_url('content/get_news')."/".$row->id;?>">Baca selanjutnya...</a>
            </div>
        </div>
        <!-- /.row -->
        <hr>

        
        <?php };?>
        <!-- Blog Post Row -->
        <!--<div class="row">
            <div class="col-md-1 text-center">
                <p><i class="fa fa-film fa-4x"></i>
                </p>
                <p>June 17, 2014</p>
            </div>
            <div class="col-md-5">
                <a href="blog-post.html">
                    <img class="img-responsive img-hover" src="http://placehold.it/600x300" alt="">
                </a>
            </div>
            <div class="col-md-6">
                <h3><a href="blog-post.html">Blog Post Title</a>
                </h3>
                <p>by <a href="#">Start Bootstrap</a>
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <a class="btn btn-primary" href="blog-post.html">Read More <i class="fa fa-angle-right"></i></a>
            </div>
        </div>-->
        <!-- /.row -->

        <!--<hr>-->

        <!-- Blog Post Row -->
        <!--<div class="row">
            <div class="col-md-1 text-center">
                <p><i class="fa fa-file-text fa-4x"></i>
                </p>
                <p>June 17, 2014</p>
            </div>
            <div class="col-md-5">
                <a href="blog-post.html">
                    <<img class="img-responsive img-hover" src="http://placehold.it/600x300" alt="">
                </a>
            </div>
            <div class="col-md-6">
                <h3><a href="blog-post.html">Blog Post Title</a>
                </h3>
                <p>by <a href="#">Start Bootstrap</a>
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <a class="btn btn-primary" href="blog-post.html">Read More <i class="fa fa-angle-right"></i></a>
            </div>
        </div>-->
        <!-- /.row -->

        <!--<hr>-->

        <!-- Pager -->
        <!--<div class="row">
            <ul class="pager">
                <li class="previous"><a href="#">&larr; Older</a>
                </li>
                <li class="next"><a href="#">Newer &rarr;</a>
                </li>
            </ul>
        </div>-->
        <!-- /.row -->