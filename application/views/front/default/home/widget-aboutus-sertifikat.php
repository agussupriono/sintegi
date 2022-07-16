<?php

$galleries = $this->mGalleries->listGalleriesPubPosition("aboutus-sertifikasi"); 

if(count($galleries)>0){
?>
    <div class="certificate center">
        <?php foreach ($galleries as $gal) { ?>
        <a href="#" target="_blank">
            <img class="i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" style="height: 64px;" src="<?php echo base_url('/assets/upload/image/') . $gal['image']; ?>" alt="<?php echo $gal['gallery_name']; ?>" height="64">
        </a> 
        <?php } ?>
    </div>
<?php }