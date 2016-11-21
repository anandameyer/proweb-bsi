tinymce.init({
  //relative_urls : false,
  //remove_script_host : false,
  //document_base_url: '<?php echo base_url("assets");?>',
  selector: 'textarea',
  height: 500,
  theme: 'modern',
  plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools codesample'
  ],
  toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image ',
  toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
  image_advtab: true,
  paste_data_images: true,
  images_upload_url: '<?php echo site_url("Uploader");?>',
  automatic_uploads: false,
  //relative_urls: false,
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ],
    file_browser_callback_types: 'file image media',
    file_picker_callback: function(callback, value, meta) {
      $('input:file').click();
  }
 });


