<?php

class Employee extends MY_Model {
    
    const DB_TABLE = 'Employee';
    const DB_TABLE_PK = 'EmployeeID';
    
    public $EmployeeID;
    public $AnnualPayment;
    public $Commission;
    public $PaymentMethod;
}