<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Product_model extends CI_Model {
    // Constructor
    public function __construct() {
        parent::__construct();
        // Database library
        $this->load->database();
    }

    // Admin Product Count
    public function admin_product_count() {
        $query = $this->db->from("product_table")->get();
        if ($query->num_rows() == 0) {
            return 0;
        } else {
            return $query->num_rows();
        }
    }

    // Admin Product List
    public function admin_product_list() {
        $query = $this->db->from("product_table")->get();
        if ($query->result() == NULL) {
            return NULL;
        } else {
            return $query->result();
        }
    }

    // Admin Create Product
    public function admin_create_product($data) {
        $this->db->insert('product_table', $data);
    }

    // Admin Product Data
    public function admin_product_data($id) {
        $query = $this->db->get_where('product_table', array('product_id' => $id));
        if ($query) {
            $result = $query->row();
            return $result;
        } else {
            return NULL;
        }
    }

    // Admin Update User
    public function admin_update_product($id, $data) {
        $this->db->update('product_table', $data, array('product_id' => $id));
    }

    public function admin_disable_product($id) {
        $this->db->where('product_id', $id);
        $this->db->update('product_table', array('product_status' => 'DISABLE'));
    }

    public function admin_active_product($id) {
        $this->db->where('product_id', $id);
        $this->db->update('product_table', array('product_status' => 'ACTIVE')); 
    }
    
}
?>