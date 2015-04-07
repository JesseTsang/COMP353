<?php
class SaleRevenueSummaryView
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
		$this->summaryArray["sumFromSale"] = "1000";

		//Test Data
		$this->detailSummaryArray = array(
				"row1" => array(
						"Time" => "0900",
						"ProductID" => "HP-PC-1325",
						"Revenue" => "150",
						"Employee" => "Joe",
						"TransactionID" => "ST-0900-107",
				),
				"row2" => array(
						"Time" => "0930",
						"ProductID" => "APPL-LPT-342",
						"Revenue" => "100",
						"Employee" => "Tom",
						"TransactionID" => "ST-0930-108",
				),
				"row3" => array(
						"Time" => "1000",
						"ProductID" => "APPL-IP-3422",
						"Revenue" => "170",
						"Employee" => "Mary",
						"TransactionID" => "ST-1000-109",
				),
				"row4" => array(
						"Time" => "1300",
						"ProductID" => "ACC-CAB-021",
						"Revenue" => "230",
						"Employee" => "Mary",
						"TransactionID" => "ST-1300-001",
				),
				"row5" => array(
						"Time" => "1300",
						"ProductID" => "HP-PRI-9330",
						"Revenue" => "150",
						"Employee" => "Joe",
						"TransactionID" => "ST-1300-100",
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
        		</tr>
    		  </thead>";
		
		echo "<tr class=\"pure-table-odd\">";
		echo "<td>" .$this->summaryArray['todayDate']. "</td>";
		echo "<td>$" .$this->summaryArray['sumFromSale']. "</td>";
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
            		<th>Product ID</th>
            		<th>Revenue</th>
            		<th>Employee Name</th>
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
			echo "<td>" .$entry['ProductID']. "</td>";
			echo "<td>" .$entry['Revenue']. "</td>";
			echo "<td>" .$entry['Employee']. "</td>";
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
		<title>Sale Revenue Summary View</title>
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	</head>
	
	<body>

	</body>
</html>