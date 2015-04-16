<?php 
$tableHeadings = $cols; //$cols is an array of headers [Activity, ServiceID, ComputerID, ProductType, Date, TechnicianID]
$serviceList = $serv; //$serv is an array of data that corrospond to $cols array (6 elements).

function drawResultTable($tableHeadings, $serviceList)
{
	echo '<div id="historicalSummaryTable" style="width:800px; margin:0 auto; padding-top: 100px;">';
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
	
	foreach ($serviceList as $entry)
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
		<title>Search Result</title>
		<link rel="stylesheet" href="https://clipper.encs.concordia.ca/~ogc353_4/css/pure-min.css">
	</head>
	
	<body>
    <?php
    echo $head; //Navigation bar
    
    if(sizeof($serviceList) < 1)
    {
    	echo 'Nothing found.';
    }
    else
    {
    	drawResultTable($tableHeadings, $serviceList);	
    }
    
    ?>           
	</body>
</html>