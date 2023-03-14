<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper(['url', 'form']);
        $this->load->library('session');
        // Load the models
        $this->load->model('Product_model', 'productdb');
    }

    public function index() {
        if ($this->session->userdata('login_status')) {
            if ($this->session->userdata('login_status') == 'ADMIN') {
                redirect('Admin/homepage');
            } elseif ($this->session->userdata('login_status') == 'COURIER') {
                redirect('Courier');
            } else {
                $this->load->view('include/store/header');
                $this->load->view('include/store/navbar');
                $this->load->view('store/store_index');
                $this->load->view('include/store/footer');
            }
        } else {
            $this->load->view('include/store/header');
            $this->load->view('include/store/navbar');
            $this->load->view('store/store_index');
            $this->load->view('include/store/footer');
        }
    }

    public function catalog($category) {
        $this->load->view('include/store/header');
        $this->load->view('include/store/navbar');
        
        // Fetch data from database
        $data['product_list'] = $this->productdb->store_product_list();

        if ($category == "high_grade") {
            $this->load->view('store/store_catalog_highgrade', $data);
        } else if ($category == "real_grade") {
            $this->load->view('store/store_catalog_realgrade', $data);
        } else if ($category == "master_grade") {
            $this->load->view('store/store_catalog_mastergrade', $data);
        } else if ($category == "perfect_grade") {
            $this->load->view('store/store_catalog_perfectgrade', $data);
        } else if ($category == "entry_grade") {
            $this->load->view('store/store_catalog_entrygrade', $data);
        } else if ($category == "super_deformed") {
            $this->load->view('store/store_catalog_superdeformed', $data);
        }
        
        $this->load->view('include/store/footer');
    }
}