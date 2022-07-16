<?php
	
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Themes_model extends CI_Model {

        public function __construct() {
            $this->load->database();
        }

        // Listing Themes
        public function listThemes() {
            $this->db->select('*');
            $this->db->from('themes');
            $this->db->order_by('theme_id','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

        // Create Theme
        public function createTheme($data) {
            $this->db->insert('themes',$data);
        }

        // Detail Theme
        public function detailTheme($theme_id) {
            $this->db->select('*');
            $this->db->from('themes');
            $this->db->where('theme_id',$theme_id);
            $this->db->order_by('theme_id','DESC');
            $query = $this->db->get();
            return $query->row_array();
        } 

        // Edit Theme
        public function editTheme($data) {
            $this->db->where('theme_id',$data['theme_id']);
            $this->db->update('themes',$data);
        }           

        // Delete Theme
        public function deleteTheme($data) {
            $this->db->where('theme_id',$data['theme_id']);
            $this->db->delete('themes',$data);
        }             

    }
