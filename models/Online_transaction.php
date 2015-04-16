<?php

class Online_transaction extends MY_Model {
    
    const DB_TABLE = 'OnlineTransaction';
    const DB_TABLE_PK = 'TransactionID';
    
    public $TransactionID;
    public $ProductID;
    public $ProductType;
    public $Amount;
    public $Cost;
    public $Date;
    public $Country;
    public $Province;
    public $City;
    public $Referral;
    
    public function makeArray(){
        return array(
            "TransactionID" => $this->TransactionID,
            "ProductID" => $this->ProductID,
            "ProductType" => $this->ProductType,
            "Amount" => $this->Amount,
            "Cost" => $this->Cost,
            "Date" => $this->Date,
            "Country" => $this->Country,
            "Province" => $this->Province,
            "City" => $this->City,
            "Referral" => $this->Referral,
            "Total" => ($this->Amount*$this->Cost).'$'
        );
    }
    
    public function makeColArray(){
        return array(
            "TransactionID",
            "ProductID",
            "ProductType",
            "Amount",
            "Cost",
            "Date",
            "Country",
            "Province",
            "City",
            "Referral",
            "Total"
        );
    }
}