<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class History extends CI_Controller {

	public function __construct(){
        parent::__construct();
        check_login_user();
        $this->load->model('common_model');
    }

    
    public function index(){
        $data = array();
        $data['page_title'] = 'History';
        $data['idsolid'] = $this->common_model->getidsolid();
        
        $data['main_content'] = $this->load->view('user/history', $data, TRUE);
        $this->load->view('user/index', $data);
        // print_r($data);
    }

    public function deletesolid($id){
        $this->common_model->deleteclass($id,'tbl_class'); 
        $this->session->set_flashdata('msg', 'Class deleted Successfully');
        redirect(base_url('user/history/index'));
    }


}