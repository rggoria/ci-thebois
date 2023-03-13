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
    
}
?>