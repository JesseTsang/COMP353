<?php 
class TransactionFailureView
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
		<title>Tranaction Failure View</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<?php	
		//$errorMsg stores the result from the getReferenceID() invocation.
		//if the getReferenceID() is successful then getReferenceID() return the ID string (and return ManagerView or EmployeeView + this view)
		//else return error message.
			
		//echo $errorMsg;
		
		//Test variable
		$errorMsg = "Error: Item requested out of stock!";
		?>
		
		<div class=logoutContainer>
  			<span>Tranaction Failed!</span></br>
  			<span>Reference ID: <?php echo $errorMsg;?></span>
		</div>
	</body>
</html>