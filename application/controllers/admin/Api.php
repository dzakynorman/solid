<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller {

    public function __construct(){
        parent::__construct();
        check_login_user();
    }

    public function index()
    {
        $this->load->view('api');
    }

}