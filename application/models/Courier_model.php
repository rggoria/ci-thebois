<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Courier_model extends CI_Model {
    // Constructor
    public function __construct() {
        parent::__construct();
        // Database library
        $this->load->database();
    }

    public function update_user($id, $data) {
        $this->db->update('user_table', $data, array('user_id' => $id));
    }

    public function courier_reserved_order($id, $reserved_id) {
        $this->db->where('order_id', $id);
        $data = array(
            'order_status' => 'RESERVED',
            'order_reserved_id' => $reserved_id,
        );
        $this->db->update('order_table', $data); 
    }
    
    public function courier_delivered_order($id) {
        $this->db->where('order_id', $id);
        $this->db->update('order_table', array('order_status' => 'DELIVERED')); 
    }

    public function courier_cancelled_order($id) {
        $this->db->where('order_id', $id);
        $this->db->update('order_table', array('order_status' => 'CANCELLED')); 
    }
}
?>