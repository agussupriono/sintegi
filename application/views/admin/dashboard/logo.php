<style>
.imgprev {
    width: 150px;
    height: 150px;
    background-position: center center;
    background-size: cover;
    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
    display: inline-block;
}
.imgshow{
    height: 150px;
    width: 100%;
} 
</style>
<script type="text/javascript">
$(function() {
    $("#file").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
        
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
            
            reader.onloadend = function(){ // set image data as background of div
                $("#imagePreview").css("background-image", "url("+this.result+")");
            }
        }
    });
    
    $("#file1").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
        
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
            
            reader.onloadend = function(){ // set image data as background of div
                $("#imagePreview1").css("background-image", "url("+this.result+")");
            }
        }
    });
    
    $("#file2").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
        
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
            
            reader.onloadend = function(){ // set image data as background of div
                $("#imagePreview2").css("background-image", "url("+this.result+")");
            }
        }
    });
});
</script>


<?php
// Session 
if($this->session->flashdata('sukses')) { 
	echo '<div class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	echo '</div>';
} 

// File upload error
if(isset($error)) {
	echo '<div class="alert alert-success">';
	echo $error;
	echo '</div>';
}

// Error
echo validation_errors('<div class="alert alert-success">','</div>'); 
?>
<style>
    div .row {
        margin: 2px;
    }
</style>
<form action="<?php echo base_url('admin/dashboard/logo') ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="config_id" value="<?php echo $site['config_id'] ?>">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Upload New Logo</label>
                <input type="file" name="logo" class="form-control" id="file">
                <div id="imagePreview" class="imgprev"></div>
            </div>
        </div>

        <div class="col-md-6">
            <label>Contoh Ukuran Logo:</label><br>
            <img class="imgshow" src="<?php echo base_url('assets/upload/image/' . $site['logo']); ?>">
            &nbsp; &nbsp; <a href="<?php echo base_url('assets/upload/image/' . $site['logo']); ?>">Lihat Gambar</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Upload New Logo 2</label>
                <input type="file" name="logo1" class="form-control" id="file1">
                <div id="imagePreview1" class="imgprev"></div>
            </div>
        </div>

        <div class="col-md-6">
            <label>Contoh Ukuran Logo 2:</label><br>
            <img class="imgshow" src="<?php echo base_url('assets/upload/image/' . $site['logo1']); ?>">
            &nbsp; &nbsp; <a href="<?php echo base_url('assets/upload/image/' . $site['logo1']); ?>">Lihat Gambar</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Upload New Logo 3</label>
                <input type="file" name="logo2" class="form-control" id="file2">
                <div id="imagePreview2" class="imgprev"></div>
            </div>
        </div>

        <div class="col-md-6">
            <label>Contoh Ukuran Logo 3:</label><br>
            <img class="imgshow" src="<?php echo base_url('assets/upload/image/' . $site['logo2']); ?>">
            &nbsp; &nbsp; <a href="<?php echo base_url('assets/upload/image/' . $site['logo2']); ?>">Lihat Gambar</a>
        </div>
    </div>
    
    <div class="col-md-12">
        <input type="submit" name="submit" value="Save" class="btn btn-primary">
    </div>
</form>