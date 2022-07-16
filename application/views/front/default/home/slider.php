<amp-carousel style="width: 1600px; height: 800px; margin-top: 1px;" width="1600" height="800" layout="responsive" type="slides" autoplay delay="5000" role="region" aria-label="Carousel with autoplay">
    <?php foreach ($sliderhome as $gallery) { ?>
        <amp-img src="<?php echo base_url().'assets/upload/image/'.$gallery["image"];?>" width="1600" height="800" layout="responsive"></amp-img>
    <?php } ?>
</amp-carousel>
