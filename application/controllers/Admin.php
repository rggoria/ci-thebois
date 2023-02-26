<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    /*  Constructor  */
    public function __construct() {
        parent::__construct();
        // Load the models
        $this->load->model(array(
            // 'Product_model' => 'productdb',
            // 'Order_model' => 'orderdb'
            // 'Users_model' => 'userdb'
        ));
        // Load the helpers needed
        $this->load->helper(array('form','url'));
        // Load the libraries needed
        $this->load->library(array('form_validation', 'pagination', 'upload', 'session'));
    }
    public function index() {
        $data['title'] = "Admin";
        $this->load->view('include/header', $data);
        $this->load->view('include/navbar_admin');
        $this->load->view('admin/admin_homepage');
        $this->load->view('include/footer');
    }
};