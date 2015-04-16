<?php

/*
 *General idea: Some controller will call this frequencyListView.php and pass the multidimensional array.
 *Then, this php file will use the arrays data and generate the tables.
 *
 *Data needed:
 *$frequencyArray [][itemName, productType, productID, inventoryQuantity, frequency, price]
 *
 *Note:
 *
 */

class frequencyListView
{
	//Test variables
	private $frequencyArray;

	//Test Constructor
	public function __construct($fa)
	{	
		$this->frequencyArray = $fa;
	
		$this->drawFrequencyTable();
	}
	
	function drawFrequencyTable()
	{
		echo '<div id="recentTransactionTable" style="width:1000px; margin:0 auto; padding-top: 50px;">';
		echo "<caption>Recent activities:</caption>";
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
		<link rel="stylesheet" href="https://clipper.encs.concordia.ca/~ogc353_4/css/pure-min.css">
	</head>
	
	<body>
            <?php echo $head; ?>
            <?php new frequencyListView($fa); ?>
	</body>
</html>