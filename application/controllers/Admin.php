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
            'User_model' => 'userdb'
        ));
        // Load the helpers needed
        $this->load->helper(array('form','url'));
        // Load the libraries needed
        $this->load->library(array('form_validation', 'pagination', 'upload', 'session'));
    }
    public function index() {
        // Page Title
        $data['title'] = "Admin";

        // Fetch Data Count
        $data['user_count'] = $this->userdb->admin_user_count();

        $this->load->view('include/header', $data);
        $this->load->view('admin/admin_homepage');
        $this->load->view('include/footer');
    }

    public function add_user() {
        $data['title'] = "Admin Add User";
        $this->load->view('include/header', $data);
        $this->load->view('admin/admin_add_user');
        $this->load->view('include/footer');
    }

    public function add_inventory() {
        $data['title'] = "Admin Add Inventory";
        $this->load->view('include/header', $data);
        $this->load->view('admin/admin_add_inventory');
        $this->load->view('include/footer');
    }
};