<?php 
/*
 *$result stores the result from the login() invocation
 *if the login() is successful then login() return true (and return ManagerHomeView.php or EmployeeHomeView.php)
 *else return false	(and return login.php)
 */

class LoginView
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
		<title>Login</title>
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	</head>
	
	<body>
		<?php		
			//echo $result;
		?>
		<div id="form" style="width:800px; margin:0 auto; padding-top: 100px;">
			<form action=”#” method=”POST” name="loginForm" class="pure-form" id="loginForm">
    			<fieldset>
        			<legend>Enter login information:</legend>

        			<input id=”username” name=”username” placeholder="Username" required=”required”>
        			<input id=”password” name=”password” type="password" placeholder="Password" required=”required”></br>

					</br>
        			<button type="submit" name=”submit” class="pure-button pure-button-primary">Login</button>
        			<button type="”reset" name=”reset” class="pure-button pure-button-primary">Reset</button>
    			</fieldset>
			</form>
		</div>
	</body>
</html>