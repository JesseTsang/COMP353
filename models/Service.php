<?php

class Service extends MY_Model {
    
    const DB_TABLE = 'Service';
    const DB_TABLE_PK = 'ServiceID';
    
    public $ServiceID;
    public $Name;
    public $Cost;
}