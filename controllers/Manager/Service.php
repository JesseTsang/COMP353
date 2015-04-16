<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends Manager_Controller {
    function __construct(){
        parent::__construct();
    }
    
    public function index(){
        $data['head'] = $this->getHead();
       $this->load->view('historicalRevenueView', $data);
    }
    
    public function display()
    {
        $date = ($this->security->xss_clean($this->input->post('historicalDate'))) ? $this->security->xss_clean($this->input->post('historicalDate')) : '';
        $this->load->database();
        $this->load->model('Activity');
        $r = $this->Activity;

        $a = array();
        $c = array();
        $count = 1;
        foreach ($r->get(($date != '') ? array('Date >='=>$date) : '') as $row){
                $a['row'.$count++] = $row->makeArray();
                $c = $row->makeColArray();
        }

        $data = array(
            'cols' => $c,
            'serv' => $a,
            'head' => $this->getHead()
        );
        $this->load->view('serviceView', $data);
    }
}