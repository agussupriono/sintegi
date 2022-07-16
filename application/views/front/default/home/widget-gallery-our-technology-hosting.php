<?php 

$galleries = $this->mGalleries->listGalleriesPubPosition("hosting-our-technology");

foreach ($galleries as $galOT) { ?>
    <div style="width: 128px;
                    height: 70px;
                    display: inline-block;
                    margin: 10px 5px;
                    text-align: center;
                    vertical-align: middle; ">
        <div style="height: 100%; display: flex; justify-content: center; align-items: center; ">
            <img src="<?php echo base_url('/assets/upload/image/').$galOT['image']; ?>" alt="<?php echo $galOT['gallery_name']; ?>" style="width: 80%; margin: auto" />
        </div>
    </div>
<?php }
