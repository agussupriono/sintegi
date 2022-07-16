<script src="<?php echo base_url() ?>assets/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({
        file_browser_callback: function (field, url, type, win) {
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
        selector: "#gallery_description",
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
    $(function () {
        $("#file").on("change", function ()
        {
            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader)
                return; // no file selected, or no FileReader support
            
            if (/^image/.test(files[0].type)) { // only image file
                var reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file

                reader.onloadend = function () { // set image data as background of div
                    $("#imagePreview").css("background-image", "url(" + this.result + ")");
                }
            }
        });
    });
</script>


<?php
// Session 
if ($this->session->flashdata('sukses')) {
    echo '<div class="alert alert-success">';
    echo $this->session->flashdata('sukses');
    echo '</div>';
}

// File upload error
if (isset($error)) {
    echo '<div class="alert alert-success">';
    echo $error;
    echo '</div>';
}

// Error
echo validation_errors('<div class="alert alert-success">', '</div>');
?>

<form action="<?php echo base_url('admin/galleries/edit/' . $gallery['gallery_id']) ?>" method="post" enctype="multipart/form-data">
    <div class="col-md-6">
        <div class="form-group">
            <label>Upload Image</label>
            <input type="file" name="image" class="form-control" id="file">
            <div class="imagePreview"><img src="<?php echo base_url('assets/upload/image/thumbs/' . $gallery['image']) ?>" width="458px" height="355px"></div>
        </div>  
        <div class="form-group">
            <h3>Notice</h3><hr>
            <div class="alert alert-warning"><label>Important</label><hr>
                Gunakan ukuran gambar yang sesuai, contohnya seperti :<br>
                <i>
                    <strong>Position Slider</strong> : 1600px X 800px<br>
                    <strong>Position Profil</strong> : 700px X 500px<br>
                    <strong>Position Footer</strong> : 500px X 330px<br>
                    <strong>Position Sertifikasi</strong> : [width] X 70px     
                </i>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group input-group-lg">
            <label>Gallery Name</label>
            <input type="text" name="gallery_name" class="form-control" value="<?php echo $gallery['gallery_name'] ?>" required placeholder="Title">
        </div>
        <div class="form-group">
            <label>Position</label>
            <select name="position" class="form-control">
                <option value="video" <?php echo ($gallery['position'] == "video") ? "selected" : ""; ?>>Home - Video</option>                
                <option value="slider" <?php echo ($gallery['position'] == "slider") ? "selected" : ""; ?>>Home - Slider</option>
                <option value="background" <?php echo ($gallery['position'] == "background") ? "selected" : ""; ?>>Home - Background</option>
                <option value="profil" <?php echo ($gallery['position'] == "profil") ? "selected" : ""; ?>>Profil Page</option>
                <option value="harga" <?php echo ($gallery['position'] == "harga") ? "selected" : ""; ?>>Daftar Harga</option>
                <option value="footer" <?php echo ($gallery['position'] == "footer") ? "selected" : ""; ?>>Footer - Grid Image</option>                                              
                <option value="teamcert" <?php echo ($gallery['position'] == "teamcert") ? "selected" : ""; ?>>Team - Sertifikasi</option>                                              
                <option value="aboutus-partner" <?php echo ($gallery['position'] == "aboutus-partner") ? "selected" : ""; ?>>About Us - Partner</option>                                              
                <option value="aboutus-memberof" <?php echo ($gallery['position'] == "aboutus-memberof") ? "selected" : ""; ?>>About Us - Members Of</option>                                              
                <option value="aboutus-sertifikasi" <?php echo ($gallery['position'] == "aboutus-sertifikasi") ? "selected" : ""; ?>>About Us - Sertifikasi</option>                                             
                <option value="dedicated-kolaboarsi" <?php echo ($gallery['position'] == "dedicated-kolaboarsi") ? "selected" : ""; ?>>Dedicated - Kolaborasi</option>  
                <option value="tool-security-network" <?php echo ($gallery['position'] == "tool-security-network") ? "selected" : ""; ?>>Tool Security Network</option>  
                <option value="colocation-kolaboarsi" <?php echo ($gallery['position'] == "colocation-kolaboarsi") ? "selected" : ""; ?>>Collocation - Kolaborasi</option>  
                <option value="hosting-our-technology" <?php echo ($gallery['position'] == "hosting-our-technology") ? "selected" : ""; ?>>Hosting - Our Technology</option>
            </select>
        </div> 
        <div class="form-group">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="publish" <?php echo ($gallery['status'] == "publish") ? "selected" : ""; ?>>Publish</option>
                <option value="draft" <?php echo ($gallery['status'] == "draft") ? "selected" : ""; ?>>Draft</option>               
            </select>
        </div>  
        <div class="form-group input-group-lg">
            <label>Sequence</label>
            <input type="text" name="seq" class="form-control" value="<?php echo $gallery['seq'] ?>" placeholder="Sequence">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea rows="10" name="gallery_description" id="gallery_description" placeholder="Gallery Description" class="form-control"><?php echo $gallery['gallery_description'] ?></textarea>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <input type="submit" name="submit" value="Update" class="btn btn-primary">
            <a class="btn btn-danger" href="<?php echo base_url('admin/galleries/'); ?>">Cancel</a>
        </div>
    </div>
</form>