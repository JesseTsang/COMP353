<?php

class Software extends MY_Model {
    
    const DB_TABLE = 'Software';
    const DB_TABLE_PK = 'SoftwareID';
    
    public $SoftwareID;
    public $Name;
    public $Size;
    public $ActivationTime;
    public $Platform;
    
    public function getName(){
        return $this->Name;
    }
    
    public function makeArray(){
        return array(
            $this->SoftwareID,
            $this->Name,
            $this->Size,
            $this->ActivationTime,
            $this->Platform,
        );
    }
    
    public function makeColArray(){
        return array(
            "SoftwareID",
            "Name",
            "Size",
            "ActivationTime",
            "Platform"
        );
    }
}