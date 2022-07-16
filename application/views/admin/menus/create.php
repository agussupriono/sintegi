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
        selector: "#isi",
        height: 250,
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
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

//set menu
$menusY = array(
    'menus' => array(),
    'parent_menus' => array()
);

foreach ($menus as $menu1) {
    $menusY['menus'][$menu1['menu_id']] = $menu1;
    //creates entry into parent_menus array. parent_menus array contains a list of all menus with children
    $menusY['parent_menus'][$menu1['parent_menu_id']][] = $menu1['menu_id'];
}

function buildMenuY($parent, $menu, $strDeep="") {
    $html = "";
    if (isset($menu['parent_menus'][$parent])) {
        foreach ($menu['parent_menus'][$parent] as $menu_id) {
            if(!isset($GLOBALS['j'])){
                $GLOBALS['j'] = 1;
            } 
            $html .= '<option value="'.$menu['menus'][$menu_id]['menu_id'].'">'.(($strDeep!="") ? $strDeep.">":$strDeep ).substr(strip_tags($menu['menus'][$menu_id]['menu_name']), 0, 30).'</option>';
                
            if (isset($menu['parent_menus'][$menu_id])) {
                if($strDeep==""){
                    $strDeep = "--";
                } else {
                    $strDeep .= str_repeat($strDeep,2);
                }
                $html .= buildMenuY($menu_id, $menu, $strDeep);
                $strDeep = "";
            } 
        }
    }
    return $html;
}

?>

<form action="<?php echo base_url('admin/menus/create') ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="dates" value="<?php echo date('Y-m-d H:i:s'); ?>" >
    <div class="col-md-6">
        <div class="form-group">
            <label>Upload Cover</label>
            <input type="file" name="image" class="form-control" id="file">
            <div class="imagePreview"><img id="imagePrev" src="" width="458px" height="355px"></div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group input-group-lg">
            <label>Menu Name</label>
            <input type="text" name="menu_name" class="form-control" value="<?php echo set_value('menu_name') ?>" required placeholder="Title">
        </div>
        <div class="form-group input-group-lg">
            <label>Short Description</label>
            <input type="text" name="menu_desc" class="form-control" value="<?php echo set_value('menu_desc') ?>" placeholder="Short Description">
        </div>
        <div class="form-group input-group-lg">
            <label>Menu URL</label>
            <input type="text" name="menu_url" class="form-control" value="<?php echo set_value('menu_url') ?>" required placeholder="URL">
        </div>
        <div class="form-group">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="publish">Publish</option>                
                <option value="draft">Draft</option>                           
            </select>
        </div>
        <div class="form-group">
            <label>Parent</label>
            <select name="parent_menu_id" class="form-control">
                <option value="0">-</option>
                <?php
//                foreach ($parent as $parents) {
//                echo '<option value="'.$parents["menu_id"].'">'.$parents["menu_name"].'</option>';
//                }
                echo buildMenuY(0, $menusY);
                ?>                         
            </select>
        </div>
        <div class="form-group input-group-lg">
            <label>CSS</label>
            <input type="text" name="css" class="form-control" value="<?php echo set_value('css') ?>" placeholder="CSS / Flag">
        </div>
        <div class="form-group input-group-lg">
            <label>Seq</label>
            <input type="text" name="seq" class="form-control" value="<?php echo set_value('seq') ?>" placeholder="Urutan">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <input type="submit" name="submit" value="Create" class="btn btn-primary">
            <input type="reset" name="reset" value="Reset" class="btn btn-default">
        </div>
    </div>

</form>