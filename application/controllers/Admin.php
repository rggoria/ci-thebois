<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    /*  Constructor  */
    public function __construct() {
        parent::__construct();
        // Load the models
        $this->load->model(array(
            'Admin_model' => 'admindb',
            'Order_model' => 'orderdb',
            'Product_model' => 'productdb',
            'Transaction_model' => 'transactiondb'
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
        $data['user_count'] = $this->admindb->admin_user_count();
        $data['user_list'] = $this->admindb->admin_user_list();
        $data['order_count'] = $this->orderdb->admin_order_count();
        $data['order_list'] = $this->orderdb->admin_order_list();
        $data['product_count'] = $this->productdb->admin_product_count();
        $data['product_list'] = $this->productdb->admin_product_list();
        $data['transaction_count'] = $this->transactiondb->admin_transaction_count();
        $data['transaction_list'] = $this->transactiondb->admin_transaction_list();
        $this->load->view('include/header', $data);
        $this->load->view('admin/admin_homepage');
        $this->load->view('include/footer');
    }

    // Start Homepage Functions //

    // User Section //
    public function add_courier() {
        $data['title'] = "Admin Add Courier";
        $this->load->view('include/header', $data);
        $this->load->view('admin/admin_add_courier');
        $this->load->view('include/footer');
    }
    
    public function edit_courier($id) {
        $data['title'] = "Admin Edit Courier";

        $data['user_data'] = $this->admindb->admin_user_data($id);
        $this->load->view('include/header', $data);
        $this->load->view('admin/admin_edit_courier');
        $this->load->view('include/footer');
    }

    public function disable_user($id) {
        $this->admindb->admin_disable_user($id);
        $this->session->set_flashdata('user_disable', 'Account Status Change to Disable');
        redirect('Admin');
    }

    public function courier_user($id) {
        $this->admindb->admin_courier_user($id);
        $this->session->set_flashdata('user_courier', 'Account Status Change to Courier');
        redirect('Admin');
    }

    public function user_user($id) {
        $this->admindb->admin_user_user($id);
        $this->session->set_flashdata('user_user', 'Account Status Change to User');
        redirect('Admin');
    }
    // User Section //

    // Inventory Section //
    public function add_product() {
        $data['title'] = "Admin Add Inventory";
        $this->load->view('include/header', $data);
        $this->load->view('admin/admin_add_product');
        $this->load->view('include/footer');
    }

    public function edit_product($id) {
        $data['title'] = "Admin Edit Product";

        $data['product_data'] = $this->productdb->admin_product_data($id);
        $this->load->view('include/header', $data);
        $this->load->view('admin/admin_edit_product');
        $this->load->view('include/footer');
    }

    public function disable_product($id) {
        $this->productdb->admin_disable_product($id);
        $this->session->set_flashdata('product_disable', 'Product Status Change to Disable');
        redirect('Admin');
    }

    public function active_product($id) {
        $this->productdb->admin_active_product($id);
        $this->session->set_flashdata('product_active', 'Product Status Change to Active');
        redirect('Admin');
    }
    // Inventory Section //



    // End Homepage Functions //

    // Start Add Courier Functions //
    public function add_courier_validation() {
        $required = "This field must not be empty";
        $regex_match = "Invalid input. Try another.";

        $this->form_validation->set_rules('firstname', 'First Name', 'required|regex_match[/^[a-zA-Z].*[\s\.]*$/]', array(
            'required' => $required,
            'regex_match' => $regex_match
        ));

        $this->form_validation->set_rules('lastname', 'Last Name', 'required|regex_match[/^[a-zA-Z].*[\s\.]*$/]', array(
            'required' => $required,
            'regex_match' => $regex_match
        ));

        $this->form_validation->set_rules('username', 'User Name', 'required|min_length[6]|alpha_numeric|is_unique[user_table.user_username]', array(
            'required' => $required,
            'min_length' => 'Must contain at least 6 characters',
            'alpha_numeric' => 'Must only contain alpha-numeric characters',
            'is_unique' => 'That username is taken. Try another.'
        ));

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user_table.user_email]', array(
            'required' => "This field must not be empty",
            'valid_email' => 'Invalid email format',
            'is_unique' => 'That email is taken. Try another.'
        ));

        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]', array(
            'required' => $required,
            'min_length' => 'Must contain at least 8 characters'
        ));
        
        // Form Validation
        if (!$this->form_validation->run()) {
            $data['title'] = "GoShopping: Admin";
            $this->load->view('include/header', $data);
            $this->load->view('admin/admin_add_courier', $data);
            $this->load->view('include/footer', $data);           
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
    // End Add Courier Functions //

    // Start Edit Product Functions //
    public function edit_courier_validation($id) {
        $required = "This field must not be empty";
        $regex_match = "Invalid input. Try another.";

        $this->form_validation->set_rules('firstname', 'First Name', 'required|regex_match[/^[a-zA-Z].*[\s\.]*$/]', array(
            'required' => $required,
            'regex_match' => $regex_match
        ));

        $this->form_validation->set_rules('lastname', 'Last Name', 'required|regex_match[/^[a-zA-Z].*[\s\.]*$/]', array(
            'required' => $required,
            'regex_match' => $regex_match
        ));

        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]', array(
            'required' => $required,
            'min_length' => 'Must contain at least 8 characters'
        ));
        
        // Form Validation
        if (!$this->form_validation->run()) {
            $this->edit_courier($id);
        } else {
            // Get data from inputs
            $data['user_firstname'] = $this->input->post('firstname');        
            $data['user_lastname'] = $this->input->post('lastname');
            $data['user_password'] = $this->input->post('password');
            $data['user_status'] = 'COURIER';
            $this->admindb->update_user($id, $data);

            $this->session->set_flashdata('user_edit', 'Account Successfully Updated');  
            $this->edit_courier($id);
        }
    }
    // End Edit Product Functions //

    // Start Add Product Functions //
    public function add_product_validation() {
        $required = "This field must not be empty";

        $this->form_validation->set_rules('productname', 'Product Name', 'required|is_unique[product_table.product_name]', array(
            'required' => $required,
            'is_unique' => 'That product name is taken. Try another.'
        ));

        $this->form_validation->set_rules('productdescription', 'Product Description', 'required', array(
            'required' => $required
        ));

        $this->form_validation->set_rules('productprice', 'Product Category', 'required', array(
            'required' => $required,
        ));       
        
        // Form Validation
        if (!$this->form_validation->run()) {
            $this->session->set_flashdata('error', 'Product failed to create'); 
            $this->add_product();          
        } else {     
            $this->input->post('firstname');          
            $image_config = array(
                'image_library' => 'GD2',            
                'upload_path' => './resources/images/product/',
                'allowed_types' => 'jpg|jpeg|png',
                'file_name' => $this->input->post('productname')
            );        
            $this->load->library('upload', $image_config);
            //Intialize
            $this->upload->initialize($image_config);
    
            if (!$this->upload->do_upload('productimage')) {
                $this->session->set_flashdata('product_error', $this->upload->display_errors());
                $this->add_product();
            } else {
                $uploadData = $this->upload->data();

                // Get data from inputs
                $data['product_image'] = $uploadData['file_name'];
                $data['product_name'] = $this->input->post('productname');
                $data['product_description'] = $this->input->post('productdescription');
                $data['product_price'] = $this->input->post('productprice');
                $data['product_category'] = $this->input->post('productcategory');
                $this->productdb->admin_create_product($data); 

                $this->session->set_flashdata('product_success', 'Product successfully created');  
                redirect('Admin/add_product');
                
            }
        }
    }
    // End Add Product Functions //

    // Start Edit Product Functions //
    public function edit_product_validation($id) {
        $required = "This field must not be empty";     

        $this->form_validation->set_rules('productdescription', 'Product Description', 'required', array(
            'required' => $required
        ));

        $this->form_validation->set_rules('productprice', 'Product Category', 'required', array(
            'required' => $required,
        )); 

        // Form Validation
        if (!$this->form_validation->run()) {
            $this->session->set_flashdata('product_error', 'Failed to update product');          
            redirect('Admin/edit_product/'.$id);          
        } else {
            // Get data from inputs
            $data['product_name'] = $this->input->post('productname');
            $data['product_description'] = $this->input->post('productdescription');
            $data['product_price'] = $this->input->post('productprice');         
            $this->productdb->admin_update_product($id, $data);

            $this->session->set_flashdata('product_success', 'Account successfully updated');  
            redirect('Admin/edit_product/'.$id);
        }
    }
    // End Edit Product Functions //

};