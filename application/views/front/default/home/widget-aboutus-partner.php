<?php

$galleries = $this->mGalleries->listGalleriesPubPosition("aboutus-partner"); 

if(count($galleries)>0){
?>
    <?php foreach ($galleries as $gal) { ?>
    <amp-img src="<?php echo base_url('/assets/upload/image/') . $gal['image']; ?>" height="64px" width="64px" class="i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" i-amphtml-layout="fixed" style="height: 64px; width: 64px;" alt="<?php echo $gal['gallery_name']; ?>">
        <img decoding="async" src="<?php echo base_url('/assets/upload/image/') . $gal['image']; ?>" class="i-amphtml-fill-content i-amphtml-replaced-content" height="64px" width="64px" />
    </amp-img>
    <?php } ?>
<?php }