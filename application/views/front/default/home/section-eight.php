<?php
    $secEight = $this->mPartners->listPartnersSectionEightPublish();
?>
<section class="section-eight">
    <div class="container center">
        <?php foreach ($secEight as $secClientRow) { ?>
        <div class="imgpartner" style="margin-top: 20px; margin-bottom: 10px;">
            <amp-img src="<?php echo base_url('/assets/upload/image/').$secClientRow['image']; ?>" height="48" width="100" alt="<?php echo $secClientRow['partner_name']; ?>"></amp-img>
        </div>
        <?php } ?>
    </div>
</section>
