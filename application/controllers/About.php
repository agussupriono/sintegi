<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function index() {

        $site = $this->mConfig->list_config();
        $categories = $this->mCategories->listCategories();
        $lastBlogs = $this->mBlogs->listLastBlogsPub();
        $menus = $this->mMenus->listMenusPublish();
        $blogs = $this->mBlogs->readBlog('about-us');

        $data = array('title' => 'About Us - ' . $site['nameweb'],
            'site' => $site,
            'blog' => $blogs,
            'categories' => $categories,
            'lastBlogs' => $lastBlogs,
            'menus' => $menus,
            'isi' => 'front/'.$site['theme'].'/blog/read');
            $this->load->view('front/'.$site['theme'].'/layout/wrapper', $data);
        
    }

}
