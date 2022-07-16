<?php

$galleriesmemof = $this->mGalleries->listGalleriesPubPosition("aboutus-memberof"); 

if(count($galleriesmemof)>0){
?>
    <?php foreach ($galleriesmemof as $gal) { ?>
    <img class="i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" style="width: 320px; height: 77px;" src="<?php echo base_url('/assets/upload/image/') . $gal['image']; ?>" alt="" width="320" height="77" />
    <?php } ?>
<?php }