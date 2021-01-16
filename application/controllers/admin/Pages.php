<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function __construct(){
        parent::__construct();
        check_login_user();
    }

    public function index(){
        $data = array();
        $data['page_title'] = 'Dashboard';
        $data['main_content'] = $this->load->view('admin/home', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function login(){
        $data = array();
        $data['page_title'] = 'Pages';
        $this->load->view('admin/pages/login', $data);
    }

    public function register(){
        $data = array();
        $data['page_title'] = 'Pages';
        $this->load->view('admin/pages/register', $data);
    }


    


}