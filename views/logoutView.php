<?php

/*
 * Once a user click the "LOGOUT" link, and the finish the logout(), the function will return this page.
 */

class LogoutView
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
		<title>Logout</title>
		<link rel="stylesheet" href="https://clipper.encs.concordia.ca/cgi-bin/cgiwrap/ogc353_4/css/style.css">
	</head>
	<body>
		<div id="logout" style="font-size: xx-large; width:800px; margin:0 auto; padding-top: 100px;">
  			<span>You have logout successfully!</span></br>
  			<span>Goodbye!</span>
		</div>
	</body>
</html>