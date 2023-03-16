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
    public function add_transaction($transactionData) {
        $this->db->insert('transaction_table', $transactionData);
    }
}
?>