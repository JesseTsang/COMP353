<?php 
class modifyEmployeeDetailsView
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
		<title>Modify Employee Details</title>
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	</head>
	
	<body>
		<div id="form" style="width:800px; margin:0 auto; padding-top: 100px;">
			<form class="pure-form pure-form-aligned">
    			<fieldset>
    				<legend>Enter new employee details below:</legend>
    			
        			<div class="pure-control-group">
            			<label for="employeeName">Employee Name:</label>
            			<input id="employeeNameField" type="text" placeholder="Employee Name">
        			</div>

        			<div class="pure-control-group">
	            		<label for="phoneNumber">Phone Number:</label>
            			<input id="phoneNumberField" type="text" placeholder="123-456-7890">
        			</div>

        			<div class="pure-control-group">
            			<label for="dateOfEmployment">Date of Employment:</label>
            			<input id="dateOfEmploymentField" type="text" placeholder="DD/MM/YYYY">
        			</div>

        			<div class="pure-control-group">
            			<label for="password">New Password:</label>
            			<input id="password" type="password" placeholder="New Password">
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