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

    public function courier_reserved_transaction($id, $reserved_id) {       
        $this->db->where('transaction_id', $id);
        $data = array(
            'shipment_status' => 'RESERVED',
            'transaction_reserved_id' => $reserved_id,
        );
        $this->db->update('transaction_table', $data); 
    }
    
    public function courier_delivered_transaction($id) {
        $this->db->where('transaction_id', $id);
        $this->db->update('transaction_table', array('shipment_status' => 'DELIVERED')); 
    }

    public function courier_cancelled_transaction($id) {
        $this->db->where('transaction_id', $id);
        $this->db->update('transaction_table', array('shipment_status' => 'CANCELLED')); 
    }
}
?>