<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courier extends CI_Controller {
    /*  Constructor  */
    public function __construct() {
        parent::__construct();
        // Load the models
        $this->load->model(array(
            'Courier_model' => 'courierdb',
            'Transaction_model' => 'transactiondb'
        ));
        // Load the helpers needed
        $this->load->helper(array('form','url'));
        // Load the libraries needed
        $this->load->library(array('form_validation', 'pagination', 'upload', 'session'));

        // Session constants
        $this->login_id = $this->session->userdata('login_id');
        $this->login_fullname = $this->session->userdata('login_fullname');
        $this->login_email = $this->session->userdata('login_email');
        $this->login_password = $this->session->userdata('login_password');

        // Session constants
        $this->login_id = $this->session->userdata('login_id');
        $this->login_fullname = $this->session->userdata('login_fullname');
        $this->login_email = $this->session->userdata('login_email');
        $this->login_password = $this->session->userdata('login_password');
    }
    public function index() {
        // Page Title
        $data['title'] = "Courier";
        $data['courier_transaction_list'] = $this->transactiondb->courier_transaction_list();
        
        $this->load->view('include/courier/header', $data);
        $this->load->view('include/courier/navbar');
        $this->load->view('courier/courier_homepage.php');
        $this->load->view('include/courier/footer');
    }

    public function courier_profile() {
        $data['title'] = "Courier Profile";

        $this->load->view('include/courier/header', $data);
        $this->load->view('include/courier/navbar');
        $this->load->view('courier/courier_profile.php');
        $this->load->view('include/courier/footer');
    }

    public function update_courier_validation() {
        $required = "This field must not be empty";
        $regex_match = "Invalid input. Try another.";

        $this->form_validation->set_rules('firstname', 'First Name', 'regex_match[/^[a-zA-Z].*[\s\.]*$/]', array(
            'regex_match' => $regex_match
        ));

        $this->form_validation->set_rules('lastname', 'Last Name', 'regex_match[/^[a-zA-Z].*[\s\.]*$/]', array(
            'regex_match' => $regex_match
        ));

        $this->form_validation->set_rules('contact', 'Contact', 'numeric', array(
            'numeric' => 'Numeric inputs only'
        ));

        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]', array(
            'required' => $required,
            'min_length' => 'Must contain at least 8 characters'
        ));
        
        // Form Validation
        if (!$this->form_validation->run()) {        
            $this->courier_profile();
        } else {
            // Get data from inputs
            $id = $this->session->userdata('login_id');
            $data['user_firstname'] = $this->input->post('firstname');
            $data['user_lastname'] = $this->input->post('lastname');
            $data['user_contact'] = $this->input->post('contact');
            $data['user_address'] = $this->input->post('address');
            $data['user_password'] = $this->input->post('password');
            $this->courierdb->update_user($id, $data);            
            $this->courierdb->update_user($id, $data);            
            $session_login = array(
                'log_id' => $id,
                'login_username' => $this->session->userdata('login_username'),
                'login_firstname' => $this->input->post('firstname'),
                'login_lastname' => $this->input->post('lastname'),
                'login_contact' => $this->input->post('contact'),
                'login_address' => $this->input->post('address'),
                'login_email' => $this->session->userdata('login_email'),
                'login_password' => $this->input->post('password'),
            );
            $this->session->set_userdata($session_login);
            $this->session->set_flashdata('courier_update', 'Account Successfully Updated');  
            $this->courier_profile();
        }
    }

    public function reserved_transaction($id) {        
        $reserved_id = $this->session->userdata('login_id');
        $this->courierdb->courier_reserved_transaction($id, $reserved_id);
        $this->session->set_flashdata('order_reserve', 'Order is now reserved');
        $this->index();
    }

    public function delivered_transaction($id) {
        $this->courierdb->courier_delivered_transaction($id);
        $this->session->set_flashdata('order_delivered', 'Order is now delivered');
        $this->index();
    }

    public function cancelled_transaction($id) {
        $this->courierdb->courier_cancelled_transaction($id);
        $this->session->set_flashdata('order_cancelled', 'Order is now cancelled');
        $this->index();
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('Admin');
    }
}
?>