<?php
	
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Menus_model extends CI_Model {

        public function __construct() {
            $this->load->database();
        }

        // Listing Menus
        public function listMenus() {
            $this->db->select('*');
            $this->db->from('menus');
            $this->db->order_by('parent_menu_id, seq','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

        public function listMenusPublish() {
            $this->db->select('*');
            $this->db->from('menus');
            $this->db->where(array('status' => 'publish'));                           
            $this->db->order_by('parent_menu_id, seq','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

        // Listing Menus Publish
        public function listMenusPub() {
            $this->db->select('*');
            $this->db->from('menus');
            $this->db->where(array('status' => 'publish'));                           
            $this->db->order_by('menu_id','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }        

        // Create Menus
        public function createMenu($data) {
            $this->db->insert('menus',$data);
        }

        // Detail Menus
        public function detailMenu($menu_id) {
            $this->db->select('*');
            $this->db->from('menus');
            $this->db->where('menu_id',$menu_id);
            $this->db->order_by('menu_id','DESC');
            $query = $this->db->get();
            return $query->row_array();
        }

//        // Read Menus
//        public function readProduct($slugProduct) {
//            $this->db->select('*');
//            $this->db->from('menus');
//            $this->db->where('slug_product',$slugProduct);
//            $query = $this->db->get();
//            return $query->row_array();
//        }         

        // Edit Menus
        public function editMenu($data) {
            $this->db->where('menu_id',$data['menu_id']);
            $this->db->update('menus',$data);
        }           

        // Delete Menus
        public function deleteMenu($data) {
            $this->db->where('menu_id',$data['menu_id']);
            $this->db->delete('menus',$data);
        } 

        // End Menus
        public function endMenu() {
            $this->db->select('*');
            $this->db->from('menus');
            $this->db->order_by('menu_id','DESC');
            $query = $this->db->get();
            return $query->row_array();
        }  

        // Per Page Menus
        public function perPageMenus($limit,$start) {
            $this->db->select('*');
            $this->db->from('menus');
            $this->db->where(array('status' => 'publish'));               
            $this->db->order_by('menu_id','ASC');
            $this->db->limit($limit,$start);
            $query = $this->db->get();
            return $query->result_array();
        }

        // Total Menus
        public function totalMenus() {
            $this->db->select('*');
            $this->db->from('menus');
            $this->db->where(array('status' => 'publish'));                
            $this->db->order_by('menu_id','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }                           

    }
