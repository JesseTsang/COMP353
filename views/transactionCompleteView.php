<?php 
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
		<title>Tranaction Complete View</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<?php	
		//$referenceID stores the result from the getReferenceID() invocation
		//if the getReferenceID() is successful then getReferenceID() return the ID string (and return ManagerView or EmployeeView + this view)
		//else return error.
			
		//echo $referenceID;
		
		//Test variable
		$referenceID = "XXX-XXXX-XXX";
		?>
		
		<div class=logoutContainer>
  			<span>Tranaction Complete!</span></br>
  			<span>Reference ID: <?php echo $referenceID;?></span>
		</div>
	</body>
</html>