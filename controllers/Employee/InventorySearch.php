<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InventorySearch extends Employee_Controller {
    function __construct(){
        parent::__construct();
    }

    public function index()
    {
        $data['head'] = $this->getHead();
        $this->load->view('inventorySearchView', $data);
    }
    
    public function display(){
        $product = $this->security->xss_clean($this->input->post('product'));
        $type = $this->security->xss_clean($this->input->post('type'));
        
        if($type == 'Computer' || $type == 'Part' || $type == 'Software'){
            $this->load->model('Product');
            $this->load->model($type);
            
            if($type != 'Computer') $this->Product->db->join($type, $type.'.'.$type.'ID = Product.ProductID');
            $this->Product->db->where('ProductType', $type);
            if($product != ''){
                $this->Product->db->where('ProductID', $product);
                if($type != 'Computer'){
                    $this->Product->db->or_where('Name', $product);
                    $this->Product->db->where('ProductType', $type);
                }
            }
            $o = $this->Product->db->get('Product');
            
            $a = array();
            $c = array();
            $count = 1;
            foreach ($o->result() as $row)
            {
                $s = $this->{$type};
                $s->load($row->ProductID);
                $a['row'.$count++] = $s->makeArray();
                $c = $s->makeColArray();
            }
            
            $data = array(
                'cols' => $c,
                'prod' => $a,
                'head' => $this->getHead()
            );
            
            $this->load->view('inventorySearchViewAfter', $data);
        }else{
            return '';
        }
    }
}