<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    // Main Page Home
    public function index() {

        $site = $this->mConfig->list_config();
        $homeBG = $this->mGalleries->listGalleriesHomeBackground();
        $menus = $this->mMenus->listMenusPublish();
        $secTwo = $this->mBlogs->listSectionTwo();
        $secThree = $this->mProducts->listProductsPubPosition('home');
        $secFour = $this->mBlogs->listSectionFour();
        $secFive = $this->mBlogs->listSectionFive();
        $secSix = $this->mBlogs->listSectionSix();
        $partnerFooter = $this->mPartners->listPartnersFooterPublish();
                
        $data = array('title' => 'ISP with best security - ' . $site['nameweb'],
            'site' => $site,
            'homeBG' => $homeBG,
            'menus' => $menus,
            'secTwo' => $secTwo,
            'secThree' => $secThree,
            'secFour' => $secFour,
            'secFive' => $secFive,
            'secSix' => $secSix,
            'partnerFooter' => $partnerFooter,
            'isi' => 'front/'.$site['theme'].'/home/list');
        $this->load->view('front/'.$site['theme'].'/layout/wrapper', $data);
    }

}
