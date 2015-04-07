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
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	</head>
	
	<body>
		<div class="pure-menu pure-menu-horizontal">
    		<ul class="pure-menu-list">
        		<li class="pure-menu-item pure-menu-selected"><a href="" class="pure-menu-link">Home</a></li>
        		<li class="pure-menu-item pure-menu-has-children pure-menu-allow-hover">
            		<a href="#" id="menuLink1" class="pure-menu-link">Statistics</a>
            			<ul class="pure-menu-children">
                			<li class="pure-menu-item"><a href="" class="pure-menu-link">Revenue Summary</a></li>
                			<li class="pure-menu-item"><a href="" class="pure-menu-link">Sale Revenue</a></li>
                			<li class="pure-menu-item"><a href="" class="pure-menu-link">Repair Revenue</a></li>
                			<li class="pure-menu-item"><a href="" class="pure-menu-link">Online Revenue</a></li>
                			<li class="pure-menu-item"><a href="" class="pure-menu-link">Historical Revenue</a></li>
                			<li class="pure-menu-item"><a href="" class="pure-menu-link">Employee Statistics</a></li>
            			</ul>
        		</li>
        		<li class="pure-menu-item pure-menu-selected"><a href="#" class="pure-menu-link">New Ticket</a></li>
<!--         		<li class="pure-menu-item pure-menu-has-children pure-menu-allow-hover"> -->
<!--         			<a href="" id="menuLink1" class="pure-menu-link">New Ticket</a> -->
<!--             			<ul class="pure-menu-children"> -->
<!--                 			<li class="pure-menu-item"><a href="newTicketView.php" class="pure-menu-link">New Sale</a></li> -->
<!--                 			<li class="pure-menu-item"><a href="#" class="pure-menu-link">New Repair</a></li> -->
<!--             			</ul> -->
<!--         		</li> -->
        		<li class="pure-menu-item pure-menu-selected"><a href="" class="pure-menu-link">Inventory</a></li>
        		<li class="pure-menu-item pure-menu-selected"><a href="" class="pure-menu-link">Employee Details</a></li>
        		<li class="pure-menu-item pure-menu-selected"><a href="" class="pure-menu-link">Logout</a></li>
    		</ul>
		</div>
	</body>
</html>