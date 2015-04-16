<?php
/*
 * Once the login process is successful, the user (if a manager) will be presented with this page.
 * 
 * Note:
 * Employee Details should show details of the current login employee.
 */

class ManagerHomeView
{
	//Test Constructor
	public function __construct()
	{
		//echo 'Hello. You are inside logoutView.php - __construct()</br>';
	}
}

?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Manager Home View</title>
		<link rel="stylesheet" href="https://clipper.encs.concordia.ca/~ogc353_4/css/pure-min.css">
	</head>
	
	<body>
		<?php echo $head; ?>
	</body>
</html>