<?php 
$widCompanyServices = $this->mBlogs->getWidget(14);
if($widCompanyServices!=""){ 
    echo $widCompanyServices['content'];
}
