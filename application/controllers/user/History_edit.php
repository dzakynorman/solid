<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class History_edit extends CI_Controller {

	public function __construct(){
        parent::__construct();
        check_login_user();
        $this->load->model('common_model');
    }

    
    public function edit($id){
       
        
        $data = array();
        $data['id'] = $id;
        $data['page_title'] = 'History';
        $data['class'] = $this->common_model->select_class($id,'tbl_class');
        $data['subclass'] = $this->common_model->select_subclass($id,'tbl_class');
        // $data = $this->common_model->select_idsolid($id_solid,'tbl_class');
        $data['main_content'] = $this->load->view('user/history_edit', $data, TRUE);
        $this->load->view('user/newindex', $data);
        // print_r($data);
    }


    public function getclassinfo($id,$option) {
        $infoclass = $this->common_model->get_class_info($id,$option);
        echo json_encode($infoclass);
    }

    public function getmethodinfo($id) {
        $infomethod = $this->common_model->get_method_info($id);
        echo json_encode($infomethod);
    }

    public function addclass() {
        // if ($_POST) {
            
            $id_solid = $this->input->post( 'id_solid' );
            $id_users = $this->input->post( 'id_users' );
            $name_class = $this->input->post( 'name_class' );
            $class_induk = $this->input->post( 'class_induk' );
            $type_class = $this->input->post( 'type_class' );
            $isclass = $this->input->post( 'isclass' );
            $name_parent = $this->input->post( 'name_parent' );

            $name_field = $this->input->post( 'name_field' );
            $typedata = $this->input->post( 'typedata' );

            $method = $this->input->post( 'method' );
            $othermethod = $this->input->post( 'othermethod' );
            $otherparam = $this->input->post( 'otherparam' );
            $param = $this->input->post( 'param' );
            $method_parent = $this->input->post( 'method_parent' );

            $classind = $this->input->post( 'classind' );

            if($type_class[0] == 'class') {
                $induk = 1;
            } else if($type_class[0] == 'subclass') {
                $induk = 0;
            }
            

            if ( ! empty($type_class) ) 
            {
                foreach ($name_class as $key => $value ) 
                {
                    $data['id_solid'] = $id_solid;
                    $data['id_users'] = $id_users;
                    $data['name_class'] = $value;
                    $data['class_induk'] = $class_induk[$key];
                    $data['type_class'] = $type_class[$key];
                    $data['name_parent'] = $name_parent[$key];
                    $data['isInduk'] = $induk;
                    $data = $this->security->xss_clean($data);
                    $id_class = $this->common_model->insert($data, 'tbl_class');
                    // echo $key.'|'.$value;
                    // print_r($id_class);
                }

                if(!empty($name_field)) {

                    foreach ($name_field as $key1 => $value1 ) 
                    {
                        $datafield['id_class'] = $id_class;
                        $datafield['name_field'] = $value1;
                        $datafield['typedata'] = $typedata[$key1];
                        $datafield = $this->security->xss_clean($datafield);
                        $idfield = $this->common_model->insert($datafield, 'tbl_field');
                    }

                }

                if(!empty($method)) {

                        foreach ($method as $key2 => $value2 ) 
                        {
                            $datamethod['id_class'] = $id_class;
                            $datamethod['id_induk'] = $classind[$key2];

                            if($method[$key2] !== 'other' && $param[$key2] !== 'other') {
                                $datamethod['method'] = $value2;
                                $datamethod['param'] = $param[$key2];
                                $datamethod['isNME'] = 1;
                                $datamethod['isNMO'] = 0;
                            } else if($method[$key2] !== 'other' && $param[$key2] == 'other') {
                                $datamethod['method'] = $value2;
                                $datamethod['param'] = $otherparam[$key2];
                                $datamethod['isNME'] = 0;
                                $datamethod['isNMO'] = 2;
                            } else if($method[$key2] == 'other' && $param[$key2] !== 'other') {
                                $datamethod['method'] =  $othermethod[$key2];
                                $datamethod['param'] = $param[$key2];
                                $datamethod['isNME'] = 0;
                                $datamethod['isNMO'] = 0;
                            } else if($method[$key2] == 'other' && $param[$key2] == 'other') {
                                $datamethod['method'] =  $othermethod[$key2];
                                $datamethod['param'] = $otherparam[$key2];
                                $datamethod['isNME'] = 0;
                                $datamethod['isNMO'] = 0;
                            }
                            
                            $datamethod['method_parent'] = $method_parent[$key2];
                            $datamethod = $this->security->xss_clean($datamethod);
                            $idmethod = $this->common_model->insert($datamethod, 'tbl_method');
                        }


                }


                $this->session->set_flashdata('msg', 'Data added Successfully');
                redirect(base_url('user/history_edit/edit/'.$id_solid));

            } else {
                $this->session->set_flashdata('error_msg', 'Data added Fail');
                redirect(base_url('user/history_edit/edit/'.$id_solid));
            }

    }

    public function updateMethod() {
        $id = $this->uri->segment(4);
        $idsolid = $this->uri->segment(5);
        if ($_POST) {

                $data = array(
                    'method' => $_POST['method'],
                    'param' => $_POST['param'],
                );

                $data = $this->security->xss_clean($data);
                
                $this->common_model->edit_method($data, $id, 'tbl_method');
                $this->session->set_flashdata('msg', 'Information Updated Successfully');
                redirect(base_url('user/history_edit/edit/'.$id_solid));
    
            }
    
            $data['method'] = $this->common_model->get_single_method_info($id);
            $data['main_content'] = $this->load->view('history-method', $data, TRUE);
            $this->load->view('user/newindex', $data);
    }

    public function updateField() {
        $id = $this->uri->segment(4);
        $id_solid = $this->uri->segment(5);
        if ($_POST) {

                $data = array(
                    'name_field' => $_POST['name_field'],
                    'typedata' => $_POST['typedata'],
                );

                $data = $this->security->xss_clean($data);
                
                $this->common_model->edit_field($data, $id, 'tbl_field');
                $this->session->set_flashdata('msg', 'Information Updated Successfully');
                redirect(base_url('user/history_edit/edit/'.$id_solid));
    
            }
    
            $data['field'] = $this->common_model->get_single_field_info($id);
            $data['main_content'] = $this->load->view('history-field', $data, TRUE);
            $this->load->view('user/newindex', $data);
    }

    public function updatesolid($id){

        if ($_POST){

            $data['id'] = $id;
            $data = array(
                'updated_at' => current_datetime()
            );
            $data = $this->security->xss_clean($data);

            
            $this->common_model->edit_option($data, $id, 'tbl_class');
            $this->session->set_flashdata('msg', 'Information Updated Successfully');
            redirect(base_url('user/dashboard/index'));
        }
          $data['field'] = $this->common_model->get_single_field_info($id);
            $data['main_content'] = $this->load->view('user/index', $data, TRUE);
            $this->load->view('user/dashboard', $data);
    }

    public function checkexistclass($idsolid) {
        $checkclass = $this->common_model->check_exist_class($idsolid);
        echo json_encode($checkclass);
    }

    public function checkmethod($id) {
        $checkmethod = $this->common_model->check_method($id);
        echo json_encode($checkmethod);
    }

    public function checkparam($id) {
        $checkparam = $this->common_model->check_param($id);
        echo json_encode($checkparam);
    }

    public function deleteclass() {
        $id = $this->uri->segment(4);
        $id_solid = $this->uri->segment(5);
        $this->common_model->deleteclass($id,'tbl_class'); 
        $this->session->set_flashdata('msg', 'Class deleted Successfully');
        redirect(base_url('user/history_edit/edit/'.$id_solid));
    }

}