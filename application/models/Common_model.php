<?php
class Common_model extends CI_Model {

    //-- insert function
	public function insert($data,$table){
        $this->db->insert($table,$data);        
        return $this->db->insert_id();
    }

    //-- edit function
    function edit_option($action, $id, $table){
        $this->db->where('id',$id);
        $this->db->update($table,$action);
        return;
    } 

    function edit_method($action, $id, $table){
        $this->db->where('id_nom',$id);
        $this->db->update($table,$action);
        return;
    } 

    function edit_field($action, $id, $table){
        $this->db->where('id_field',$id);
        $this->db->update($table,$action);
        return;
    } 

    //-- update function
    function update($action, $id, $table){
        $this->db->where('id',$id);
        $this->db->update($table,$action);
        return;
    } 

    //-- delete function
    function delete($id,$table){
        $this->db->delete($table, array('id' => $id));
        return;
    }

    function deleteclass($id,$table){
        $this->db->delete($table, array('id_class' => $id));
        return;
    }

    //-- user role delete function
    function delete_user_role($id,$table){
        $this->db->delete($table, array('user_id' => $id));
        return;
    }

    function deletesolid($id,$table){
        $this->db->delete($table, array('id_solid' => $id));
        return;
    }

    
    function getidsolid(){
        $id = $this->session->userdata('id');
        $this->db->distinct();
        $this->db->select('id_solid,updated_at');
        $this->db->group_by('id_solid');
        $this->db->from('tbl_class');
        $this->db->where('id_users', $id);
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }
    
    //-- select function
    function select($table){
        $this->db->select();
        $this->db->from($table);
        $this->db->order_by('id','ASC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- select by id
    function select_option($id,$table){
        $this->db->select();
        $this->db->from($table);
        $this->db->where('id', $id);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- select by class
    function select_class($idsolid,$table){
        $this->db->select();
        $this->db->from($table);
        $this->db->where('id_solid', $idsolid);
        $this->db->where('type_class', 'class');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    function select_subclass($idsolid,$table){
        $this->db->select();
        $this->db->from($table);
        $this->db->where('id_solid', $idsolid);
        $this->db->where('type_class', 'subclass');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    } 


    public function check_email($email){
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('email', $email); 
        $this->db->limit(1);
        $query = $this->db->get();
        if($query->num_rows() == 1) {                 
            return $query->result();
        }else{
            return false;
        }
    }

    public function check_user($username){
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('username', $username); 
        $this->db->limit(1);
        $query = $this->db->get();
        if($query->num_rows() == 1) {                 
            return $query->result();
        }else{
            return false;
        }
    }
    
    public function check_exist_class($idsolid){
        $this->db->select('*');
        $this->db->from('tbl_class');
        $this->db->where('id_solid', $idsolid); 
        $this->db->where('isInduk', 1); 
        // $this->db->limit(1);
        $query = $this->db->get();
        if($query->num_rows() > 0) {                 
            return $query->result();
        }else{
            return 'empty';
        }
    }

    public function check_method($id) {
        $sql="SELECT m.id_nom,u.name_class,m.method
            from tbl_class u
            left join tbl_method m on m.id_class = u.id_class
            where u.id_class = '$id'";    
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function check_param($id) {
        $sql="SELECT u.id_nom,u.param,u.method
            from tbl_method u
            where u.id_nom = '$id'";    
        $query = $this->db->query($sql);
        return $query->result_array();
    }


    function get_class_info($id,$option){
        $this->db->select('u.id_class,u.name_class,u.name_parent');

        if($option == 'field') {
            $this->db->select('c.id_field,c.name_field,c.typedata');
        } else if($option == 'method') {
            $this->db->select('d.id_nom,d.method,d.param');
        } else if($option == 'solid') {
            $this->db->select('d.method,d.param');
        }

        $this->db->from('tbl_class u');

        if($option == 'field') {
            $this->db->join('tbl_field c','c.id_class = u.id_class','LEFT');
        } else if($option == 'method') {
            $this->db->join('tbl_method d','d.id_class = u.id_class','LEFT');
        } else if($option == 'solid') {
            $this->db->join('tbl_method d','d.id_class = u.id_class','LEFT');
        }

        if($option == 'field') {
            $this->db->where('u.id_class',$id);
        } else if($option == 'method') {
            $this->db->where('u.id_class',$id);
        } else if($option == 'solid'){
            $this->db->where('u.id_solid',$id);
        } else {
            $this->db->where('u.id_solid',$id);
        }
        
        $this->db->order_by('u.name_class','ASC');
        $query = $this->db->get();
        // $query = $query->result_array();    
        // return $query;
        if($query->num_rows() > 0) {                  
            return $query->result_array();
        }else{
            return 'empty';
        }
    }

    function get_method_info($idclass) {
        $this->db->select('u.id_class,u.method,u.param');
        $this->db->from('tbl_method u');
        $this->db->where('u.id_class',$idclass);
        $this->db->order_by('u.method','ASC');
        $query = $this->db->get();
        // $query = $query->result_array();    
        // $query = $query->row();    
        // return $query;
        if($query->num_rows > 0)
        {
            $query_result = $query->result_array();

            $final_result = array();

            foreach($query_result as $result ) {

            $date =  $result['method'];

            $final_result[$date][] = $result;

        }

            return $final_result;

        }
    }

    //-- get logged user info
    function get_user_info(){
        $this->db->select('u.*');
        // $this->db->select('c.name as country_name');
        $this->db->from('tbl_user u');
        // $this->db->join('country c','c.id = u.country','LEFT');
        $this->db->where('u.id',$this->session->userdata('id'));
        $this->db->order_by('u.id','DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }

    //-- get single user info
    function get_single_user_info($id){
        $this->db->select('u.*');
        // $this->db->select('c.name as country_name');
        $this->db->from('tbl_user u');
        // $this->db->join('country c','c.id = u.country','LEFT');
        $this->db->where('u.id',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }

    //-- get single user info
    function get_single_method_info($id){
        $this->db->select('u.*');
        // $this->db->select('c.name as country_name');
        $this->db->from('tbl_method u');
        // $this->db->join('country c','c.id = u.country','LEFT');
        $this->db->where('u.id_nom',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }

    function get_single_field_info($id){
        $this->db->select('u.*');
        // $this->db->select('c.name as country_name');
        $this->db->from('tbl_field u');
        // $this->db->join('country c','c.id = u.country','LEFT');
        $this->db->where('u.id_field',$id);
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }


    //-- get single user info
    function get_user_role($id){
        $this->db->select('ur.*');
        $this->db->from('user_role ur');
        $this->db->where('ur.user_id',$id);
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }


    //-- get all users with type 2
    function get_all_user(){
        $this->db->select('u.*');
        // $this->db->select('c.name as country, c.id as country_id');
        $this->db->from('tbl_user u');
        // $this->db->join('country c','c.id = u.country','LEFT');
        $this->db->order_by('u.id','DESC');
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    }


    //-- count active, inactive and total user
    function get_user_total(){
        $this->db->select('*');
        $this->db->select('count(*) as total');
        $this->db->select('(SELECT count(tbl_user.id)
                            FROM tbl_user 
                            WHERE (tbl_user.status = 1)
                            )
                            AS active_user',TRUE);

        $this->db->select('(SELECT count(tbl_user.id)
                            FROM tbl_user 
                            WHERE (tbl_user.status = 0)
                            )
                            AS inactive_user',TRUE);

        $this->db->select('(SELECT count(tbl_user.id)
                            FROM tbl_user 
                            WHERE (tbl_user.role = "admin")
                            )
                            AS admin',TRUE);

        $this->db->from('tbl_user');
        $query = $this->db->get();
        $query = $query->row();  
        return $query;
    }



}