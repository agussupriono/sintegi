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
        selector: "#about",
        height: 250,
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
    });
</script>

<?php
// Session 
if ($this->session->flashdata('sukses')) {
    echo '<div class="alert alert-success">';
    echo $this->session->flashdata('sukses');
    echo '</div>';
}
// Error
echo validation_errors('<div class="alert alert-success">', '</div>');
?>

<form action="<?php echo base_url('admin/dashboard/config') ?>" method="post">

    <input type="hidden" name="config_id" value="<?php echo $site['config_id'] ?>">

    <div class="col-md-6">
        <h3>General Settings</h3><hr>
        <div class="form-group">
            <label>Website Name</label>
            <input type="text" name="nameweb" placeholder="Nama Website" value="<?php echo $site['nameweb'] ?>" required class="form-control">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="address" placeholder="Alamat" value="<?php echo $site['address'] ?>" required class="form-control">
        </div>
        <div class="form-group">
            <label>Kota</label>
            <input type="text" name="city" placeholder="Kota" value="<?php echo $site['city'] ?>" required class="form-control">
        </div>
        <div class="form-group">
            <label>Kode Pos</label>
            <input type="text" name="zip_code" placeholder="Kode Pos" value="<?php echo $site['zip_code'] ?>" required class="form-control">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" placeholder="Email" value="<?php echo $site['email'] ?>" required class="form-control">
        </div>
        <div class="form-group">
            <label>Phone Number</label>
            <input type="text" name="phone_number" placeholder="Phone Number" value="<?php echo $site['phone_number'] ?>" required class="form-control">
        </div> 
        <div class="form-group">
            <label>Fax</label>
            <input type="text" name="fax" placeholder="Fax" value="<?php echo $site['fax'] ?>" required class="form-control">
        </div>     
        <div class="form-group">
            <label>Theme</label>
            <select name="theme" class="form-control">
                <?php foreach ($themes as $theme) { ?>
                <option value="<?php echo $theme['theme_code'] ?>" <?php if ($site['theme'] == $theme['theme_code']) {
                        echo "selected";
                    } ?>>
                <?php echo $theme['theme_name'] ?>
                </option>
                <?php } ?>
<!--                <option value="interior" <?php if($site['theme']=="interior") { echo "selected"; } ?>>Default</option>                           
                <option value="catchycarz" <?php if($site['theme']=="catchycarz") { echo "selected"; } ?>>Catchy Carz</option>                          
                <option value="shine" <?php if($site['theme']=="shine") { echo "selected"; } ?>>Shine</option>                          -->
            </select>
        </div>
        <div class="form-group">
            <label>Color</label>
          <div id="color" class="input-group colorpicker-component">
            <input type="text" name="color" placeholder="Color" value="<?php echo $site['color'] ?>" required class="form-control">
            <span class="input-group-addon"><i></i></span>
          </div>
        </div> 
        <div class="form-group">
            <label>Color 2nd</label>
          <div id="color_2" class="input-group colorpicker-component">
            <input type="text" name="color_2" placeholder="Color" value="<?php echo $site['color_2'] ?>" required class="form-control">
            <span class="input-group-addon"><i></i></span>
          </div>
        </div>  
        <div class="form-group">
            <label>Color 3rd</label>
          <div id="color_3" class="input-group colorpicker-component">
            <input type="text" name="color_3" placeholder="Color" value="<?php echo $site['color_3'] ?>" required class="form-control">
            <span class="input-group-addon"><i></i></span>
          </div>
        </div> 
    </div>

    <div class="col-md-6">
        <h3>Modul SEO (Search Engine Optimization)</h3><hr>
        <div class="form-group">
            <label>Keywords (Google search keywords)</label>
            <textarea name="keywords" rows="3" class="form-control" placeholder="Kata kunci / keywords"><?php echo $site['keywords'] ?></textarea>
        </div>

        <div class="form-group">
            <label>Metatext (Ex : Description)</label>
            <textarea name="metatext" rows="5" class="form-control" placeholder="Kode metatext"><?php echo $site['metatext'] ?></textarea>
        </div>

    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label>About</label>
            <textarea name="about" placeholder="Tentang Website" class="form-control" value="about" id="about"><?php echo $site['about']; ?></textarea>
        </div>
    </div>

    <div class="col-md-12">
        <input type="submit" name="submit" value="Save" class="btn btn-primary">
        <input type="reset" name="reset" value="Reset" class="btn btn-default">
    </div>

</form>

<script>
    $(function() {
        $('#color').colorpicker({
            format: 'rgba'
        });
        $('#color_2').colorpicker({
            format: 'rgba'
        });
        $('#color_3').colorpicker({
            format: 'rgba'
        });
    });
</script>