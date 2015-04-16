<?php

class Offline_transaction extends MY_Model {
    
    const DB_TABLE = 'OfflineTransaction';
    const DB_TABLE_PK = 'TransactionID';
    
    public $TransactionID;
    public $ProductID;
    public $ProductType;
    public $Amount;
    public $Cost;
    public $IsSold;
    public $Date;
    
    public function makeArray(){
        return array(
            "TransactionID" => $this->TransactionID,
            "ProductID" => $this->ProductID,
            "ProductType" => $this->ProductType,
            "Amount" => $this->Amount,
            "Cost" => $this->Cost,
            "IsSold" => $this->IsSold ? 'Yes' : 'No',
            "Date" => $this->Date,
            "Total" => ($this->IsSold ? '' : '-').($this->Amount*$this->Cost).'$'
        );
    }
    
    public function makeColArray(){
        return array(
            "TransactionID",
            "ProductID",
            "ProductType",
            "Amount",
            "Cost",
            "Is a sale?",
            "Date",
            "Total",
        );
    }
}