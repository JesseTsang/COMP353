<?php

class Service_transaction extends MY_Model {
    
    const DB_TABLE = 'ServiceTransaction';
    const DB_TABLE_PK = 'TransactionID';
    
    public $TransactionID;
    public $ServiceID;
    public $Amount;
    public $Cost;
    public $Technician;
    public $Date;
    
    public function makeArray(){
        return array(
            "TransactionID" => $this->TransactionID,
            "ServiceID" => $this->ServiceID,
            "Amount" => $this->Amount,
            "Cost" => $this->Cost,
            "Technician" => $this->Technician,
            "Date" => $this->Date,
            "Total" => ($this->Amount*$this->Cost).'$'
        );
    }
    
    public function makeColArray(){
        return array(
            "TransactionID",
            "ServiceID",
            "Amount",
            "Cost",
            "Technician",
            "Date",
            "Total"
        );
    }
}