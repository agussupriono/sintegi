<?php

$secTeam = $this->mBlogs->listSectionTeam();
$secTeamCert = $this->mGalleries->listGalleriesTeamCertificate(); 

if($secTeam['content']!=""){
?>
<style>
    .image-10 {
        height: 70px;
    }
    .image-11 {
        height: 70px;
    }
    @media (max-width: 576px) {
        .image-10 {
            height: 50px;
        }
        .image-11 {
            height: 50px;
        }
    }
</style>
<section class="section-seven pt4" style="background-color: #FFF">
    <div class="container">
        <div class="need" style="margin-top: 0px;">
            <?php echo $secTeam['content']; ?>
            <div class="certificate" style="margin-top: 10px; text-align: center;">
                <?php foreach ($secTeamCert as $scert) { ?>
                <a target="_blank" href="" style="display: inline-block; padding: 10px;">
                    <?php 
                        if($scert['seq']<10){
                            $strHeight = 'style="height: 50px;"';
                        } else {
                            $strHeight = '';
                        }
                    ?>
                    <img decoding="async" alt="<?php echo $scert['gallery_name']; ?>" src="<?php echo base_url('/assets/upload/image/') . $scert['image']; ?>" class="i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout <?php echo "image-".$scert['seq']; ?>" i-amphtml-layout="fixed" <?php echo $strHeight; ?> />
                </a>
                <?php } ?>
            </div>
        </div>
        <div class="team">
            <amp-img src="<?php echo base_url('/assets/upload/image/') . $secTeam['image']; ?>" width="711" height="376" alt="<?php echo $secTeam['title']; ?>" layout="responsive" class="i-amphtml-element i-amphtml-layout-responsive i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" i-amphtml-layout="responsive"><i-amphtml-sizer slot="i-amphtml-svc" style="padding-top: 52.8833%;"></i-amphtml-sizer><img decoding="async" alt="<?php echo $secTeam['title']; ?>" src="<?php echo base_url('/assets/upload/image/') . $secTeam['image']; ?>" class="i-amphtml-fill-content i-amphtml-replaced-content"></amp-img>
        </div>
        <div class="clearfix"></div>
    </div>
</section>
<?php }