<?php
$secPilihanDC = $this->mBlogs->listBlogsByCategory(20); 

if(count($secPilihanDC)>0){
?>
<div class="container py4">
    <h3 class="bold center py4">Pilihan Data Center</h3>
    <?php foreach ($secPilihanDC as $dc) { ?>
    <div class="datacenter py3">
        <div class="flex flex-wrap">
            <div class="col-12 sm-col-12 md-col-6 lg-col-6">
                <img class="i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" style="height: 100%; width: 100%;" src="<?php echo base_url('/assets/upload/image/') . $dc['image']; ?>" alt="<?php echo $dc['title']; ?>">
            </div>
            <div class="col-12 sm-col-12 md-col-6 lg-col-5 py2 px2">
                <?php echo $dc['content']; ?>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
<?php }