<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StoreRevenueSummary extends Manager_Controller {
    function __construct(){
        parent::__construct();
    }

    public function index($type)
    {
        if($type == 'Offline_transaction' || $type == 'Online_transaction' || $type == 'Service_transaction'){
            $this->load->database();
            $this->load->model($type);
            $r = $this->{$type};

            $a = array();
            $c = array();
            $count = 1;
            foreach ($r->get() as $row){
                $a['row'.$count++] = $row->makeArray();
                $c = $row->makeColArray();
            }
        
            $data = array(
                'cols' => $c,
                'rev' => $a,
                'head' => $this->getHead()
            );
            $this->load->view('storeRevenueSummaryView', $data);
        }else{
            return '';
        }
    }
}