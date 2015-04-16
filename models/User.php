<?php

class User extends MY_Model {
    
    const DB_TABLE = 'User';
    const DB_TABLE_PK = 'ID';
    
    public $ID;
    public $Title;
    public $Name;
    public $Password;
    public $PhoneNumber;
    public $DateofEmployement;
    
    public function validate(){
        $this->load->database();
        $this->load->library('session');
        $ID = $this->security->xss_clean($this->input->post('userid'));
        $password = $this->security->xss_clean($this->input->post('password'));
        
        $this->db->where('id', $ID);
        $this->db->where('password', $password);
        
        $query = $this->db->get($this::DB_TABLE);
        if(count($query->row()) == 1)
        {
            $row = $query->row();
            $data = array(
                    'userid' => $row->ID,
                    'title' => $row->Title,
                    'validated' => true
                    );
            $this->session->set_userdata($data);
            return true;
        }
        return false;
    }
}