<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users_model extends CI_Model {
    // Constructor
    public function __construct() {
        parent::__construct();
        // Database library
        $this->load->database();
    }

    public function insertUser($userData) {
        $this->db->insert('user_table', $userData);
    }
}
?>