<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Transaction_model extends CI_Model {
    // Constructor
    public function __construct() {
        parent::__construct();
        // Database library
        $this->load->database();
    }

    // Admin Product Count
    public function admin_transaction_count() {
        $query = $this->db->from("transaction_table")->get();
        if ($query->num_rows() == 0) {
            return 0;
        } else {
            return $query->num_rows();
        }
    }

    // Admin Product List
    public function admin_transaction_list() {
        $query = $this->db->from("transaction_table")->get();
        if ($query->result() == NULL) {
            return NULL;
        } else {
            return $query->result();
        }
    }
    // User Add Transaction
    public function add_transaction($transactionData, $user_id) {
        $this->db->insert('transaction_table', $transactionData);
        $this->db->update('order_table', array('order_status'=>'FULFILL'), array('user_id'=>$user_id));
    }

    // Transaction List
    public function transaction_list() {
        $query = $this->db->from("user_table")->get();
        if ($query->result() == NULL) {
            return NULL;
        } else {
            return $query->result();
        }
    }

    // Courier Transaction List
    public function courier_transaction_list() {
        $query = $this->db->select('*')
            ->from('transaction_table t')
            ->join('user_table u', 't.user_id = u.user_id')
            ->join('order_table o', 't.order_id = o.order_id')
            ->join('product_table p', 'o.product_id = p.product_id')
            ->get();
        $result = $query->result();
        return $result;
    }
}
?>