<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper(['url', 'form']);
        $this->load->model([
            'Users_model' => 'users',
        ]);
    }

    public function profile() {
        $this->load->view('include/store/header');
        $this->load->view('include/store/navbar');
        $this->load->view('users/users_profile');
        $this->load->view('include/store/footer');
    }

    public function register_user() {
        $firstname = $this->input->post('fname');
        $lastname = $this->input->post('lname');
        $complete_address = $this->input->post('caddress');
        $billing_address = $this->input->post('baddress');
        $contact = $this->input->post('cnumber');
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $userData = array(
            'user_firstname' => $firstname,
            'user_lastname' => $lastname,
            'user_address' => $complete_address,
            'user_billing' => $billing_address,
            'user_contact' => $contact,
            'user_email' => $email,
            'user_password' => $password
        );
        $this->users->insertUser($userData);
        redirect('Users/profile');
    }
}