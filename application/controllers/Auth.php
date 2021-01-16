<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }


    public function index(){
        $data = array();
        $data['page'] = 'Auth';
        $this->load->view('admin/pages/login', $data);
        
    }


    public function log(){

        if($_POST){ 
            $query = $this->login_model->validate_user();
            
            $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
            // Output: 54esmdr0qf
            $random = 'Solid'.substr(str_shuffle($permitted_chars), 0, 10);
            //-- if valid
            if($query){
                $data = array();
                foreach($query as $row){
                    $data = array(
                        'id' => $row->id,
                        'username' => $row->username,
                        'nama' => $row->nama,
                        'email' =>$row->email,
                        'role' =>$row->role,
                        'id_solid' =>$random,
                        'is_login' => TRUE
                    );
                    $this->session->set_userdata($data);
                    
                    if($row->role == 'admin') {
                        $url = base_url('admin/dashboard');
                    } else {
                        $url = base_url('user/dashboard');
                    }
                }
                echo json_encode(array('st'=>1,'url'=> $url)); //--success
            }else{
                echo json_encode(array('st'=>0)); //-- error
            }
            
        }else{
            $this->load->view('auth',$data);
        }
    }


    
    function logout(){
        $this->session->sess_destroy();
        $data = array();
        $data['page'] = 'logout';
        $this->load->view('admin/pages/login', $data);
    }

}