<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model {
    // Constructor
    public function __construct() {
        parent::__construct();
        // Database library
        $this->load->database();
    }

    // Start Admin Modile //

    // Admin User Count
    public function admin_user_count() {
        $query = $this->db->from("user_table")->get();
        if ($query->num_rows() == 0) {
            return 0;
        } else {
            return $query->num_rows();
        }
    }

    // End Admin Modile //
    

}
?>