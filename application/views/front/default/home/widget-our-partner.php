<?php 
$widOurPartner = $this->mPartners->listPartnersFooterPublish();
?>
<div class="widget">
    <div class="widget-title bold">Our Partners</div>
    <div class="widget-content">
        <ul class="list-reset">
            <?php foreach ($widOurPartner as $OuPart) { ?>
            <li><img class="i-amphtml-element i-amphtml-layout-fixed i-amphtml-layout-size-defined i-amphtml-built i-amphtml-layout" style="width: 177px; height: 83px; --loader-delay-offset: 370ms !important; border-radius: 4px;" src="<?php echo base_url('/assets/upload/image/').$OuPart['image']; ?>" alt="<?php echo $OuPart['partner_name']; ?>" /></li>
            <?php } ?>
        </ul>
    </div>
</div>