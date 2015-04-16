<?php 
class modifyEmployeeDetailsView
{
	//Test Constructor
	public function __construct()
	{
		//echo 'Hello. You are inside loginView.php - __construct()</br>';
	}
}

function fill($field, $u, $e){
    if(isset($u)){
        switch ($field){
            case "ID":
            case "Name":
            case "PhoneNumber":
            case "DateofEmployement": return $u->{$field};
            default: return $e->{$field};
        }
    }
    return '';
}
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Modify Employee Details</title>
		<link rel="stylesheet" href="https://clipper.encs.concordia.ca/~ogc353_4/css/pure-min.css">
                
	</head>
	
	<body>
            <?php echo $head; ?>
		<div id="form" style="width:800px; margin:0 auto; padding-top: 100px;">
			<form class="pure-form pure-form-aligned" action="https://clipper.encs.concordia.ca/cgi-bin/cgiwrap/ogc353_4/index.php/Manager/EditEmployee/process" method="POST">
    			<fieldset>
    				<legend>Enter new employee details below:</legend>
    			
                                <input type="hidden" name="ID" value="<?php echo fill("ID", $u, $e); ?>">
                                
        			<div class="pure-control-group">
            			<label for="employeeName">Name:</label>
            			<input id="employeeNameField" type="text" placeholder="Name" name="Name" value="<?php echo fill("Name", $u, $e); ?>">
        			</div>
                                
                                <div class="pure-control-group">
            			<label for="PasswordField">Password:</label>
            			<input id="PasswordField" type="password" placeholder="Password" name="Password">
        			</div>

        			<div class="pure-control-group">
	            		<label for="phoneNumber">Phone Number:</label>
            			<input id="phoneNumberField" type="text" placeholder="1234567890" name="PhoneNumber" value="<?php echo fill("PhoneNumber", $u, $e); ?>">
        			</div>

        			<div class="pure-control-group">
            			<label for="dateOfEmployment">Date of Employment:</label>
            			<input id="dateOfEmploymentField" type="text" placeholder="YYYY-MM-DD" name="DateofEmployement" value="<?php echo fill("DateofEmployement", $u, $e); ?>">
        			</div>

        			<div class="pure-control-group">
            			<label for="annualPayment">Annual Payment:</label>
            			<input id="annualPaymentField" type="text" placeholder="Annual Amount" name="AnnualPayment" value="<?php echo fill("AnnualPayment", $u, $e); ?>">
        			</div>
        			
        			<div class="pure-control-group">
            			<label for="commission">Commission:</label>
            			<input id="commissionField" type="text" placeholder="Commission Percentage" name="Commission" value="<?php echo fill("Commission", $u, $e); ?>">
        			</div>
        			
        			<div class="pure-control-group">
            			<label for="paymentMethod">Payment Method:</label>
                                <select id="paymentMethod" name="PaymentMethod">
            				<option value="Weekly">Weekly</option>
            				<option value="Monthly">Monthly</option>
            				<option value="Annually">Annually</option>
        				</select>
        			</div>
                                <script>
                                    var temp = "<?php echo fill("PaymentMethod;", $u, $e); ?>";
                                    var mySelect = document.getElementById('paymentMethod');

                                    for(var i, j = 0; i = mySelect.options[j]; j++) {
                                        if(i.value == temp) {
                                            mySelect.selectedIndex = j;
                                            break;
                                        }
                                    }
                                </script>                                
					<div class="pure-controls">
                                <button type="submit" name="submitForm" value="save" class="pure-button pure-button-primary">Submit</button>
                                <button type="submit" name="submitForm" value="del" class="pure-button pure-button-primary">Delete</button>
            			<button type="reset" class="pure-button pure-button-primary">Reset</button>
        			</div>
    			</fieldset>
			</form>
		</div>
	</body>
</html>