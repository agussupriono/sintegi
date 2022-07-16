<?php
$gallerieskolab = $this->mGalleries->listGalleriesPubPosition("dedicated-kolaboarsi"); 

if(count($gallerieskolab)>0){
?>
    <div class="container">
        <h3 class="center mt4 pt3 pb1 bold">Berkolaborasi Untuk Layanan Terbaik</h3>
        <div class="logo center pt2 pb4">
            <?php foreach ($gallerieskolab as $kolab) { ?>
                <div style="margin: 10px 5px; text-align: center; vertical-align: middle; display: inline-block; "><img style="width: 150px; height: 73px; background: #fff; border-radius: 6px; " src="<?php echo base_url('/assets/upload/image/') . $kolab['image']; ?>" alt="<?php echo $kolab['gallery_name']; ?>" height="73" /></div>
            <?php } ?>
        </div>
    </div>
<?php }
