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
		<title>Inventory Search View</title>
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	</head>
	
	<body>
		<div id="form" style="width:800px; margin:0 auto; padding-top: 100px;">
			<form action=”#” method=”POST” name="historicalSearchForm" class="pure-form pure-form-aligned" id="inventorySearchForm">
    			<fieldset>
        			<legend>Enter a product ID for a detailed product summary:</legend>
					
					<div class="pure-control-group">
						<label for="itemID">Product ID:</label>
        				<input id=”productID” name=”productIDField” type="text" placeholder="Enter Product ID"></br>
        			</div>	
        			
        			</br>
        			<div class="pure-control-group">
            			<label for="prodyctType">Product Type:</label>
            			<select id="prodyctType">
            				<option>Computer</option>
            				<option>Parts</option>
            				<option>Software</option>
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