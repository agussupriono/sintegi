<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Careers extends CI_Controller {

    public function index() {

        $site = $this->mConfig->list_config();
//        $categories = $this->mCategories->listCategories();
//        $lastBlogs = $this->mBlogs->listLastBlogsPub();
        $menus = $this->mMenus->listMenus();
        $blogs = $this->mBlogs->readBlog('careers');

        $data = array('title' => 'Careers - ' . $site['nameweb'],
            'site' => $site,
            'blog' => $blogs,
//            'categories' => $categories,
//            'lastBlogs' => $lastBlogs,
            'menus' => $menus,
            'isi' => 'front/'.$site['theme'].'/blog/read');
            $this->load->view('front/'.$site['theme'].'/layout/wrapper', $data);
        
    }

}
