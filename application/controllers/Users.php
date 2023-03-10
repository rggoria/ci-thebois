<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper(['url']);
    }

    public function login() {
        $this->load->view('users/users_login');
    }

    public function profile() {
        $this->load->view('users/users_profile');
    }
}