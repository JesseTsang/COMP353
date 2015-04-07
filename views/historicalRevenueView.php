<?php

/*
 * General Idea: Once a user submit this form, then it will contact some controller function and transfer the data to some model function and process it for storage.
 */

class HistoricalRevenueView
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
		<title>Historical Search View</title>
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	</head>
	
	<body>
		<div id="main>
			<div id="header"></div>
			<div id="form" style="width:800px; margin:0 auto; padding-top: 100px;">
				<form action=”#” method=”POST” name="historicalSearchForm" class="pure-form" id="historicalSearchForm">
    				<fieldset>
    					</br>
        				<legend>Enter a date to display a historical revenue summary:</legend>

        				<input id=”historicalDate” name=”historicalDate” type="text" placeholder="DD-MM-YYYY" required=”required”></br>

						</br>
        				<button type="submit" name=”submit” class="pure-button pure-button-primary">Submit</button>
    				</fieldset>
				</form>			
			</div>
			<div id="footer"></div>
		</div>
	</body>
</html>