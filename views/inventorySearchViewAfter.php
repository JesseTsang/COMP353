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

$tableHeadings = $cols; //$cols is an array of headers [ComputerID, Manufacturer, Model, Speed, RAM, HDD, ScreenSize]
$productList = $prod; //$prod is an array of data that corrospond to $cols array (7 elements).


function drawResultTable($tableHeadings, $productList)
{
	echo '<div id="historicalSummaryTable" style="width:800px; margin:0 auto; padding-top: 100px;">';
	echo "<caption>Search Result:</caption>";
	echo "<table class=\"pure-table\">";
	echo "<thead>";
	echo "<tr>";

	foreach ($tableHeadings as $Heading)
	{
		echo "<th> $Heading </th>";
	}

	echo "</tr>";
	echo "</thead>";

	$counter = 1; //Use to keep track of the row number

	foreach ($productList as $entry)
	{
		if($counter % 2 != 0)
		{
			echo "<tr class=\"pure-table-odd\">";
		}
		else
		{
			echo "<tr>";
		}

		foreach ($entry as $element)
		{
			echo "<td> $element </td>";
		}

		echo "</tr>";

		$counter++;
	}

	echo "</table>";
	echo "</div>";
}

?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Inventory Search Result</title>
		<link rel="stylesheet" href="https://clipper.encs.concordia.ca/~ogc353_4/css/pure-min.css">
	</head>
	
	<body>
    <?php 
    echo $head;
    
    if(sizeof($prod) < 1)
    {
    	echo 'Nothing found.';
    }
    else
    {
    	drawResultTable($tableHeadings, $productList);
    }
    ?>

	</body>
</html>