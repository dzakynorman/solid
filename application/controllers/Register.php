<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('common_model');
    }


    public function index(){
        $data = array();
        $data['page'] = 'Register';
        $this->load->view('register', $data);
        
    }


    public function register()
    {
        if ($_POST) {

            $data = array(
                'nama' => $_POST['first_name'],
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'password' => md5($_POST['password']),
                'status' => 1,
                'role' => 'user',
                'created_at' => current_datetime()
            );

            $data = $this->security->xss_clean($data);
            
            //-- check duplicate email
            $email = $this->common_model->check_email($_POST['email']);

            if (empty($email)) {
                $user_id = $this->common_model->insert($data, 'tbl_user');
    
                $this->session->set_flashdata('msg', 'User added Successfully');
                redirect(base_url('auth'));
            } else {
                $this->session->set_flashdata('error_msg', 'Email already exist, try another Email');
                redirect(base_url('register'));
            }
        }  
    }
}