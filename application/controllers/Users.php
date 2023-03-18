<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper(['url', 'form']);
        $this->load->library(['session']);
        $this->load->model([
            'Users_model' => 'users',
            'Product_model' => 'productdb',
            'Transaction_model' => 'transactiondb'
        ]);

        // Session constants
        $this->user_id = $this->session->userdata('id');
        $this->fullname = $this->session->userdata('fullname');
        $this->address = $this->session->userdata('address');
        $this->billing = $this->session->userdata('billing');
        $this->contact = $this->session->userdata('contact');
        $this->email = $this->session->userdata('email');
        $this->logged_in = $this->session->has_userdata('logged_in');
    }

    public function profile($user_id) {
        if ($this->logged_in) {
            $data = array (
                'user_id' => $this->user_id,
                'fullname' => $this->fullname,
                'address' => $this->address,
                'billing' => $this->billing,
                'contact' => $this->contact,
                'email' => $this->email,
                'logged_in' => $this->logged_in,
            );
            $data['cart_items'] = $this->productdb->getItems($this->user_id);
            $data['transaction_list'] = $this->transactiondb->transaction_list($this->user_id);
            $this->load->view('include/store/header');
            $this->load->view('include/store/navbar', $data);
            $this->load->view('users/users_profile', $data);
            $this->load->view('include/store/footer');
        } else {
            redirect('Store');
        }
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
            'user_password' => $password,
            'user_status' => 'USER',
        );

        $this->users->insertUser($userData);
        $account = $this->users->getUser($email, $password);
        $userSession = array(
            'id' => $account->user_id,
            'fullname' => $account->user_firstname . ' ' . $account->user_lastname,
            'email' => $account->user_email,
            'address' => $account->user_address,
            'billing' => $account->user_billing,
            'contact' => $account->user_contact,
            'logged_in' => TRUE,
        );
        $this->session->set_userdata($userSession);
        redirect('Users/profile/'. $account->user_id);

    }

    public function login_user() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $account = $this->users->getUser($email, $password);
        if($account != NULL) {
            $userSession = array(
                'id' => $account->user_id,
                'fullname' => $account->user_firstname . ' ' . $account->user_lastname,
                'email' => $account->user_email,
                'address' => $account->user_address,
                'billing' => $account->user_billing,
                'contact' => $account->user_contact,
                'logged_in' => TRUE,
            );
            $this->session->set_userdata($userSession);
            redirect('Users/profile/'. $account->user_id);
        } else {
            redirect('Store');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('Store');
    }   
}