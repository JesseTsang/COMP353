<?php
$tableHeadings = $cols; //$cols is an array of headers [Transaction_ID, Product_ID, Product_Type, Amount, Cost, IsASale?, Date, Total]
$revenueList = $rev; //$rev is an array of data that corrospond to $cols array (7 elements).

function calcStoreRevenue($revenueList)
{
	if(sizeof($revenueList) < 1)
	{
		echo 'Nothing found.';
	}
	else
	{
		$total = 0;
		
		foreach ($revenueList as $key => $p) 
		{
			if(isset($p["IsSold"]) && $p["IsSold"] == 'No')
			{
				$total = $total - ($p["Cost"]*$p["Amount"]);		
			}
				
			else
			{
				$total = $total + ($p["Cost"]*$p["Amount"]);			
			}			
		}
	
		return $total;
	}
}

function drawTotalRevenueTable($revenueList)
{
	$total = calcStoreRevenue($revenueList);
	
	echo '<div id="saleSummaryTable" style="width:1200px; margin:0 auto; padding-top: 100px;">';
	echo "<table class=\"pure-table\">";
	echo "<thead>
		  	<tr>
            	<th>Total Revenue</th>
        	</tr>
    	  </thead>";
	
	echo "<tr class=\"pure-table-odd\">";
	echo "<td> $total </td>";
	echo "</tr>";
	echo "</table>";
	echo "</div>";	
}



function drawDetailRevenueTable($tableHeadings, $revenueList)
{
	echo '<div id="saleSummaryTable" style="width:1200px; margin:0 auto; padding-top: 50px;">';
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
	
	foreach ($revenueList as $entry)
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
		<title>Store Revenue Summary</title>
		<link rel="stylesheet" href="https://clipper.encs.concordia.ca/~ogc353_4/css/pure-min.css">
	</head>
	
	<body>
	<?php
    echo $head; //Navigation bar
    
    if(sizeof($revenueList) < 1)
    {
    	echo 'Nothing found.';
    }
    else
    {
    	drawTotalRevenueTable($revenueList);
    	drawDetailRevenueTable($tableHeadings, $revenueList);	
    }
                  
    ?>
	</body>
</html>