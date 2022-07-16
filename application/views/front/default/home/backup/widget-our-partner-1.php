<?php 
$widOurPartner = $this->mBlogs->getWidget(15);
if($widOurPartner!=""){ 
    echo $widOurPartner['content'];
}
