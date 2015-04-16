<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeStatistics extends Manager_Controller {
    function __construct(){
        parent::__construct();
    }

    public function index()
    {
        $data['head'] = $this->getHead();
        $this->load->view('employeeStatisticsView', $data);
    }
    
    public function display(){
        $this->load->model('User');
        $this->load->model('Employee');
        $this->load->model('Service_transaction');
        $this->load->model('Service');
        
        $eid = $this->security->xss_clean($this->input->post('employeeID'));
        
        $u = $this->User;
        $u->load($eid);
        
        if($u->Title == 'Employee'){
            $e = $this->Employee;
            $e->load($eid);
        }
        
        $this->Service_transaction->db->where('Technician', $u->ID);
        $this->Service_transaction->db->order_by('Date', "asc");
        $o = $this->Service_transaction->db->get('ServiceTransaction');
        
        $a = array();
        if($u->Title == 'Employee'){
            $count = 1;
            foreach ($o->result() as $row)
            {
                $s = $this->Service;
                $s->load($row->ServiceID);
                $a['row'.$count++] = array(
                    'Date' => $row->Date,
                    'ActivityType' => $s->Name,
                    'Revenue' => $row->Cost * $row->Amount,
                    'Commision' => $row->Cost * $row->Amount * ($e->Commission/100),
                    'TransactionID' => $row->TransactionID,
                );
            }
        }
        
        
        $data = array(
            'summaryArray' => array(
                'employeeName' => $u->Name,
                'title' => $u->Title,
                'phoneNumber' => $u->PhoneNumber,
                'dateOfEmployement' => $u->DateofEmployement,
                'commisionPercentage' => ($u->Title == 'Employee') ? $e->Commission : ''
            ),
            'detailSummaryArray' => $a,
            'id' => $eid,
            'head' => $this->getHead()
        );
        
        $this->load->view('employeeStatisticsViewAfter', $data);
    }
}