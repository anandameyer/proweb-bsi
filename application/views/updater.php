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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>

  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({
  selector: 'textarea',
  height: 500,
  theme: 'modern',
  plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools codesample'
  ],
  toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
  image_advtab: true,
  paste_data_images: true,
  images_upload_url: '<?php echo site_url('Uploader');?>',
  automatic_uploads: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });
 </script>
</head>
<body>
<div class="container">
<?php foreach($result as $row){?>
	<div class = "row">
		<div class = "col-lg-12">
			<div class="panel panel-default">
				<div class = "panel-heading">News Editor</div>
				<div class="panel-body">
					<form id = "editor" role = "form" method="POST" action="<?php echo site_url('Editor/updateData')."/".$id;?>">
						<div class="form-group">
							<label>News Title</label>
							<input id = "title" name="title" class="form-control" placeholder="Put your News Title Here ..." value="<?php echo $row->title;?>">
						</div>
            <div class="form-group">
              <label for="sel1">Categories</label>
              <select class="form-control" id="tag" name="tag">
                <option>News</option>
                <option>Technology</option>
                <option>Microcontroler</option>
                <option>Idea</option>
              </select>
            </div>
						<div class="form-group">
							<textarea class="form-control" id="content" name="content"><?php echo $row->content;?></textarea>
						</div>
						<div class="form-group">
							<button id="submit" type="submit" class="btn btn-primary">Submit</button>
							<!--<button id="clear" type="" class="btn btn-danger">Clear</button>-->
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
  <?php };?>
</div>



</body>
</html>