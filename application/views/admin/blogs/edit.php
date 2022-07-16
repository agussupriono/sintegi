<script src="<?php echo base_url() ?>assets/front/default/js/jquery-2.2.3.min.js"></script>
<script src="<?php echo base_url() ?>assets/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({
        file_browser_callback: function (field, url, type, win) {
            tinyMCE.activeEditor.windowManager.open({
                file: '<?php echo base_url() ?>assets/kcfinder/browse.php?opener=tinymce4&field='+field+'&type='+type,
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
        selector: ".txttinymce",
        extended_valid_elements: 'span[*]',
        height: 300,
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
                    $("#imagePrev").attr("src", this.result);
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

<form action="<?php echo base_url('admin/blogs/edit/' . $blog['blog_id']) ?>" method="post" enctype="multipart/form-data">

    <div class="col-md-6">
        <div class="form-group input-group-lg">
            <label>Slug Blug</label>
            <input type="text" name="slug_blog" class="form-control" value="<?php echo $blog['slug_blog'] ?>" required placeholder="slug blog">
        </div>
        <div class="form-group input-group-lg">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="<?php echo $blog['title'] ?>" required placeholder="Title">
        </div>
        <div class="form-group">
            <label>Category Blog</label>
            <select name="category_id" class="form-control">
                    <?php foreach ($category as $category) { ?>
                    <option value="<?php echo $category['category_id'] ?>" <?php if ($blog['category_id'] == $category['category_id']) {
                        echo "selected";
                    } ?>>
    <?php echo $category['category_name'] ?>
                    </option>
<?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Status</label>
            <select name="status" class="form-control">

                <option value="publish" 
                <?php if ($blog['status'] == "publish") {
                    echo "selected";
                } ?>
                        >Publish</option>}

                <option value="draft" 
<?php if ($blog['status'] == "draft") {
    echo "selected";
} ?>
                        >Draft</option>}                

            </select>
        </div>   
        <div class="form-group input-group-lg">
            <label>Keywords <i>(Example : News Update)</i></label>
            <input type="text" name="keywords" class="form-control" value="<?php echo $blog['keywords'] ?>" required placeholder="Keywords Google">
        </div> 
        <div class="form-group input-group-lg">
            <label>Bootstrap Class</label>
            <input type="text" name="bs_class" class="form-control" value="<?php echo $blog['bs_class'] ?>" placeholder="Bootstrap Class">
        </div> 
        <div class="form-group input-group-lg">
            <label>Seq</label>
            <input type="text" name="seq" class="form-control" value="<?php echo $blog['seq'] ?>" placeholder="Urutan">
        </div>  
        <div class="form-group">
            <label>
                <input type="checkbox" name="flag_home" value="1" <?php echo ($blog['flag_home']=="1" ? "checked" : "") ?>> Display In Homepage
            </label>
        </div>  
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Upload Cover</label>
            <input type="file" name="image" class="form-control" id="file">
            <div class="imagePreview"><img id="imagePrev" src="<?php 
                if($blog['image']!=""){
                    echo base_url('assets/upload/image/thumbs/' . $blog['image']);
                } else {
                    echo "";
                }
            ?>" width="458px" height="355px"></div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label>Sort Description</label>
            <textarea name="content_short" id="content_short" placeholder="Short Description" class="form-control txttinymce"><?php echo $blog['content_short'] ?></textarea>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="content" id="content" placeholder="Content Blog" class="form-control txttinymce"><?php echo $blog['content'] ?></textarea>
        </div>

        <div class="form-group">
            <input type="submit" name="submit" value="Update" class="btn btn-primary">
            <a class="btn btn-danger" href="<?php echo base_url('admin/blogs/'); ?>">Cancel</a>
        </div>
    </div>

</form>