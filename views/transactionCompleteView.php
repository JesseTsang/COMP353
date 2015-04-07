<?php

/*
 * General Idea: $errorMsg stores the result from the getReferenceID() invocation.
 * If the getReferenceID() is successful then getReferenceID() return the ID string (and return ManagerView or EmployeeView + this view)
 * else return error message.
 * 
 * To do:
 * uncomment $referenceID
 * comment out test variable
 */

class TransactionCompleteView
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
		<title>Tranaction Completed View</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<?php	
		
		//echo $referenceID;
		
		//Test variable
		$referenceID = "XXX-XXXX-XXX";
		?>
		
		<div id="trsnsactionCompletedMsg" style="font-size: xx-large; width:800px; margin:0 auto; padding-top: 100px;">
  			<span>Tranaction Complete!</span></br></br>
  			<span>Reference ID: <?php echo $referenceID;?></span>
		</div>
	</body>
</html>