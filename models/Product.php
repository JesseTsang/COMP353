<?php

class Product extends MY_Model2 {
    
    const DB_TABLE = 'Product';
    const DB_TABLE_PK = 'ProductID';
    const DB_TABLE_PK_SEC = 'ProductType';
    
    public $ProductID;
    public $ProductType;
    public $Cost;
    public $InventoryAmount;
}