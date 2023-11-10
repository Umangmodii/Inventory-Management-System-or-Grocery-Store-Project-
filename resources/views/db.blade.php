
@include('cdn')

<!DOCTYPE html>
{{-- <html>
<head>
	<title>DB | Connection </title>
	<style>
		div {
			font-size: 22px;
		}
	</style>
</head>
<body>
	<div>
		
	</div>
</body>
</html> --}}

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
