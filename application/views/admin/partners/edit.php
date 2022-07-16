<script src="<?php echo base_url() ?>assets/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
	file_browser_callback: function(field, url, type, win) {
        tinyMCE.activeEditor.windowManager.open({
            file: '<?php echo base_url() ?>assets/kcfinder/browse.php?opener=tinymce4&field=' + field + '&type=' + type,
            title: 'KCFinder',
            width: 700,
            height: 500,
            inline: true,
            close_previous: false
        }, {
            window: win,
            input: field
        });
        return false;
    },
    selector: "#isi",
	height: 250,
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
        document_base_url: "<?php echo base_url() . 'assets/upload/image'; ?>",
        relative_urls: true,
        remove_script_host: true,
        convert_urls: false
});
</script>

<style>
#imagePreview {
    margin-top: 7px;
    width: 458px;
    height: 355px;
    background-position: center center;
    background-size: cover;
    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
    display: inline-block;
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

<form action="<?php echo base_url('admin/partners/edit/' . $partner['partner_id']) ?>" method="post" enctype="multipart/form-data">
    <div class="col-md-6">
        <div class="form-group">
            <label>Upload Cover</label>
            <input type="file" name="image" class="form-control" id="file">
            <div class="imagePreview"><img src="<?php echo base_url('assets/upload/image/thumbs/' . $partner['image']) ?>" width="458px" height="355px"></div>
        </div>
        <div class="form-group"> 
            <h3>Notice</h3><hr>
            <div class="alert alert-warning"><label>Important</label><hr>
                Gunakan ukuran gambar :<br>
                <i>
                    <strong>Position Section Eight</strong> : 130px X 63px<br>
                    <strong>Position Footer</strong> : 170px X 83px<br>
                </i>
            </div>    
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group input-group-lg">
            <label>Partner Name</label>
            <input type="text" name="partner_name" class="form-control" value="<?php echo $partner['partner_name'] ?>" required placeholder="Title">
        </div>
        <div class="form-group input-group-lg">
            <label>Link Website</label>
            <input type="text" name="website" class="form-control" value="<?php echo $partner['website'] ?>" required placeholder="Link Website">
        </div>    
        <div class="form-group">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="publish" 
                    <?php if ($partner['status'] == "publish") {
                        echo "selected";
                    } ?>
                        >Publish</option>}
                <option value="draft" 
                    <?php if ($partner['status'] == "draft") {
                        echo "selected";
                    } ?>
                        >Draft</option>}                
            </select>
        </div>     
        <div class="form-group">
            <label>Position</label>
            <select name="position" class="form-control">
                <option value="section-eight" 
                    <?php if ($partner['position'] == "section-eight") {
                        echo "selected";
                    } ?>
                        >Section Eight</option>}
                <option value="footer" 
                    <?php if ($partner['position'] == "footer") {
                        echo "selected";
                    } ?>
                        >Footer</option>}                
            </select>
        </div>  
        <div class="form-group input-group-lg">
            <label>Sequence</label>
            <input type="text" name="seq" class="form-control" value="<?php echo $partner['seq'] ?>" placeholder="Sequence">
        </div>                              
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <input type="submit" name="submit" value="Update" class="btn btn-primary">
            <a class="btn btn-danger" href="<?php echo base_url('admin/partners/'); ?>">Cancel</a>
        </div>
    </div>

</form>