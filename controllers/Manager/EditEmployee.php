<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditEmployee extends Manager_Controller {
    function __construct(){
        parent::__construct();
    }

    public function index($id = NULL)
    {
        $u = NULL;
        $e = NULL;
        
        if($id){
            $this->load->model('User');
            $this->load->model('Employee');
            
            $u = $this->User;
            $u->load($id);
            
            if($u->Title == 'Employee'){
                $e = $this->Employee;
                $e->load($id);
            }else{
                print_r("You can only edit Employees.");
                return false;
            }
        }
        $data = array(
            'u' => $u,
            'e' => $e,
            'head' => $this->getHead()
        );
        $this->load->view('modifyEmployeeDetailsView', $data);
    }
    
    public function process()
    {
        $action = $this->security->xss_clean($this->input->post('submitForm'));
        $id = $this->security->xss_clean($this->input->post('ID'));
        
        $this->load->model('User');
        $this->load->model('Employee');
        
        $u = $this->User;
        $e = $this->Employee;
        
        if($id != ''){
            $u->load($id);
            $e->load($id);
        }
        
        if($action == 'save'){
            $this->load->database();
            $this->db->trans_start();
            
            $u->Title = 'Employee';
            $u->Name = $this->security->xss_clean($this->input->post('Name'));
            if($id == '' || ($this->input->post('Password') && $this->input->post('Password') != '')){$u->Password = $this->security->xss_clean($this->input->post('Password'));}
            $u->PhoneNumber = $this->security->xss_clean($this->input->post('PhoneNumber'));
            $u->DateofEmployement = $this->security->xss_clean($this->input->post('DateofEmployement'));
            $u->save();
            
            $e->EmployeeID = $u->ID;
            $e->AnnualPayment = $this->security->xss_clean($this->input->post('AnnualPayment'));
            $e->Commission = $this->security->xss_clean($this->input->post('Commission'));
            $e->PaymentMethod = $this->security->xss_clean($this->input->post('PaymentMethod'));
            $e->save($id == '');
            
            $this->db->trans_complete();
            
            print_r($u->ID);
        }else if($action == 'del' && $id != ''){
            $u->delete();
            $e->delete();
        }
    }
}