<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class NotFound extends CI_Controller {

    // Main Page Home
    public function index() {

        $site = $this->mConfig->list_config();
        $menus = $this->mMenus->listMenus();
        
        $data = array('title' => 'Home - ' . $site['nameweb'],
            'site' => $site,
            'menus' => $menus,
            'isi' => 'front/'.$site['theme'].'/home/list');
        $this->load->view('front/'.$site['theme'].'/layout/error_404', $data);
    }

}
