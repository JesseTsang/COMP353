<?php 
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
		<form action=”#” method=”POST” name="historicalSearchForm" class="pure-form" id="historicalSearchForm">
    		<fieldset>
        		<legend>Enter a date to display a historical revenue summary:</legend>

        		<input id=”historicalDate” name=”historicalDate” type="text" placeholder="DD-MM-YYYY" required=”required”></br>

				</br>
        		<button type="submit" name=”submit” class="pure-button pure-button-primary">Submit</button>

    		</fieldset>
		</form>
	</body>
</html>