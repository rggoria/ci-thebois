<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper(['url', 'form']);
        $this->load->library(['session']);
        $this->load->library('session');

        // Session constants
        $this->user_id = $this->session->userdata('id');
        $this->fullname = $this->session->userdata('fullname');
        $this->address = $this->session->userdata('address');
        $this->billing = $this->session->userdata('billing');
        $this->contact = $this->session->userdata('contact');
        $this->email = $this->session->userdata('email');
        $this->logged_in = $this->session->has_userdata('logged_in');
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
            $data = array (
                'logged_in' => $this->logged_in,
                'user_id' => $this->user_id,
            );
            $this->load->view('include/store/header');
            $this->load->view('include/store/navbar', $data);
            $this->load->view('store/store_index');
            $this->load->view('include/store/footer');
        }
    }

    public function catalog($category) {
        $data = array (
            'logged_in' => $this->logged_in,
            'user_id' => $this->user_id,
        );
        $this->load->view('include/store/header');
        $this->load->view('include/store/navbar', $data);
        
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