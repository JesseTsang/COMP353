<?php 
class NewTicketView
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
		<title>New Ticket View</title>
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	</head>
	
	<body>
		<div id="form" style="width:800px; margin:0 auto; padding-top: 100px;">
			<form class="pure-form pure-form-aligned">
    			<fieldset>
    				<legend>Enter details below for a new transaction:</legend>
    			
        			<div class="pure-control-group">
            			<label for="itemID">Product ID:</label>
            			<input id="itemID" type="text" placeholder="Product ID">
        			</div>

        			<div class="pure-control-group">
            			<label for="itemQuality">Quantity:</label>
            			<input id="itemQuality" type="text" placeholder="# of items">
        			</div>

        			<div class="pure-control-group">
            			<label for="customerName">Customer Name:</label>
            			<input id="customerName" type="text" placeholder="Customer Name">
        			</div>

        			<div class="pure-control-group">
            			<label for="serciceType">Service Type:</label>
            			<select id="serviceType">
            				<option>Sale</option>
            				<option>Repair</option>
        				</select>
        			</div>
				
					<div class="pure-controls">
            			<button type="submit" class="pure-button pure-button-primary">Submit</button>
            			<button type="reset" class="pure-button pure-button-primary">Reset</button>
        			</div>	
    			</fieldset>
			</form>
		</div>
	</body>
</html>