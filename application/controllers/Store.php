<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper(['url', 'form']);
    }

    public function index() {
        $this->load->view('include/store/header');
        $this->load->view('include/store/navbar');
        $this->load->view('store/store_index');
        $this->load->view('include/store/footer');
    }

    public function catalog($category) {
        $this->load->view('include/store/header');
        $this->load->view('include/store/navbar');
        
        if ($category == "high_grade") {
            $this->load->view('store/store_catalog_highgrade');
        } else if ($category == "real_grade") {
            $this->load->view('store/store_catalog_realgrade');
        } else if ($category == "master_grade") {
            $this->load->view('store/store_catalog_mastergrade');
        } else if ($category == "perfect_grade") {
            $this->load->view('store/store_catalog_perfectgrade');
        } else if ($category == "entry_grade") {
            $this->load->view('store/store_catalog_entrygrade');
        } else if ($category == "super_deformed") {
            $this->load->view('store/store_catalog_superdeformed');
        }
        
        $this->load->view('include/store/footer');
    }
}