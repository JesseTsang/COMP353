<?php

/*
 *General idea: Some controller will call this storeRevenueSummaryView.php and pass the necessary array and multidimensional array.
 *Then, this php file will use the arrays data and generate the tables. 
 *
 *Data needed:
 *$summaryArray [todayDate, sumFromSale, sumFromRepair]
 *$detailSummaryArray [][time, acticityType, revenue, employeeName]
 *
 */

class StoreRevenueSummaryView
{
	//Test variables
	private $summaryArray = [];
	private $detailSummaryArray;
	private $detailSummaryArraySize;
	private $detailSummaryArrayCol = 4;

	//Test Constructor
	public function __construct()
	{	
		//Test Data
		$this->summaryArray["todayDate"] = "06/04/2015";
		$this->summaryArray["sumFromSale"] = "200";
		$this->summaryArray["sumFromRepair"] = "560";
		
		//Test Data
		$this->detailSummaryArray = array(
				"row1" => array(
						"Time" => "0900",
						"ActivityType" => "Sale",
						"Revenue" => "150",
						"Employee" => "Joe"
				),
				"row2" => array(
						"Time" => "0930",
						"ActivityType" => "Repair",
						"Revenue" => "100",
						"Employee" => "Tom"
				),
				"row3" => array(
						"Time" => "1000",
						"ActivityType" => "Repair",
						"Revenue" => "400",
						"Employee" => "Mary"
				),
				"row4" => array(
						"Time" => "1300",
						"ActivityType" => "Sale",
						"Revenue" => "50",
						"Employee" => "Mary"
				),
				"row5" => array(
						"Time" => "1300",
						"ActivityType" => "Repair",
						"Revenue" => "60",
						"Employee" => "Kate"
				)
		);
		
		//Count the # of rows so we can generate a table.
		$this->detailSummaryArraySize = count($this->detailSummaryArray);
		
		$this->drawRevenueSummaryTable();
		echo '</br>';
		$this->drawDetailSummaryTable();
	}
	
	
	function drawRevenueSummaryTable()
	{
		echo '<div id="revenueSummaryTable" style="width:800px; margin:0 auto; padding-top: 100px;">'; 
		echo "<table class=\"pure-table\">";
		echo "<thead>
			  	<tr>
            		<th>Date</th>
            		<th>Revenue from Sale</th>
            		<th>Revenue from Repair</th>
        		</tr>
    		  </thead>";
		
		echo "<tr class=\"pure-table-odd\">";
		echo "<td>" .$this->summaryArray['todayDate']. "</td>";
		echo "<td>$" .$this->summaryArray['sumFromSale']. "</td>";
		echo "<td>$" .$this->summaryArray['sumFromRepair']. "</td>";
		echo "</tr>";
		echo "</table>";
		echo "</div>";
	}
	
	//We need to know the row size
	function drawDetailSummaryTable()
	{
		echo '<div id="revenueDetailsTable" style="width:800px; margin:0 auto; padding-top: 50px;">';
		echo "<table class=\"pure-table\">";
		echo "<legend>Recent transactions:</legend>";
		
		echo "<thead>
			  	<tr>
            		<th>Time</th>
            		<th>Activity Type</th>
            		<th>Revenue</th>
            		<th>Employee</th>
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
			echo "<td>" .$entry['ActivityType']. "</td>";
			echo "<td> $" .$entry['Revenue']. "</td>";
			echo "<td>" .$entry['Employee']. "</td>";
			
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
		<title>Store Revenue Summary</title>
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	</head>
	
	<body>

	</body>
</html>