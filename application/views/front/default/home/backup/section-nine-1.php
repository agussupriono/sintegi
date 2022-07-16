<style>
    .section-nine:before {
        content: "";
        background-image: url(<?php echo base_url('/assets/upload/image/'); ?>border-atas.png);
        background-position-x: center;
        background-position-y: center;
        height: 50px;
        background-repeat: repeat-x;
        position: absolute;
        margin-top: -46px;
        width: 100%;
    }
    .section-nine:after {
        content: "";
        background-image: url(<?php echo base_url('/assets/upload/image/'); ?>border-bawah.png);
        background-position-x: center;
        background-position-y: center;
        height: 50px;
        background-repeat: repeat-x;
        position: absolute;
        margin-top: -10px;
        width: 100%;
    }
</style>
<?php 
$widSertifikatNDC = $this->mBlogs->getWidget(18);

if(isset($widSertifikatNDC['content'])){ ?>
<section class="section-nine py4" style="background: #272727" >
    <div class="container">
        <?php echo $widSertifikatNDC['content']; ?>
    </div>
</section>
<?php }