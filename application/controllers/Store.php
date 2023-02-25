<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper(['url']);
    }

    public function index() {
        $this->load->view('users/users_index');
    }
}