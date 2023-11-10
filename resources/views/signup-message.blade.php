<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> SignUp | Register </title>
</head>
<body>
    
    <?php

$isInsertSuccress = "";

?>



@if($isInsertSuccress)

	<div class="alert alert-success" role="alert">
		<h4 class="alert-heading">Data Sent Successfully!</h4>
	</div>
	   

	   @else
	   
		<div class="alert alert-success" role="alert">
			<h4 class="alert-heading">Data Not Sent!</h4>
		</div>
	
	   @endif

</body>
</html> 