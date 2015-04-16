<?php

/*
 *General idea: Some controller will call this employeeStatisticsViewAfter.php and pass the necessary array and multidimensional array.
 *Then, this php file will use the arrays data and generate the tables.
 *
 *Data needed:
 *$summaryArray [employeeName, title, phoneNumber, dateOfEmployement, commisionPercentage]
 *$detailSummaryArray [][Date, ActivityType, Revenue, Commision, TransactionID]
 *
 *Note:
 *Remember to change the button link for modifyEmployeeDetailButton().
 */

class EmployeeStatisticsViewAfter
{
	//Test variables
        private $id;
	private $summaryArray = [];
	private $detailSummaryArray;
	private $detailSummaryArraySize;
	private $detailSummaryArrayCol = 5;
	
	//Test Constructor
	public function __construct($id, $s, $d)
	{	
            $this->id = $id;
            $this->summaryArray = $s;
            $this->detailSummaryArray = $d;

// 		$this->detailSummaryArraySize = count($this->detailSummaryArray);
// 		echo "detailSummaryArraySize is " .$this->detailSummaryArraySize;
		
		$this->drawEmployeeSummaryTable();
		$this->drawEmployeeDetailTable();
		$this->modifyEmployeeDetailButton();
	}
		
	function drawEmployeeSummaryTable()
	{
		echo '<div id="employeeSummaryTable" style="width:800px; margin:0 auto; padding-top: 100px;">';
		echo "<table class=\"pure-table\">";
		echo "<thead>
			  	<tr>
            		<th>Employee Name</th>
					<th>Title</th>
            		<th>Phone Number</th>
					<th>Date of Employement</th>
            		<th>Commision %</th>
        		</tr>
    		  </thead>";
		
		echo "<tr class=\"pure-table-odd\">";
		echo "<td>" .$this->summaryArray['employeeName']. "</td>";
		echo "<td>" .$this->summaryArray['title']. "</td>";
		echo "<td>" .$this->summaryArray['phoneNumber']. "</td>";
		echo "<td>" .$this->summaryArray['dateOfEmployement']. "</td>";
		echo "<td>" .$this->summaryArray['commisionPercentage']. "%</td>";
		echo "</tr>";
		echo "</table>";
		echo "</div>";
		echo '</br>';
	}
	
	function drawEmployeeDetailTable()
	{
		echo '<div id="employeeDetailsTable" style="width:800px; margin:0 auto; padding-top: 50px;">';
		echo "<caption>Recent activities:</caption>";
		echo "<table class=\"pure-table\">";
		echo "<thead>
			  	<tr>
            		<th>Date</th>
            		<th>Activity Type</th>
            		<th>Revenue</th>
            		<th>Commision</th>
					<th>Transaction ID</th>
        		</tr>
    		  </thead>";
		
		$counter = 1; //Use to keep track of the row number
		
		foreach ($this->detailSummaryArray as $entry)
		{
			if($counter % 2 != 0)
			{
				echo "<tr class=\"pure-table-odd\">";		
			}
			else
			{
				echo "<tr>";	
			}
			
			echo "<td>" .$entry['Date']. "</td>";
			echo "<td>" .$entry['ActivityType']. "</td>";
			echo "<td> $" .$entry['Revenue']. "</td>";
			echo "<td> $" .$entry['Commision']. "</td>";
			echo "<td>" .$entry['TransactionID']. "</td>";
	
			$counter++;
		}
				
		echo "</table></br></br>";
	}
	
	function modifyEmployeeDetailButton()
	{
		echo '<a class="pure-button pure-button-primary" href="https://clipper.encs.concordia.ca/cgi-bin/cgiwrap/ogc353_4/index.php/Manager/EditEmployee/index/'.$this->id.'">Modify Employee Details</a>';
		echo "</div>";
	}
}
?>


<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Employee Statistics</title>
		<link rel="stylesheet" href="https://clipper.encs.concordia.ca/~ogc353_4/css/pure-min.css">
	</head>
	
	<body>
            <?php
                echo $head;
                $v = new EmployeeStatisticsViewAfter($id, $summaryArray, $detailSummaryArray);
            ?>
	</body>
</html>

