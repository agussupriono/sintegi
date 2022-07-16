<?php if(isset($secThree[0])){ ?>
<style>
    .grid-item {
        padding-bottom: 10px;
    }
</style>
<section class="section-three">
    <div class="services ampstart-related-section py4 container">
        <ul class="ampstart-related-section-items list-reset flex flex-wrap m0 pb4" style="justify-content: center; padding-bottom: 5px;">
            <?php foreach ($secThree as $prodSecThree) { 
                if($prodSecThree['url_link']==""){
                    $strUrl = base_url();
                } else {
                    $strUrl = base_url()."blog/detil/". $prodSecThree['url_link'];
                }
                ?>
                <li class="grid-item first col-12 sm-col-6 md-col-3 lg-col-3 py2">
                    <a href="<?php echo $strUrl; ?>" style="text-decoration: none;">
                        <div class="grid-item-content center">
                            <amp-img src="<?php echo base_url(); ?>assets/upload/image/<?php echo $prodSecThree['image']; ?>" srcset="" width="146" height="72" alt=""></amp-img>
                            <h2 class="title"><?php echo $prodSecThree['product_name']; ?></h2>
                            <div class="description"><?php echo $prodSecThree['product_description']; ?></div>
                            <div class="price2"> <span><?php echo $prodSecThree['product_price_detail']; ?></span><br/>
                                <?php echo $prodSecThree['product_price_detail2']; ?></div>
                        </div>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
</section>
<?php }