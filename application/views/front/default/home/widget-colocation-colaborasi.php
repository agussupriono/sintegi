
<?php
$gallerieskolabColo = $this->mGalleries->listGalleriesPubPosition("colocation-kolaboarsi"); 

if(count($gallerieskolabColo)>0){
?>
    <div class="container">
        <h3 class="center mt4 pt3 pb1 bold">Berkolaborasi Untuk Layanan Terbaik</h3>
        <div class="logo center pt2 pb4">
            <?php foreach ($gallerieskolabColo as $kolabC) { ?>
                <div style="width: 150px;
                            height: 85px;
                            background: #fff;
                            display: inline-block;
                            border-radius: 6px;
                            margin: 10px 5px;
                            text-align: center;
                            vertical-align: middle; ">
                    <div style="height: 100%; display: flex; justify-content: center; align-items: center; ">
                        <img src="<?php echo base_url('/assets/upload/image/') . $kolabC['image']; ?>" alt="<?php echo $kolabC['gallery_name']; ?>" style="width: 70%; margin: auto" />
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<?php }
