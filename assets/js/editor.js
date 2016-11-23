tinymce.init({
  //relative_urls : false,
  //remove_script_host : false,
  //document_base_url: '<?php echo base_url("assets");?>',
  selector: 'textarea',
  height: 500,
  theme: 'modern',
  plugins: [
    'advlist autolink lists link charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime nonbreaking table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern codesample'
  ],
  toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link ',
  toolbar2: 'print preview media | forecolor backcolor emoticons | codesample'
 });

tinymce.init({
  document_base_url: 'http://localhost/proweb-bsi/assets/tinymce/',
  relative_urls : false,
  remove_script_host : false,
  selector: 'h3#judul',
  inline: true,
  toolbar: 'undo redo',
  menubar: false
});

tinymce.init({
  document_base_url: 'http://localhost/proweb-bsi/assets/tinymce/',
  relative_urls : false,
  remove_script_host : false,
  selector: 'div.content',
  inline: true,
  plugins: [
    'advlist autolink lists link charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste'
  ],
  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link '
});
