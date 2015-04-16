<?php

/*
 *General idea: Some controller will call this saleRevenueSummaryView.php and pass the necessary array and multidimensional array.
 *Then, this php file will use the arrays data and generate the tables.
 *
 *Data needed:
 *$summaryArray [todayDate, sumFromSale]
 *$detailSummaryArray [][Time, ProductID, Revenue, EmployeeName, TransactionID]
 *
 */

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
		$this->summaryArray["todayDate"] = "15/03/2015";
		$this->summaryArray["sumFromSale"] = "1000";

		//Test Data
		$this->detailSummaryArray = array(
				"row1" => array(
						"Time" => "0900",
						"ProductID" => "HP-PC-1325",
						"Revenue" => "100",
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
						"Revenue" => "400",
						"Employee" => "Kate",
						"TransactionID" => "ST-1300-100",
				)
				
		);
		
		//Count the # of rows so we can generate a table.
		$this->detailSummaryArraySize = count($this->detailSummaryArray);
		
		$this->drawSaleSummaryTable();
		echo '</br>';
		$this->drawSaleDetailsTable();
	}
	
	
	function drawSaleSummaryTable()
	{
		echo '<div id="saleSummaryTable" style="width:800px; margin:0 auto; padding-top: 100px;">';
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
		echo "</div>";
	}
	
	function drawSaleDetailsTable()
	{
		echo '<div id="saleDetailsTable" style="width:800px; margin:0 auto; padding-top: 50px;">';
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
			echo "<td> $" .$entry['Revenue']. "</td>";
			echo "<td>" .$entry['Employee']. "</td>";
			echo "<td>" .$entry['TransactionID']. "</td>";
			
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
		<title>Sale Revenue Summary View</title>
		<link rel="stylesheet" href="https://clipper.encs.concordia.ca/~ogc353_4/css/pure-min.css">
	</head>
	
	<body>

	</body>
</html>