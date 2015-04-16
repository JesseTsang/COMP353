<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct(){
        parent::__construct();
        
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('html');
    }

    public function index($msg = NULL)
    {
        $data['result'] = $msg;
        $this->load->view('loginView', $data);
    }
    
    public function disconnect(){
        $this->session->sess_destroy();
        $this->load->view('logoutView');
    }

    public function process(){
        $this->load->model('User');
        $result = $this->User->validate();
        
        if(! $result){
            $msg = '<font color=red>Invalid username and/or password.</font><br />'.$result;
            $this->index($msg);
        }else{
            $this->load->helper('url');
            if($this->session->userdata('validated')){
                $str = ($this->session->userdata('title') == 'Manager') ? 'Manager' : 'Employee';
                redirect($str.'/index');
            }
        }        
    }
}
