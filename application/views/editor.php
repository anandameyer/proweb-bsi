<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" context="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta name="description" content="Proweb BSI by meyer.ga">

    <title>Proweb BSI</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/modern-business.css');?>" rel="stylesheet">

    <!-- here Script For Page -->
    <script src="<?php echo base_url('assets/js/jquery-1.12.3.js');?>"></script>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/editor.js');?>"></script>
</head>
<body>
<div class="container">
	<div class = "row">
		<div class = "col-lg-12">
			<div class="panel panel-default">
				<div class = "panel-heading">News Editor</div>
				<div class="panel-body">
					<form id = "editor" role = "form" method="POST" action="<?php echo site_url('Editor/insertData');?>">
						<div class="form-group">
    						<label>News Title</label>
    						<input id = "title" name="title" class="form-control" placeholder="Put your News Title Here ...">
						</div>
                        <div class="form-group">
                              <label>Categories</label>
                              <select class="form-control" id="tag" name="tag">
                                <option>News</option>
                                <option>Technology</option>
                                <option>Microcontroler</option>
                                <option>Idea</option>
                              </select>
                        </div>
                        <div class="form-group">
                            <input type="file" name="file"/>
                        </div>
						<div class="form-group">
							<textarea class="form-control" id="content" name="content"></textarea>
						</div>
						<div class="form-group">
							<button id="submit" type="submit" class="btn btn-primary">Submit</button>
						</div>
            <div class="well">
                    <h4>Edit News</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                            <?php foreach ($result as $row) {?>
                                <li><a href="<?php echo site_url('Editor/getNews')."/".$row->id;?>"><?php echo $row->title;?></a>
                                </li>
                                <?php };?>
                            </ul>
                        </div>
                    </div>
                </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>



</body>
</html>


