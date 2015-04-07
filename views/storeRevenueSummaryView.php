<?php
class StoreRevenueSummaryView
{
	//General idea: Some controller will call this storeRevenueSummaryView.php and pass the necessary array and multidimensional array.
	//Data needed:
	//$summaryArray [todayDate, sumFromSale, sumFromRepair]
	//$detailSummaryArray [][time, acticityType, revenue, employeeName]
	//Then, this php file will use the arrays and generate the tables. 
	
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
		
		//Test Data
		$this->detailSummaryArraySize = count($this->detailSummaryArray);
		
		$this->drawRevenueSummaryTable();
		echo '</br>';
		$this->drawDetailSummaryTable();
	}
	
	
	function drawRevenueSummaryTable()
	{
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
	}
	
	//We need to know the row size
	function drawDetailSummaryTable()
	{
		echo "<table class=\"pure-table\">";
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
			echo "<td>" .$entry['Revenue']. "</td>";
			echo "<td>" .$entry['Employee']. "</td>";
			
			$counter++;
		}
				
		echo "</table>";
	}
}
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Revenue Summary View</title>
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	</head>
	
	<body>

	</body>
</html>