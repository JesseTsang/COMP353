<?php

/*
 *General idea: Some controller will call this inventorySearchViewAfter.php and pass the multidimensional array.
 *Then, this php file will use the arrays data and generate the tables.
 *
 *Data needed:
 *$detailSummaryArray [][itemName, productType, productID, inventoryQuantity, frequency, price]
 *
 *Note:
 *
 */

class frequencyListView
{
	//Test variables
	private $frequencyArray;

	//Test Constructor
	public function __construct()
	{	
		//Test Data
		$this->frequencyArray = array(
				"row1" => array(
						"ItemName" => "HP ProDesk 999",
						"ProductType" => "Computer",
						"ProductID" => "HP-PC-1325",
						"InventoryQuantity" => "10",
						"Frequency" => "5",
						"Price" => "700",
				),
				"row2" => array(
						"ItemName" => "Intel CPU i9",
						"ProductType" => "Parts",
						"ProductID" => "INT-CPU-2017",
						"InventoryQuantity" => "200",
						"Frequency" => "500",
						"Price" => "500",
				),
				"row3" => array(
						"ItemName" => "AMD R10",
						"ProductType" => "Parts",
						"ProductID" => "AMD-GC-2147",
						"InventoryQuantity" => "5",
						"Frequency" => "20",
						"Price" => "300",
				),
				"row4" => array(
						"ItemName" => "Microsoft Project 2015",
						"ProductType" => "Software",
						"ProductID" => "MCP-SO-1000",
						"InventoryQuantity" => "500",
						"Frequency" => "1",
						"Price" => "200",
				),		
		);
	
		$this->drawFrequencyTable();
	}
	
	function drawFrequencyTable()
	{
		echo '<div id="recentTransactionTable" style="width:1000px; margin:0 auto; padding-top: 50px;">';
		echo "<table class=\"pure-table\">";
		echo "<thead>
			  	<tr>
            		<th>Product Name</th>
            		<th>Product Type</th>
					<th>Product ID</th>
            		<th>Inventory Quantity</th>
            		<th>Frequency</th>
					<th>Price</th>
        		</tr>
    		  </thead>";
		
		$counter = 1;
		
		foreach ($this->frequencyArray as $entry)
		{
			if($counter % 2 != 0)
			{
				echo "<tr class=\"pure-table-odd\">";		
			}
			else
			{
				echo "<tr>";		
			}
			
			echo "<td>" .$entry['ItemName']. "</td>";
			echo "<td>" .$entry['ProductType']. "</td>";
			echo "<td>" .$entry['ProductID']. "</td>";
			echo "<td>" .$entry['InventoryQuantity']. "</td>";
			echo "<td>" .$entry['Frequency']. "</td>";
			echo "<td>$" .$entry['Price']. "</td>";
			
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