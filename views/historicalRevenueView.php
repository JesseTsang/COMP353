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
		<title>Service Search View</title>
		<link rel="stylesheet" href="https://clipper.encs.concordia.ca/~ogc353_4/css/pure-min.css">
	</head>
	
	<body>
            <?php echo $head; ?>
		<div id="main">
			<div id="header"></div>
			<div id="form" style="width:800px; margin:0 auto; padding-top: 100px;">
				<form action="https://clipper.encs.concordia.ca/cgi-bin/cgiwrap/ogc353_4/index.php/Manager/Service/display" method="POST" name="historicalSearchForm" class="pure-form" id="historicalSearchForm">
    				<fieldset>
    					</br>
        				<legend>Enter a date to display services summary (Leave empty for all):</legend>

        				<input id="historicalDate" name="historicalDate" type="text" placeholder="YYYY-MM-DD"></br>

						</br>
        				<button type="submit" name="submit" class="pure-button pure-button-primary">Submit</button>
    				</fieldset>
				</form>			
			</div>
			<div id="footer"></div>
		</div>
	</body>
</html>