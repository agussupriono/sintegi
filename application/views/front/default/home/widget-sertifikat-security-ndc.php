<?php 
$widSertifikatNDC = $this->mBlogs->getWidget(18);

if(isset($widSertifikatNDC['content'])){ ?>
    <div class="container">
        <?php echo $widSertifikatNDC['content']; ?>
    </div>
<?php }