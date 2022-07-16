<?php 
$widSertifikatNDC = $this->mBlogs->getWidget(18);

if(isset($widSertifikatNDC['content'])){ ?>
<section class="section-nine py4" style="background: #272727" >
    <div class="container">
        <?php echo $widSertifikatNDC['content']; ?>
    </div>
</section>
<?php }