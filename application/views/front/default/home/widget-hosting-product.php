<?php
$secProd = $this->mProducts->listProductsPubPosition('hosting');

if(count($secProd)>0){
?>
<style>
    .ribbon2 {
        width: 40px;
        padding: 0px;
        position: absolute;
        top: -6px;
        left: 25px;
        text-align: center;
        border-top-left-radius: 3px;
        background: red;
    }
    .ribbon2::after {
        content: "";
        position: absolute;
    }
    .ribbon2::after {
        height: 0;
        width: 0;
        bottom: -19.5px;
        left: 0;
        border-left: 20px solid red;
        border-right: 20px solid red;
        border-bottom: 20px solid transparent;
    }
    .harga p {
        font-size: 70px;
    }
</style>
<div id="pricing-content" class="monthly">
    <div class="flex flex-wrap">
        <?php foreach ($secProd as $pod) { 
            if($pod['flag_home']==0){
                $strStyle = ' style="background: #fff; color: black; padding: 15px 10px 55px; width: 85%;" ';
                $strStyle2 = ' style="background: #fff; color: black;" ';
                $ribbon2 = '';
            } else {
                $strStyle = ' style="background: -webkit-linear-gradient(-45deg,rgba(49,49,49,1) 0,rgba(23,23,23,1) 100%); position: relative; padding: 15px 10px 55px; width: 85%;" ';
                $strStyle2 = ' style="background: none;" ';
                $ribbon2 = '<span class="ribbon2">B<br/>E<br/>S<br/>T</span>';
            }
            ?>
        <div class="col-12 sm-col-12 md-col-4 lg-col-4">
            <div class="pricelist center" <?php echo $strStyle; ?>>
                <?php echo $ribbon2; ?>
                <div class="pricing-title"><?php echo $pod['product_name']; ?></div>
                <div class="pricing-des"><?php echo $pod['product_price_detail']; ?></div>
                <div class="price" style="margin: 20px 0 20px;">
                    <span class="rp" style="position: relative; left: -115px;top: 30px;">IDR</span>
                    <div class="harga month" >
                        <p <?php echo $strStyle2; ?>><?php echo $pod['product_price_detail2']; ?></p>
                    </div>
                    <p>/ bulan</p>
                </div>
                <div class="pricing-spec" <?php echo $strStyle2; ?>><?php echo $pod['product_description']; ?></div>
                <div class="order-btn btn-red" style="background-color: rgb(1, 152, 208); width: 50%; display: inline-block;">
                    <a href="https://wa.me/<?php echo '+62'.str_replace("-", "", $site['phone_number']); ?>?text=Hi%20Optimuspro" target="_blank" rel="noopener">I WANT IT</a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php }