<?php
	
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Partners_model extends CI_Model {

        public function __construct() {
            $this->load->database();
        }

        // Listing Partners
        public function listPartners() {
            $this->db->select('*');
            $this->db->from('partners');
            $this->db->join('admins','admins.admin_id = partners.user_id','LEFT');                        
            $this->db->order_by('position, seq','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }
        
        // Listing Partners Section 8
        public function listPartnersSectionEightPublish() {
            $this->db->select('*');
            $this->db->from('partners');
            $this->db->join('admins','admins.admin_id = partners.user_id','LEFT');                        
            $this->db->where(array('partners.status' => 'publish','partners.position' => 'section-eight'));                        
            $this->db->order_by('seq','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }
        
        // Listing Partners Footer
        public function listPartnersFooterPublish() {
            $this->db->select('*');
            $this->db->from('partners');
            $this->db->join('admins','admins.admin_id = partners.user_id','LEFT');                        
            $this->db->where(array('partners.status' => 'publish','partners.position' => 'footer'));                        
            $this->db->order_by('seq','ASC');
            $query = $this->db->get();
            return $query->result_array();
        }

        // Create Partner
        public function createPartner($data) {
            $this->db->insert('partners',$data);
        }

        // Detail Partner
        public function detailPartner($partner_id) {
            $this->db->select('*');
            $this->db->from('partners');
            $this->db->where('partner_id',$partner_id);
            $this->db->order_by('partner_id','DESC');
            $query = $this->db->get();
            return $query->row_array();
        } 

        // Edit Partner
        public function editPartner($data) {
            $this->db->where('partner_id',$data['partner_id']);
            $this->db->update('partners',$data);
        }           

        // Delete Partner
        public function deletePartner($data) {
            $this->db->where('partner_id',$data['partner_id']);
            $this->db->delete('partners',$data);
        }

        // End Partner
        public function endPartner() {
            $this->db->select('*');
            $this->db->from('partners');
            $this->db->order_by('partner_id','DESC');
            $query = $this->db->get();
            return $query->row_array();
        }                      

    }
