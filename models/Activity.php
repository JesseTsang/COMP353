<?php

class Activity extends MY_Model {
    
    const DB_TABLE = 'Activity';
    const DB_TABLE_PK = 'ServiceID';
    
    public $Activity;
    public $ServiceID;
    public $ComputerID;
    public $ProductType;
    public $Date;
    public $Technician;
    
    public function makeArray(){
        return array(
            "Activity" => $this->Activity,
            "ServiceID" => $this->ServiceID,
            "ComputerID" => $this->ComputerID,
            "ProductType" => $this->ProductType,
            "Date" => $this->Date,
            "Technician" => $this->Technician,
        );
    }
    
    public function makeColArray(){
        return array(
            "Activity",
            "ServiceID",
            "ComputerID",
            "ProductType",
            "Date",
            "Technician",
        );
    }
}