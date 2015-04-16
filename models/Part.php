<?php

class Part extends MY_Model {
    
    const DB_TABLE = 'Part';
    const DB_TABLE_PK = 'PartID';
    
    public $PartID;
    public $Name;
    public $Manufacturer;
    public $Model;
    public $Specification;
    
    public function getName(){
        return $this->Name;
    }
    
    public function makeArray(){
        return array(
            $this->PartID,
            $this->Name,
            $this->Manufacturer,
            $this->Model,
            $this->Specification,
        );
    }
    
    public function makeColArray(){
        return array(
            "PartID",
            "Name",
            "Manufacturer",
            "Model",
            "Specification"
        );
    }
}