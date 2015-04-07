<?php 
class EmployeeStatisticsView
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
		<form action=”#” method=”POST” name="employeeSearchForm" class="pure-form" id="employeeSearchForm">
    		<fieldset>
        		<legend>Enter employee ID for a detailed employee summary:</legend>

        		<input id="employeeID" name=”employeeID” type="text" placeholder="ID # here" required=”required”></br>

				</br>
        		<button type="submit" name=”submit” class="pure-button pure-button-primary">Submit</button>

    		</fieldset>
		</form>
	</body>
</html>