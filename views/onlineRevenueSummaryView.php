<?php
class OnlineRevenueSummaryView
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
		$this->summaryArray["todayDate"] = "06/04/2015";
		$this->summaryArray["sumFromOnline"] = "1000";

		//Test Data
		$this->detailSummaryArray = array(
				"row1" => array(
						"Time" => "0900",
						"Location" => "Montreal, Canada",
						"Revenue" => "100",
						"ReferalEmployee" => "Joe",
						"TransactionID" => "ON-0900-107",
				),
				"row2" => array(
						"Time" => "0930",
						"Location" => "Toronto, Canada",
						"Revenue" => "100",
						"ReferalEmployee" => "Tom",
						"TransactionID" => "ON-0930-108",
				),
				"row3" => array(
						"Time" => "1000",
						"Location" => "Montreal, Canada",
						"Revenue" => "170",
						"ReferalEmployee" => "Mary",
						"TransactionID" => "ON-1000-109",
				),
				"row4" => array(
						"Time" => "1300",
						"Location" => "Montreal, Canada",
						"Revenue" => "230",
						"ReferalEmployee" => "Mary",
						"TransactionID" => "ON-1300-001",
				),
				"row5" => array(
						"Time" => "1300",
						"Location" => "New York, US",
						"Revenue" => "400",
						"ReferalEmployee" => "Kate",
						"TransactionID" => "ON-1300-100",
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
            		<th>Revenue from Online Sale</th>
        		</tr>
    		  </thead>";
		
		echo "<tr class=\"pure-table-odd\">";
		echo "<td>" .$this->summaryArray['todayDate']. "</td>";
		echo "<td>$" .$this->summaryArray['sumFromOnline']. "</td>";
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
            		<th>Location</th>
            		<th>Revenue</th>
            		<th>Referal Employee</th>
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
			
			echo "<td>" .$entry['Time']. "</td>";
			echo "<td>" .$entry['Location']. "</td>";
			echo "<td> $" .$entry['Revenue']. "</td>";
			echo "<td>" .$entry['ReferalEmployee']. "</td>";
			echo "<td>" .$entry['TransactionID']. "</td>";
			
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
		<title>Online Revenue Summary View</title>
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	</head>
	
	<body>

	</body>
</html>