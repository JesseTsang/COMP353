<?php 
class InventorySearchView
{
	//Test Constructor
	public function __construct()
	{
		//echo 'Hello. You are inside loginView.php - __construct()</br>';
	}
}
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Inventory Search</title>
		<link rel="stylesheet" href="https://clipper.encs.concordia.ca/~ogc353_4/css/pure-min.css">
	</head>
	
	<body>
        <?php echo $head; ?>
		<div id="form" style="width:800px; margin:0 auto; padding-top: 100px;">
			<form action="https://clipper.encs.concordia.ca/cgi-bin/cgiwrap/ogc353_4/index.php/Employee/InventorySearch/display" method="POST" name="historicalSearchForm" class="pure-form" id="inventorySearchForm"> 			
    			<fieldset>
        			<legend>Enter a product name or ID for a detailed product summary: (leave empty for all)</legend>
					
					<div class="pure-control-group">
						<label for="productID">Product Name/ID:</label>
        				<input id="productID" name="product" type="text" placeholder="Product Name or ID"></br>
        			</div>	
					
        			</br>
        			<div class="pure-control-group">
            			<label for="type">Product Type:</label>
            			<select name="type">
            				<option value="Computer">Computer</option>
            				<option value="Part">Parts</option>
            				<option value="Software">Software</option>
        				</select>
        			</div>
        			
					</br>
					<div class="pure-control-group">
        				<button type="submit" name=”submit” class="pure-button pure-button-primary">Submit</button>
        			</div>
    			</fieldset>		
			</form>
		</div>
	</body>
</html>