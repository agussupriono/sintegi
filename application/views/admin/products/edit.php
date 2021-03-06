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
        selector: "#product_description",
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

<form action="<?php echo base_url('admin/products/edit/' . $product['product_id']) ?>" method="post" enctype="multipart/form-data">
    <div class="col-md-6">
        <div class="form-group">
            <label>Upload Cover</label>
            <input type="file" name="image" class="form-control" id="file">
            <div class="imagePreview"><img src="<?php echo base_url('assets/upload/image/thumbs/' . $product['image']) ?>" width="458px" height="355px"></div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group input-group-lg">
            <label>Product Name</label>
            <input type="text" name="product_name" class="form-control" value="<?php echo $product['product_name'] ?>" required placeholder="Title">
        </div>
        <div class="form-group">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="publish" <?php echo ($product['status'] == "publish" ? "selected" : " ") ?>>Publish</option>
                <option value="draft" <?php echo ($product['status'] == "draft" ? "selected" : "") ?>>Draft</option>               
            </select>
        </div> 
        <div class="form-group input-group-lg">
            <label>Price Detail</label>
            <input type="text" name="product_price_detail" class="form-control" value="<?php echo $product['product_price_detail'] ?>" placeholder="Price Detail">
        </div> 
        <div class="form-group input-group-lg">
            <label>Price Detail - 2</label>
            <input type="text" name="product_price_detail2" class="form-control" value="<?php echo $product['product_price_detail2'] ?>" placeholder="Price Detail Baris Ke-2">
        </div> 
        <div class="form-group">
            <label>Description</label>
            <textarea name="product_description" id="product_description" placeholder="Product Description" class="form-control"><?php echo $product['product_description'] ?></textarea>
        </div>    
        <div class="form-group input-group-lg">
            <label>URL Detail / Slug</label>
            <input type="text" name="url_link" class="form-control" value="<?php echo $product['url_link'] ?>" placeholder="Link To Content Detail / Blog">
        </div>
        <div class="form-group">
            <label>Position</label>
            <select name="position" class="form-control">
                <option value="home" <?php echo ($product['position'] == "home") ? "selected" : ""; ?>>Home</option>                
                <option value="hosting" <?php echo ($product['position'] == "hosting") ? "selected" : ""; ?>>Hosting</option>               
                <option value="pendaftaran-domain" <?php echo ($product['position'] == "pendaftaran-domain") ? "selected" : ""; ?>>Pendaftaran Domain</option>
                <option value="collocation" <?php echo ($product['position'] == "collocation") ? "selected" : ""; ?>>Server - Collocation</option>
                <option value="vps" <?php echo ($product['position'] == "vps") ? "selected" : ""; ?>>Server - VPS</option>
                <option value="dedicated"  <?php echo ($product['position'] == "dedicated") ? "selected" : ""; ?>>Server - Dedicated</option>  
            </select>
        </div> 
        <div class="form-group input-group-lg">
            <label>Seq</label>
            <input type="text" name="seq" class="form-control" value="<?php echo $product['seq']; ?>" >
        </div>    
        <div class="form-group input-group-lg">
            <input type="checkbox" name="flag_home" value="1" <?php echo ($product['flag_home']!="0" ? "checked" : ""); ?> > Prioritas
        </div>                              
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <input type="submit" name="submit" value="Update" class="btn btn-primary">
            <a class="btn btn-danger" href="<?php echo base_url('admin/products/'); ?>">Cancel</a>
        </div>
    </div>
</form>