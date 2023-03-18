<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users_model extends CI_Model {
    // Constructor
    public function __construct() {
        parent::__construct();
        // Database library
        $this->load->database();
    }

    public function getUser($email, $password) {
        $query = $this->db->get_where('user_table', array(
            'user_email' => $email,
            'user_password' => $password,
            'user_status' => 'USER',
        ));
        return $query->row();
    }

    public function getUserByID($user_id) {
        $query = $this->db->get_where('user_table', array('user_id' => $user_id,));
        return $query->row();
    }

    public function insertUser($userData) {
        $this->db->insert('user_table', $userData);
    }

    public function updateUser($userData, $user_id) {
        $this->db->update('user_table', $userData, array('user_id' => $user_id));
    }
}
?>