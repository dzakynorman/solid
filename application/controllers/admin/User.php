<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
        parent::__construct();
        // check_login_user();
       $this->load->model('common_model');
       $this->load->model('login_model');
    }


    public function index()
    {
        $data = array();
        $data['page_title'] = 'User';
        $data['main_content'] = $this->load->view('admin/user/add', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    //-- add new user by admin
    public function add()
    {   
        if ($_POST) {

            $data = array(
                'nama' => $_POST['first_name'],
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'password' => md5($_POST['password']),
                'status' => 1,
                'role' => $_POST['role'],
                'created_at' => current_datetime()
            );

            $data = $this->security->xss_clean($data);
            
            //-- check duplicate email
            $email = $this->common_model->check_email($_POST['email']);

            if (empty($email)) {
                $user_id = $this->common_model->insert($data, 'tbl_user');
            
                if ($this->input->post('role') == "user") {
                    $actions = $this->input->post('role_action');
                    foreach ($actions as $value) {
                        $role_data = array(
                            'user_id' => $user_id,
                            'action' => $value
                        ); 
                       $role_data = $this->security->xss_clean($role_data);
                       $this->common_model->insert($role_data, 'user_role');
                    }
                }
                $this->session->set_flashdata('msg', 'User added Successfully');
                redirect(base_url('admin/user/all_user_list'));
            } else {
                $this->session->set_flashdata('error_msg', 'Email already exist, try another Email');
                redirect(base_url('admin/user'));
            }
        }
    }

    public function all_user_list()
    {
        $data['users'] = $this->common_model->get_all_user();
        // $data['country'] = $this->common_model->select('country');
        $data['count'] = $this->common_model->get_user_total();
        $data['main_content'] = $this->load->view('admin/user/users', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    //-- update users info
    public function update($id)
    {
        if ($_POST) {

        if(!empty($_POST['password'])) {
        
            $data = array(
                'nama' => $_POST['first_name'],
                'email' => $_POST['email'],
                'username' => $_POST['username'],
                'password' => md5($_POST['password']),
                'status' => $_POST['status'],
                'role' => $_POST['role']
            );
        } else {
            $data = array(
                'nama' => $_POST['first_name'],
                'email' => $_POST['email'],
                'username' => $_POST['username'],
                'status' => $_POST['status'],
                'role' => $_POST['role']
            );
        }
            $data = $this->security->xss_clean($data);

            
            $this->common_model->edit_option($data, $id, 'tbl_user');
            $this->session->set_flashdata('msg', 'Information Updated Successfully');
            redirect(base_url('admin/user/all_user_list'));

        }

        $data['user'] = $this->common_model->get_single_user_info($id);
        $data['main_content'] = $this->load->view('admin/user/edit_user', $data, TRUE);
        $this->load->view('admin/index', $data);
        
    }


    //-- delete user
    public function delete($id)
    {
        $this->common_model->delete($id,'tbl_user'); 
        $this->session->set_flashdata('msg', 'User deleted Successfully');
        redirect(base_url('admin/user/all_user_list'));
    }

}