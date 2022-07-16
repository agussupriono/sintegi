<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Partners extends CI_Controller {

    // Main Page Partners
    public function index() {

        $site = $this->mConfig->list_config();
        $partners = $this->mPartners->listPartners();

        $data = array('title' => 'List Partner - ' . $site['nameweb'],
            'partners' => $partners,
            'isi' => 'admin/partners/list');
        $this->load->view('admin/layout/wrapper', $data);
    }

    // Create Product
    public function create() {

        $site = $this->mConfig->list_config();

        $v = $this->form_validation;
        $v->set_rules('partner_name', 'Partner Name', 'required');

        if ($v->run()) {

            $config['upload_path'] = './assets/upload/image/';
            $config['allowed_types'] = 'gif|jpg|png|svg|webp';
            $config['max_size'] = '1000'; // KB			
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('image')) {
                $data = array('title' => 'Create Partner - ' . $site['nameweb'],
                    'site' => $site,
                    'error' => $this->upload->display_errors(),
                    'isi' => 'admin/partners/create');
                $this->load->view('admin/layout/wrapper', $data);
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
                $slugPartner = url_title($this->input->post('partner_name'), 'dash', TRUE);
                $data = array('slug_partner' => $slugPartner,
                    'user_id' => $this->session->userdata('id'),
                    'partner_name' => $i->post('partner_name'),
                    'date' => $i->post('date'),
                    'status' => $i->post('status'),
                    'website' => $i->post('website'),
                    'image' => $upload_data['uploads']['file_name'],
                    'position' => $i->post('position'),
                    'seq' => $i->post('seq')
                );

                $this->mPartners->createPartner($data);
                $this->session->set_flashdata('sukses', 'Success');
                redirect(base_url('admin/partners/'));
            }
        }
        // Default page
        $data = array('title' => 'Create Partner - ' . $site['nameweb'],
            'site' => $site,
            'isi' => 'admin/partners/create');
        $this->load->view('admin/layout/wrapper', $data);
    }

    // Edit Partner
    public function edit($partner_id) {

        $partner = $this->mPartners->detailPartner($partner_id);
        $endPartner = $this->mPartners->endPartner();

        // Validation
        $v = $this->form_validation;
        $v->set_rules('partner_name', 'Partner Name', 'required');

        if ($v->run()) {
            if (!empty($_FILES['image']['name'])) {
                $config['upload_path'] = './assets/upload/image/';
                $config['allowed_types'] = 'gif|jpg|png|svg';
                $config['max_size'] = '1000'; // KB			
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('image')) {

                    $data = array('title' => 'Edit Partner - ' . $partner['partner_name'],
                        'partner' => $partner,
                        'error' => $this->upload->display_errors(),
                        'isi' => 'admin/partners/edit');
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

                    unlink('./assets/upload/image/' . $partner['image']);
                    unlink('./assets/upload/image/thumbs/' . $partner['image']);

                    $slugPartner = $endPartner['partner_id'] . '-' . url_title($i->post('partner_name'), 'dash', TRUE);
                    $data = array('partner_id' => $partner['partner_id'],
                        'slug_partner' => $slugPartner,
                        'user_id' => $this->session->userdata('id'),
                        'partner_name' => $i->post('partner_name'),
                        'date' => $i->post('date'),
                        'status' => $i->post('status'),
                        'website' => $i->post('website'),
                        'image' => $upload_data['uploads']['file_name'],
                        'position' => $i->post('position'),
                        'seq' => $i->post('seq')
                    );
                    $this->mPartners->editPartner($data);
                    $this->session->set_flashdata('sukses', 'Success');
                    redirect(base_url('admin/partners'));
                }
            } else {
                $i = $this->input;
                $slugPartner = $endPartner['partner_id'] . '-' . url_title($i->post('partner_name'), 'dash', TRUE);
                $data = array('partner_id' => $partner['partner_id'],
                    'slug_partner' => $slugPartner,
                    'user_id' => $this->session->userdata('id'),
                    'partner_name' => $i->post('partner_name'),
                    'date' => $i->post('date'),
                    'status' => $i->post('status'),
                    'website' => $i->post('website'),
                    'position' => $i->post('position'),
                    'seq' => $i->post('seq')
                );
                $this->mPartners->editPartner($data);
                $this->session->set_flashdata('sukses', 'Success');
                redirect(base_url('admin/partners'));
            }
        }

        $data = array('title' => 'Edit Partner - ' . $partner['partner_name'],
            'partner' => $partner,
            'isi' => 'admin/partners/edit');
        $this->load->view('admin/layout/wrapper', $data);
    }

    // Delete Partner
    public function delete($partner_id) {
        $data = array('partner_id' => $partner_id);
        $this->mPartners->deletePartner($data);
        $this->session->set_flashdata('sukses', 'Success');
        redirect(base_url('admin/partners'));
    }

}
