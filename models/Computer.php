<?php

class Computer extends MY_Model {
    
    const DB_TABLE = 'Computer';
    const DB_TABLE_PK = 'ComputerID';
    
    public $ComputerID;
    public $Manufacturer;
    public $Model;
    public $Speed;
    public $RAM;
    public $HDD;
    public $Screen;
    
    public function getName(){
        return $this->Manufacturer.' - '.$this->Model;
    }
    
    public function makeArray(){
        return array(
            $this->ComputerID,
            $this->Manufacturer,
            $this->Model,
            $this->Speed,
            $this->RAM,
            $this->HDD,
            $this->Screen,
        );
    }
    
    public function makeColArray(){
        return array(
            "ComputerID",
            "Manufacturer",
            "Model",
            "Speed",
            "RAM",
            "HDD",
            "Screen"
        );
    }
}