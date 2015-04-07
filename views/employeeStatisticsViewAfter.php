<?php

/*
 *General idea: Some controller will call this employeeStatisticsViewAfter.php and pass the necessary array and multidimensional array.
 *Then, this php file will use the arrays data and generate the tables.
 *
 *Data needed:
 *$summaryArray [employeeName, phoneNumber, dateOfEmployement, commisionPercentage]
 *$detailSummaryArray [][Date, ActivityType, Revenue, Commision, TransactionID]
 *
 *Note:
 *Remember to change the button link for modifyEmployeeDetailButton().
 */

class EmployeeStatisticsViewAfter
{
	//Test variables
	private $summaryArray = [];
	private $detailSummaryArray;
	private $detailSummaryArraySize;
	private $detailSummaryArrayCol = 5;

	
	//Test Constructor
	public function __construct()
	{	
		//Test Data
		$this->summaryArray["employeeName"] = "Jesse Tsang";
		$this->summaryArray["phoneNumber"] = "514-123-4567";
		$this->summaryArray["dateOfEmployement"] = "01/07/2014";
		$this->summaryArray["commisionPercentage"] = "5";

		//Test Data
		$this->detailSummaryArray = array(
				"row1" => array(
						"Date" => "01/04/2015",
						"ActivityType" => "Sale",
						"Revenue" => "100",
						"Commision" => "5",
						"TransactionID" => "ST-0900-107",
				),
				"row2" => array(
						"Date" => "01/04/2015",
						"ActivityType" => "Sale",
						"Revenue" => "100",
						"Commision" => "5",
						"TransactionID" => "ST-0900-107",
				),
				"row3" => array(
						"Date" => "01/04/2015",
						"ActivityType" => "Repair",
						"Revenue" => "170",
						"Commision" => "8.5",
						"TransactionID" => "RE-0900-107",
				),
				"row4" => array(
						"Date" => "01/04/2015",
						"ActivityType" => "Sale",
						"Revenue" => "230",
						"Commision" => "11.5",
						"TransactionID" => "ST-0900-107",
				),
				"row5" => array(
						"Date" => "01/04/2015",
						"ActivityType" => "Repair",
						"Revenue" => "400",
						"Commision" => "20",
						"TransactionID" => "RE-0900-107",
				)
				
		);
		
		//Test Data
		$this->detailSummaryArraySize = count($this->detailSummaryArray);
		
		$this->drawEmployeeSummaryTable();
		echo '</br>';
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
            		<th>Phone Number</th>
					<th>Date of Employement</th>
            		<th>Commision %</th>
        		</tr>
    		  </thead>";
		
		echo "<tr class=\"pure-table-odd\">";
		echo "<td>" .$this->summaryArray['employeeName']. "</td>";
		echo "<td>$" .$this->summaryArray['phoneNumber']. "</td>";
		echo "<td>" .$this->summaryArray['dateOfEmployement']. "</td>";
		echo "<td>" .$this->summaryArray['commisionPercentage']. "%</td>";
		echo "</tr>";
		echo "</table>";
		echo "</div>";
	}
	
	//We need to know the row size
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
		
		$counter = 1;
		
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
				
		echo "</table>";
		echo "</div>";
	}
	
	function modifyEmployeeDetailButton()
	{
		echo '</br>';
		echo '<a class="pure-button pure-button-primary" href="#">Modify Employee Details</a>';		
	}
}
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Employee Statistics View - After</title>
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	</head>
	
	<body>

	</body>
</html>

