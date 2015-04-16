<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends Manager_Controller {
    function __construct(){
        parent::__construct();
    }

    public function index()
    {
        $this->load->model('Product');
        $this->load->model('Online_transaction');
        $this->load->model('Offline_transaction');
        
        $this->load->database();
        $p = $this->Product;
        
        $a = array();
        $count = 1;
        foreach ($p->get() as $row){
            $f = 0;
            $this->load->model($row->ProductType);
            $prod = $this->{$row->ProductType};
            $prod->load($row->ProductID);
            
            $this->db->where('ProductID', $row->ProductID);
            $this->db->where('ProductType', $row->ProductType);
            $query = $this->db->get('OnlineTransaction');
            $f += count($query->row());
            
            $this->db->where('ProductID', $row->ProductID);
            $this->db->where('ProductType', $row->ProductType);
            $query = $this->db->get('OfflineTransaction');
            $f += count($query->row());
            
            $a['row'.$count++] = array(
                'ItemName' => $prod->getName(),
                'ProductType' => $row->ProductType,
                'ProductID' => $row->ProductID,
                'InventoryQuantity' => $row->InventoryAmount,
                'Frequency' => $f,
                'Price' => $row->Cost
            );
        }
        
        $data = array(
            'fa' => $a,
            'head' => $this->getHead()
        );
        $this->load->view('frequencyListView',$data);
    }
}