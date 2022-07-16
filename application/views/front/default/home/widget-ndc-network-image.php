<?php 

$widNDCNImage = $this->mBlogs->listBlogBySlug('widget-ndc-network-image');

if(isset($widNDCNImage['content'])){ ?>
<div>
    <?php 
        echo $widNDCNImage['content'];
    ?>
</div>
<?php } 

