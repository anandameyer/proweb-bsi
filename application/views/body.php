<!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>
                <div class="carousel-caption">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">
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

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Latest News
                </h1>
            </div>
            <?php foreach ($result as $row) {?>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i>
                            <?php echo_limit($row->title,30);?></h4>
                    </div>
                    <div class="panel-body">
                        <p><?php echo_limit($row->content,100);?></p>
                        <a href="<?php echo site_url('content/get_news')."/".$row->id;?>">Baca Selengkapnya -></a>
                    </div>
                </div>
            </div>
            <!--<div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i><?php //echo $row->title;?></h4>
                    </div>
                    <div class="panel-body">
                        <p><?php //echo $row->content;?></p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i><?php //echo $row->title;?></h4>
                    </div>
                    <div class="panel-body">
                        <p><?php //echo $row->content;?></p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>-->
            <?php };?>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Categories</h2>
            </div>
            <div class="col-md-2 col-sm-8">
                <a href="<?php echo site_url('Content/news_list')."/"."news";?>">
                    <img class="img-responsive img-portfolio img-hover" src="<?php echo base_url('assets/images/translation.svg');?>" alt="">
                </a>
            </div>
            <div class="col-md-2 col-sm-8">
                <a href="#">
                    <img class="img-responsive img-portfolio img-hover" src="<?php echo base_url('assets/images/light-bulb.svg');?>" alt="">
                </a>
            </div>
            <div class="col-md-2 col-sm-8">
                <a href="#">
                    <img class="img-responsive img-portfolio img-hover" src="<?php echo base_url('assets/images/drone.svg');?>" alt="">
                </a>
            </div>
            <div class="col-md-2 col-sm-8">
                <a href="#">
                    <img class="img-responsive img-portfolio img-hover" src="<?php echo base_url('assets/images/computer-microprocessor.svg');?>" alt="">
                </a>
            </div>
            <!--<div class="col-md-4 col-sm-6">
                <a href="#">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>-->
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Hey! this is my <strong>Blog</strong> site like a <strong>News</strong> site</h2>
            </div>
            <div class="col-md-6">
                <p>This site is our exam project and we really thanks to people who create a simple way to make our idea come true:</p>
                <ul>
                    <li><a href="http://www.bootstrap.com" target="blank">bootstrap.com</a> for HTML and CSS framework </li>
                    <li><a href="http://startbootstrap.com/template-overviews/modern-business" target="blank">Modern Business Template </a> for simple and tidy bootstrap template</li>
                    <li><a href="http://www.jquery.com" target="blank">jquery.com</a> for make our site not like a plain paper </li>
                    <li><a href="http://www.codeigniter.com" target="blank">codeigniter.com</a> for PHP framework </li>
                    <li><a href="http://www.000webhost.com" target="blank">000webhost.com</a> for place this site is live</li>
                    <li><a href="http://www.dot.tk" target="blank">dot.tk</a> they give me a name <a href="http://www.meyer.ga">"meyer.ga"</a></li>
                    <li><a href="http://www.tinymce.com" target="blank">tinymce.com</a> for their awesome WYSIWYG editor</li>
                    <li>and person who responsible about creating this site ( because i'm C programmer -_- )</li>
                </ul>
                <p>Every site in this site is free and on open source license. So this site not belong for me at all ( i just try to compile it :) ></p>
            </div>
            <!--<div class="col-md-6">
                <img class="img-responsive" src="http://placehold.it/700x450" alt="">
            </div>-->
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Hey, i'm Indonesian and proud of it, (sorry for my bad English). Terima kasih kepada para pengunjung situs ini, beri komentar yg baik ya :)</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="#">Back To LIFE !!!</a>
                </div>
            </div>
        </div>

        <hr>