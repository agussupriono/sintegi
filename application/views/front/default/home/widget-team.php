<?php 

$secTeam = $this->mBlogs->listSectionTeam();
$secTeamCert = $this->mGalleries->listGalleriesTeamCertificate(); 
        
if(isset($secTeam['content'])){ ?>
    <div class="container">
        <div class="need">
            <?php echo $secTeam['content']; ?>
            <div class="certificate">
                <?php foreach ($secTeamCert as $scert) { ?>
                <a target="_blank" href="" style="display: inline-block;">
                    <img decoding="async" alt="<?php echo $scert['gallery_name']; ?>" src="<?php echo base_url('/assets/upload/image/') . $scert['image']; ?>" class="i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" style="height: 70px;" i-amphtml-layout="fixed"></amp-img></a>
                <?php } ?>
            </div>
        </div>
        <div class="team">
            <amp-img src="<?php echo base_url('/assets/upload/image/') . $secTeam['image']; ?>" width="711" height="376" alt="<?php echo $secTeam['title']; ?>" layout="responsive" class="i-amphtml-element i-amphtml-layout-responsive i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" i-amphtml-layout="responsive"><i-amphtml-sizer slot="i-amphtml-svc" style="padding-top: 52.8833%;"></i-amphtml-sizer><img decoding="async" alt="<?php echo $secTeam['title']; ?>" src="<?php echo base_url('/assets/upload/image/') . $secTeam['image']; ?>" class="i-amphtml-fill-content i-amphtml-replaced-content"></amp-img>
        </div>
        <div class="clearfix"></div>
    </div>
<?php }