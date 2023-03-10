<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courier extends CI_Controller {
    /*  Constructor  */
    public function __construct() {
        parent::__construct();
        // Load the helpers needed
        $this->load->helper(array('form','url'));
        // Load the libraries needed
        $this->load->library(array('form_validation', 'pagination', 'upload', 'session'));
    }
    public function index() {
        // Page Title
        $data['title'] = "Courier";
        $this->load->view('include/header', $data);
        $this->load->view('include/navbar_courier');
        $this->load->view('courier/courier_homepage.php');
        $this->load->view('include/footer');
    }

    public function corier_profile() {
        $data['title'] = "Courier Profile";
        $this->load->view('include/header', $data);
        $this->load->view('include/navbar_courier');
        $this->load->view('courier/courier_profile.php');
        $this->load->view('include/footer');
    }
}
?>