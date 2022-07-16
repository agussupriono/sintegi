<?php
$secPilihDomain = $this->mProducts->listProductsPubPositionSeq('pendaftaran-domain');

if(count($secPilihDomain)>0){
?>
<style>
    .grid-item-prod {
        padding-bottom: 10px;
        padding: 0 .5rem;
    }
    .grid-item-prod-content {
        background: #FFFFFF;
        padding: 10px;
        /*min-height: 440px;*/
        border-radius: 10px;
        color: #000000;
    }
    .price2 span {
        font-size: 14px;
        font-weight: 400;
    }
</style>
<div class="services ampstart-related-section py4 container">
    <ul class="ampstart-related-section-items list-reset flex flex-wrap m0 pb4" style="justify-content: center; padding-bottom: 5px;">
        <?php foreach ($secPilihDomain as $dom) { 
            if($dom['url_link']==""){
                $strUrl = "#";
            } else {
                $strUrl = base_url()."blog/detil/". $dom['url_link'];
            }
            ?>
            <li class="grid-item-prod first col-12 sm-col-6 md-col-3 lg-col-3 py2">
                <a href="<?php echo $strUrl; ?>" style="text-decoration: none;">
                    <div class="grid-item-prod-content center">
                        <amp-img src="<?php echo base_url(); ?>assets/upload/image/<?php echo $dom['image']; ?>" srcset="" height="44" width="132" alt="" style="height:44px; width: 132px; display: block; margin: auto;"></amp-img>
                        <div class="description"><?php echo $dom['product_description']; ?></div>
                        <div class="price2"> 
                            <?php echo $dom['product_price_detail']; ?><br/>
                            <span><?php echo $dom['product_price_detail2']; ?></span>
                        </div>
                    </div>
                </a>
            </li>
        <?php } ?>
    </ul>
</div>
<?php }