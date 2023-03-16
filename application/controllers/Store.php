<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper(['url', 'form']);
        $this->load->library(['session', 'form_validation']);
        // Load the models
        $this->load->model('Product_model', 'productdb');

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
                $data['cart_items'] = $this->productdb->getItems($this->user_id);
                $this->load->view('include/store/header');
                $this->load->view('include/store/navbar', $data);
                $this->load->view('store/store_index');
                $this->load->view('include/store/footer');
            }
        } else {
            $data = array (
                'logged_in' => $this->logged_in,
                'user_id' => $this->user_id,
            );
            $data['cart_items'] = $this->productdb->getItems($this->user_id);
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
        $data['cart_items'] = $this->productdb->getItems($this->user_id);
        $this->load->view('include/store/header');
        $this->load->view('include/store/navbar', $data);
        
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

    public function checkout() {
        $data = array (
            'logged_in' => $this->logged_in,
            'user_id' => $this->user_id,
        );
        $data['cart_items'] = $this->productdb->getItems($this->user_id);
        $this->load->view('include/store/header');
        $this->load->view('include/store/navbar', $data);
        $this->load->view('store/store_checkout', $data);
        $this->load->view('include/store/footer');
    }

    public function add_cart($product_name, $price) {
        $productData = array(
            'user_id' => $this->user_id,
            'product_name' => $product_name,
            'product_price' => $price,
            'order_status' => 'PENDING',
        );
        $this->productdb->insertItems($productData);
        redirect('Store/catalog/high_grade');
    }

    public function order_fulfill($id) {
        $required = "This field must not be empty";

        $this->form_validation->set_rules('address', 'Complete Address', 'required', array(
            'required' => $required
        ));

        $this->form_validation->set_rules('billing', 'Billing Address', 'required', array(
            'required' => $required
        ));

        $this->form_validation->set_rules('contact', 'Contact Number', 'required', array(
            'required' => $required
        ));

        $this->form_validation->set_rules('number', 'Account Number', 'required', array(
            'required' => $required
        ));

        $this->form_validation->set_rules('amount', 'Amount', 'required', array(
            'required' => $required
        ));
        
        // Form Validation
        if (!$this->form_validation->run()) {
            $this->checkout();        
        } else {
            // Get data from inputs
            $data['user_firstname'] = $this->input->post('firstname');        
            $data['user_lastname'] = $this->input->post('lastname');
            $data['user_username'] = $this->input->post('username');
            $data['user_email'] = $this->input->post('email');
            $data['user_password'] = $this->input->post('password');
            $data['user_status'] = 'COURIER';
            $this->admindb->admin_create_user($data); 

            $this->session->set_flashdata('user_success', 'Account Successfully created');
            redirect('Admin/add_courier');
        }
    }
}