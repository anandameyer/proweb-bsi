<!-- Page Content -->
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script src="<?php echo base_url('assets/js/editor.js');?>"></script>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">PW-BSI
                    <small><a href="#">Content Editor</a>
                    </small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url();?>">Home</a>
                    </li>
                    <li class="active">Post Editor</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <h3 id="judul"><p>Tulis Judul Berita Disini<p></h3>
                
                <hr>

                <p><i class="fa fa-clock-o"></i></p>

                <hr>

                <img class="img-responsive changeable" src="<?php echo base_url('assets/images/landscape.svg');?>" alt="" id="gamBer">
                <hr>
                <div class="content" id="isi"><p>Isi berita diisi disini ....</p></div>

                <hr>
                
                <hr>
            
            </div>
            <div class="col-md-4">
                <div class="well">
                    <h4>Kategori</h4>
                    <div class="row">
                        <div class="col-lg-6">
                              <select class="form-control" id="tag" name="tag">
                                <option>News</option>
                                <option>Technology</option>
                                <option>Microcontroler</option>
                                <option>Idea</option>
                              </select>
                              <hr>
                                <button class="btn btn-primary submit">Submit</button>
                                
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="well">
                    <h4>Edit News</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                            <?php foreach ($result as $row) {?>
                                <li class="changeable">
                                </li>
                                <?php };?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form id="upGambar" enctype="multipart/form-data"><input type="file" name="file" id="gambar" style="display: none;"></form>

        <hr>

<script>
    var gambar;
    $('img,#gamBer').click(function(e){
    e.preventDefault();
    $('input:file').click();
    $('input:file').on("change",function(){
        var formData = new FormData();
        formData.append('file', $('input[type=file]')[0].files[0]);
        $.ajax({
            url:"<?php echo site_url('Uploader');?>",
            type:"POST",
            data:formData,
            processData: false,
            contentType: false,
            cache: false,
            success: function(data){
                var url="<?php echo base_url('assets/upload/');?>";
                $('img,#gamBer').removeAttr("src");
                $('img,#gamBer').attr("src",url+data.file_name);
                gambar = data.file_name;
                console.log(data.full_path);
            }
        });
    });
});
    $(document).ready(function(){
        var d = new Date();
        var tanggal = d.getDay()+"/"+d.getDate()+"/"+d.getFullYear();
        $('i.fa').append("Diposting pada : "+tanggal);
        var button = $('button.submit');
        button.click(function(e){
            var judul = $('h3#judul').html();
            var isi = $('div.content').html();
            var kategori = $('select :selected').text();
            var fData = {
            tag:kategori,
            title:judul,
            content:isi,
            url:gambar
            }
            $.ajax({
                url:"<?php echo site_url('Editor/insertData');?>",
                type:"POST",
                crossDomain: true,
                data:fData,
                success: function(){
                    console.log("success");
                }
            });
        });
    });
    


</script>