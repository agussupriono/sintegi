<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Menus extends CI_Controller {

    // Main Page Menus
    public function index() {   

        $site = $this->mConfig->list_config();
        $menus = $this->mMenus->listMenus();

        $data = array('title' => 'Menus - ' . $site['nameweb'],
            'menu' => $menus,
            'isi' => 'admin/menus/list');
        $this->load->view('admin/layout/wrapper', $data);
    }

    // Create Menus
    public function create() {

        $site = $this->mConfig->list_config();
        $parent = $this->mMenus->listMenusPub();
        $menus = $this->mMenus->listMenus();

        $v = $this->form_validation;
        $v->set_rules('menu_name', 'Menu Name', 'required');

        if ($v->run()) {

            $config['upload_path'] = './assets/upload/image/';
            $config['allowed_types'] = 'gif|jpg|png|svg|webp';
            $config['max_size'] = '1000'; // KB			
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {

//                $data = array('title' => 'Create Menu - ' . $site['nameweb'],
//                    'site' => $site,
//                    'parent' => $parent,
//                    'error' => $this->upload->display_errors(),
//                    'isi' => 'admin/menus/create');
//                $this->load->view('admin/layout/wrapper', $data);
                
                $i = $this->input;
//                $slugProduct = url_title($this->input->post('menu_name'), 'dash', TRUE);
                $data = array(
//                    'user_id' => $this->session->userdata('id'),
                    'menu_name' => $i->post('menu_name'),
                    'menu_url' => $i->post('menu_url'),
                    'dates' => $i->post('dates'),
                    'status' => $i->post('status'),
                    'parent_menu_id' => $i->post('parent_menu_id'),
                    'menu_image' => '',
                    'menu_desc' => $i->post('menu_desc'),
                    'css' => $i->post('css'),
                    'seq' => $i->post('seq')
                );

                $this->mMenus->createMenu($data);
                $this->session->set_flashdata('sukses', 'Success');
                redirect(base_url('admin/menus/'));
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/upload/image/' . $upload_data['uploads']['file_name'];
                $config['new_image'] = './assets/upload/image/thumbs/';
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = TRUE;
                $config['width'] = 150; // Pixel
                $config['height'] = 150; // Pixel
                $config['thumb_marker'] = '';
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $i = $this->input;
//                $slugProduct = url_title($this->input->post('menu_name'), 'dash', TRUE);
                $data = array(
//                    'user_id' => $this->session->userdata('id'),
                    'menu_name' => $i->post('menu_name'),
                    'menu_url' => $i->post('menu_url'),
                    'dates' => $i->post('dates'),
                    'status' => $i->post('status'),
                    'parent_menu_id' => $i->post('parent_menu_id'),
                    'menu_image' => $upload_data['uploads']['file_name'],
                    'menu_desc' => $i->post('menu_desc'),
                    'css' => $i->post('css'),
                    'seq' => $i->post('seq')
                );

                $this->mMenus->createMenu($data);
                $this->session->set_flashdata('sukses', 'Success');
                redirect(base_url('admin/menus/'));
            }
        }
        // Default page
        $data = array('title' => 'Create Menu - ' . $site['nameweb'],
            'site' => $site,
            'parent' => $parent,
            'isi' => 'admin/menus/create',
            'menus' => $menus);
        $this->load->view('admin/layout/wrapper', $data);
    }

    // Edit Menus
    public function edit($menu_id) {

        $menu = $this->mMenus->detailMenu($menu_id);
        $endMenu = $this->mMenus->endMenu();
        $parent = $this->mMenus->listMenusPub();
        $menus = $this->mMenus->listMenus();

        // Validation
        $v = $this->form_validation;
        $v->set_rules('menu_name', 'Menu Name', 'required');

        if ($v->run()) {
            if (!empty($_FILES['image']['name'])) {
                $config['upload_path'] = './assets/upload/image/';
                $config['allowed_types'] = 'gif|jpg|png|svg|webp';
                $config['max_size'] = '1000'; // KB			
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('image')) {

                    $data = array('title' => 'Edit Menu - ' . $menu['menu_name'],
                        'product' => $menu,
                        'parent' => $parent,
                        'error' => $this->upload->display_errors(),
                        'isi' => 'admin/menus/edit');
                    $this->load->view('admin/layout/wrapper', $data);
                } else {
                    $upload_data = array('uploads' => $this->upload->data());
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = './assets/upload/image/' . $upload_data['uploads']['file_name'];
                    $config['new_image'] = './assets/upload/image/thumbs/';
                    $config['create_thumb'] = TRUE;
                    $config['quality'] = "100%";
                    $config['maintain_ratio'] = FALSE;
                    $config['width'] = 360; // Pixel
                    $config['height'] = 200; // Pixel
                    $config['x_axis'] = 0;
                    $config['y_axis'] = 0;
                    $config['thumb_marker'] = '';
                    $this->load->library('image_lib', $config);
                    $this->image_lib->resize();

                    $i = $this->input;
                    if(isset($menu['image'])){
                        unlink('./assets/upload/image/' . $menu['image']);
                        unlink('./assets/upload/image/thumbs/' . $menu['image']);
                    }

//                    $slugProduct = $endMenu['menu_id'] . '-' . url_title($i->post('menu_name'), 'dash', TRUE);
                    $data = array('menu_id' => $menu['menu_id'],
//                        'user_id' => $this->session->userdata('id'),
                        'menu_name' => $i->post('menu_name'),
                        'menu_url' => $i->post('menu_url'),
                        'dates' => $i->post('dates'),
                        'status' => $i->post('status'),
                        'parent_menu_id' => $i->post('parent_menu_id'),
                        'menu_image' => $upload_data['uploads']['file_name'],
                        'menu_desc' => $i->post('menu_desc'),
                        'css' => $i->post('css'),
                        'seq' => $i->post('seq')
                    );
                    $this->mMenus->editMenu($data);
                    $this->session->set_flashdata('sukses', 'Success');
                    redirect(base_url('admin/menus'));
                }
            } else {
                $i = $this->input;
//                $slugProduct = $endMenu['menu_id'] . '-' . url_title($i->post('menu_name'), 'dash', TRUE);
                $data = array('menu_id' => $menu['menu_id'],
//                   'user_id' => $this->session->userdata('id'),
                        'menu_name' => $i->post('menu_name'),
                        'menu_url' => $i->post('menu_url'),
                        'dates' => $i->post('dates'),
                        'status' => $i->post('status'),
                        'parent_menu_id' => $i->post('parent_menu_id'),
                        'menu_desc' => $i->post('menu_desc'),
                        'css' => $i->post('css'),
                        'seq' => $i->post('seq')
                );
                $this->mMenus->editMenu($data);
                $this->session->set_flashdata('sukses', 'Success');
                redirect(base_url('admin/menus'));
            }
        }

        $data = array('title' => 'Edit Menu - ' . $menu['menu_name'],
            'menu' => $menu,
            'parent' => $parent,
            'isi' => 'admin/menus/edit',
            'menus' => $menus);
        $this->load->view('admin/layout/wrapper', $data);
    }

    // Delete Menus
    public function delete($menu_id) {
        $data = array('menu_id' => $menu_id);
        $this->mMenus->deleteMenu($data);
        $this->session->set_flashdata('sukses', 'Success');
        redirect(base_url('admin/menus'));
    }

}
