<?php

/*
 *General idea: Some controller will call this inventorySearchViewAfter.php and pass the necessary array and multidimensional array.
 *Then, this php file will use the arrays data and generate the tables.
 *
 *Data needed:
 *$summaryArray [itemName, productID, productType, productQuantity, productPrice]
 *$detailSummaryArray [][speed, ram, hddSize, screenSize, manufacturer]
 *
 *Note:
 *Remember to change the button link for modifyEmployeeDetailButton().
 */

class InventorySearchViewAfter
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
		$this->summaryArray["itemName"] = "HP ProDesk 999";
		$this->summaryArray["productID"] = "HP-PC-1325";
		$this->summaryArray["productType"] = "Computer";
		$this->summaryArray["productQuantity"] = "10";
		$this->summaryArray["productPrice"] = "989.99";
		
		//Test Data
		$this->summaryArray["speed"] = "2";
		$this->summaryArray["ram"] = "8";
		$this->summaryArray["hddSize"] = "500";
		$this->summaryArray["screenSize"] = "19";
		$this->summaryArray["manufacturer"] = "HP";

		//Test Data
		$this->detailSummaryArray = array(
				"row1" => array(
						"Date" => "01/04/2015",
						"ActivityType" => "Sale",
						"Revenue" => "100",
						"EmployeeName" => "Joe",
						"Commision" => "5",
						"TransactionID" => "ST-0900-107",
				),
				"row2" => array(
						"Date" => "31/03/2015",
						"ActivityType" => "Sale",
						"Revenue" => "100",
						"EmployeeName" => "Joe",
						"Commision" => "5",
						"TransactionID" => "ST-0930-108",
				),
				"row3" => array(
						"Date" => "31/03/2015",
						"ActivityType" => "Repair",
						"Revenue" => "170",
						"EmployeeName" => "Joe",
						"Commision" => "8.5",
						"TransactionID" => "RE-1000-109",
				),
				"row4" => array(
						"Date" => "30/03/2015",
						"ActivityType" => "Sale",
						"Revenue" => "230",
						"EmployeeName" => "Joe",
						"Commision" => "11.5",
						"TransactionID" => "ST-1300-001",
				),
				"row5" => array(
						"Date" => "15/03/2015",
						"ActivityType" => "Repair",
						"Revenue" => "400",
						"EmployeeName" => "Joe",
						"Commision" => "20",
						"TransactionID" => "RE-1300-100",
				),
				
				
		);
		
		//Test Data
		$this->detailSummaryArraySize = count($this->detailSummaryArray);
		
		$this->drawProductInventoryTable();
		echo '</br>';
		$this->drawProductSpecTable();
		echo '</br>';
		$this->drawRecentTranactionsTable();
	}

	function drawProductInventoryTable()
	{
		echo '<div id="productInventoryTable" style="width:800px; margin:0 auto; padding-top: 100px;">';
		echo "<table class=\"pure-table\">";
		echo "<thead>
			  	<tr>
            		<th>Item Name</th>
            		<th>Product ID</th>
					<th>Type</th>
            		<th>Inventory Quantity</th>
					<th>Price</th>
        		</tr>
    		  </thead>";
		
		echo "<tr class=\"pure-table-odd\">";
		echo "<td>" .$this->summaryArray['itemName']. "</td>";
		echo "<td>" .$this->summaryArray['productID']. "</td>";
		echo "<td>" .$this->summaryArray['productType']. "</td>";
		echo "<td>" .$this->summaryArray['productQuantity']. "</td>";
		echo "<td>$" .$this->summaryArray['productPrice']. "</td>";
		echo "</tr>";
		echo "</table>";
		echo "</div>";
	}
	
	function drawProductSpecTable()
	{
		echo '<div id="productSpecTable" style="width:800px; margin:0 auto; padding-top: 50px;">';
		echo "<table class=\"pure-table\">";
		echo "<thead>
			  	<tr>
            		<th>Speed</th>
            		<th>Ram</th>
					<th>HDD Capacity</th>
            		<th>Screen Size</th>
            		<th>Manufacturer</th>
        		</tr>
    		  </thead>";
	
		echo "<tr class=\"pure-table-odd\">";
		echo "<td>" .$this->summaryArray['speed']. " GHz</td>";
		echo "<td>$" .$this->summaryArray['ram']. " GB</td>";
		echo "<td>" .$this->summaryArray['hddSize']. " GB</td>";
		echo "<td>$" .$this->summaryArray['screenSize']. " inch</td>";
		echo "<td>$" .$this->summaryArray['manufacturer']. "</td>";
		echo "</tr>";
		echo "</table>";
		echo "</div>";
	}
	
	function drawRecentTranactionsTable()
	{
		echo '<div id="recentTransactionTable" style="width:800px; margin:0 auto; padding-top: 50px;">';
		echo "<table class=\"pure-table\">";
		echo "<thead>
			  	<tr>
            		<th>Date</th>
            		<th>Activity Type</th>
            		<th>Revenue</th>
            		<th>Employee Name</th>
					<th>Comission</th>
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
			echo "<td>" .$entry['Revenue']. "</td>";
			echo "<td>" .$entry['EmployeeName']. "</td>";
			echo "<td>" .$entry['Commision']. "</td>";
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
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	</head>
	
	<body>

	</body>
</html>