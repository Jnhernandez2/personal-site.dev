<?php
var_dump($_GET);
var_dump($_POST);

function pageController() {



}

extract(pageController());

?>
<!DOCTYPE html>
<html lang="en">
  	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Contact me</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
		<link href="/css/bootstrap-3.3.6/docs/examples/cover/cover.css" rel="stylesheet">
		<link href="/css/bootstrap-3.3.6/docs/examples/signin/signin.css" rel="stylesheet">
		<link href="/css/custom-contact.css" rel="stylesheet">
   	</head>
  	<body class="blacken">

  		<div class="site-wrapper">

	      	<div class="site-wrapper-inner">

	        	<div class="cover-container">

	          		<div class="masthead clearfix">
	            		<div class="inner">
	              			<h3 class="masthead-brand">Resume</h3>
	              			<nav>
				                <ul class="nav masthead-nav">
				                  <li><a href="/index.html">Home</a></li>
				                  <li><a href="/projects.html">Projects</a></li>
				                  <li class="active"><a href="/contact-php.html">Contact</a></li>
				                </ul>
	              			</nav>
	            		</div>
	          		</div>

			        <div class="inner cover">
			            
			        </div>
						<form class="cover-heading form-signin">
							<h2 class="form-signin-heading">Contact me</h2>
							<label for="inputEmail" class="sr-only"></label>
							<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
							<label for="extra-margin" class="sr-only"></label>
							<input id="extra-margin" class="form-control" placeholder="Subject" required>
							<textarea class="form-control" id="extra-margin" placeholder="Compose Message" required></textarea>
							
						</form>
						<div class="form-signin">
								<a href="mailto:jnhernandez2.0@gmail.com"><button class="btn btn-lg btn-primary btn-block" type="submit">Send</button></a>
							</div>
	          		<div class="mastfoot">
		            	<div class="inner">
		              		<div class="row">
			            		<div class="col-md-6">
			            			<div class="contact-icons">
			            				<a href="https://github.com/Jnhernandez2/Codeup-Web-Exercises/tree/master/public"><img id="github-logo" src="/img/github-logo.png"></a>
			            			</div>
			            		</div>
			            		<div class="col-md-6">
			            			<div class="contact-icons">
			            				<a href="https://www.linkedin.com/in/john-hernandez-433aa4123"><img id="linkedin-logo" src="/img/linkedin-logo.png"></a>
			            			</div>
			            		</div>
			            	</div>
		            	</div>
		          	</div>

	        	</div>

	      	</div>

	    </div>











		  

				

				  

				


		<script src="../../assets/js/ie-emulation-modes-warning.js"></script>
		<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
		
	</body>
</html>
