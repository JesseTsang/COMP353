<?php

/*
 *General idea: Some controller will call this repairRevenueSummaryView.php and pass the necessary array and multidimensional array.
 *Then, this php file will use the arrays data and generate the tables.
 *
 *Data needed:
 *$summaryArray [todayDate, sumFromRepair]
 *$detailSummaryArray [][Time, ServiceType, Revenue, EmployeeName, ServiceID]
 *
 */

class RepairRevenueSummaryView
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
		$this->summaryArray["todayDate"] = "15/03/2015";
		$this->summaryArray["sumFromRepair"] = "1000";

		//Test Data
		$this->detailSummaryArray = array(
				"row1" => array(
						"Time" => "0900",
						"ServiceType" => "PC Repair",
						"Revenue" => "100",
						"EmployeeName" => "Joe",
						"ServiceID" => "RE-0900-107",
				),
				"row2" => array(
						"Time" => "0930",
						"ServiceType" => "PC Repair",
						"Revenue" => "100",
						"EmployeeName" => "Tom",
						"ServiceID" => "RE-0930-108",
				),
				"row3" => array(
						"Time" => "1000",
						"ServiceType" => "PC Repair",
						"Revenue" => "170",
						"EmployeeName" => "Mary",
						"ServiceID" => "RE-1000-109",
				),
				"row4" => array(
						"Time" => "1300",
						"ServiceType" => "Laptop Repair",
						"Revenue" => "230",
						"EmployeeName" => "Mary",
						"ServiceID" => "RE-1300-001",
				),
				"row5" => array(
						"Time" => "1300",
						"ServiceType" => "Laptop Repair",
						"Revenue" => "400",
						"EmployeeName" => "Kate",
						"ServiceID" => "RE-1300-100",
				)
				
		);
		
		//Test Data
		$this->detailSummaryArraySize = count($this->detailSummaryArray);
		
		$this->drawRepairSummaryTable();
		echo '</br>';
		$this->drawRepairDetailsTable();
	}
	
	
	function drawRepairSummaryTable()
	{
		echo '<div id="repairSummaryTable" style="width:800px; margin:0 auto; padding-top: 100px;">';
		echo "<table class=\"pure-table\">";
		echo "<thead>
			  	<tr>
            		<th>Date</th>
            		<th>Revenue from Repair</th>
        		</tr>
    		  </thead>";
		
		echo "<tr class=\"pure-table-odd\">";
		echo "<td>" .$this->summaryArray['todayDate']. "</td>";
		echo "<td>$" .$this->summaryArray['sumFromRepair']. "</td>";
		echo "</tr>";
		echo "</table>";
		echo "</div>";
	}
	
	//We need to know the row size
	function drawRepairDetailsTable()
	{
		echo '<div id="repairDetailsTable" style="width:800px; margin:0 auto; padding-top: 50px;">';
		echo "<table class=\"pure-table\">";
		echo "<thead>
			  	<tr>
            		<th>Time</th>
            		<th>Service Type</th>
            		<th>Revenue</th>
            		<th>Employee Name</th>
					<th>Service ID</th>
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
			
			echo "<td>" .$entry['Time']. "</td>";
			echo "<td>" .$entry['ServiceType']. "</td>";
			echo "<td> $" .$entry['Revenue']. "</td>";
			echo "<td>" .$entry['EmployeeName']. "</td>";
			echo "<td>" .$entry['ServiceID']. "</td>";
			
			$counter++;
		}
				
		echo "</table>";
		echo "</div>";
	}
}
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Repair Revenue Summary View</title>
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	</head>
	
	<body>

	</body>
</html>