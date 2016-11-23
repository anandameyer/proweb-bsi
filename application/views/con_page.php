<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">PW-BSI
                    <small><a href="#">News</a>
                    </small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url();?>">Home</a>
                    </li>
                    <li class="active">Blog Post</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->
                <?php foreach ($result as $row) {
                ?>
                <h3><?php echo $row->title;?></h3>

                <hr>

                <!-- Date/Time -->
                <?php date_default_timezone_set("Asia/Jakarta");?>
                <p><i class="fa fa-clock-o"></i> <?php $time = strtotime($row->Dtime);$format = date("D, d/M/Y",$time);echo "Diposting pada : ".$format;?></p>

                <hr>

                <!--Preview Image-->
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">

                <hr>

                <!-- Post Content -->
                <p class="lead"><?php echo $row->content;?></p>

                <hr>

                <?php };?>

                <!-- Blog Comments -->

                <!-- Comments Form -->
                <!--<div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>-->

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                <!--<div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </div>
                </div>-->

                <!-- Comment -->
                <!--<div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Start Bootstrap
                            <small>August 25, 2014 at 9:30 PM</small>
                        </h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.-->
                        <!-- Nested Comment -->
                        <!--<div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placehold.it/64x64" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Nested Start Bootstrap
                                    <small>August 25, 2014 at 9:30 PM</small>
                                </h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>-->
                        <!-- End Nested Comment -->
                    <!--</div>
                </div>-->

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <!--<div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                     /.input-group
                </div>-->

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="<?php echo site_url('Content/news_list')."/"."news";?>">News</a>
                                </li>
                                <li><a href="#">Technology</a>
                                </li>
                                <li><a href="#">Microcontroler</a>
                                </li>
                                <li><a href="#">Idea</a>
                                </li>
                            </ul>
                        </div>
                        <!--<div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>-->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Berita Lainnya</h4>
                    <?php foreach ($result2 as $news) {?>
                    <p><a href="<?php echo site_url('Content/get_news')."/".$news->id;?>">
                        <?php echo $news->title;?>
                    </a></p>
                    <?php };?>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>