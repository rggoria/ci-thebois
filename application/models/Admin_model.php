<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_Model {
    // Constructor
    public function __construct() {
        parent::__construct();
        // Database library
        $this->load->database();
    }

    // Admin User Count
    public function admin_user_count() {
        $query = $this->db->from("user_table")->get();
        if ($query->num_rows() == 0) {
            return 0;
        } else {
            return $query->num_rows();
        }
    }

    // Admin User List
    public function admin_user_list() {
        $query = $this->db->from("user_table")->get();
        if ($query->result() == NULL) {
            return NULL;
        } else {
            return $query->result();
        }
    }

    // Admin Create User
    public function admin_create_user($data) {
        $this->db->insert('user_table', $data);
    }

    // Admin User Data
    public function admin_user_data($id) {
        $query = $this->db->get_where('user_table', array('user_id' => $id));
        if ($query) {
            $result = $query->row();
            return $result;
        } else {
            return NULL;
        }
    }

    // Admin Update User
    public function update_user($id, $data) {
        $this->db->update('user_table', $data, array('user_id' => $id));
    }

    public function admin_disable_user($id) {
        $this->db->where('user_id', $id);
        $this->db->update('user_table', array('user_status' => 'DISABLE')); 
    }

    public function admin_courier_user($id) {
        $this->db->where('user_id', $id);
        $this->db->update('user_table', array('user_status' => 'COURIER')); 
    }

    public function admin_user_user($id) {
        $this->db->where('user_id', $id);
        $this->db->update('user_table', array('user_status' => 'USER')); 
    }
    
}
?>