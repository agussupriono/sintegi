<?php 
$widCompanyProfile = $this->mBlogs->getWidget(11);
if($widCompanyProfile!=""){ 
    echo $widCompanyProfile['content'];
}
