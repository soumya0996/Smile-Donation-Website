<?php

	session_start();
	
?>

<!DOCTYPE html>

<html>

<head>

	<title>Donate Here</title>
		<!-- add icon link -->
	
	<link rel = "icon" href = "images\happy_logo.ico" type = "image/x-icon">
		
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="style.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Flamenco&display=swap" rel="stylesheet">

</head>

<body>

<?php include 'menu.php' ?>


	<div class="container">
    	<div class="row">
      		<div class="col-sm-10">
          		<h2 class="text-left text-success">Welcome, <?php echo $_SESSION["username"]; ?></h2>
      		</div>
       		<div class="col-sm-2">
            	<a href = "home.php" class="btn btn-danger"> LOGOUT </a>
      		</div>
    	</div>
	</div>


<!-- Close of Containter -->

<section class="my-5">
  	<div class="py-3">
  		<h1 class="text-center" style="font-family:  Arial, Helvetica, sans-serif; color: #04868E;">Our Services</h1>
  	</div>

  	<div class="container-fluid">
  		<div class="row">
  			<div class="col-lg-6 col-md-5 col-12">
  				<div class="card">
  					<img class="card-img-top" src="images\charity.jpg" alt="Card image">
  					<div class="card-body">
    					<h4 class="card-title">Want to Donate?</h4>
    					<p class="card-text">For Everyone who want to Help the One in Need</p>
                		<center><a  href="donor_details.php" class="btn btn-primary">DONATE</a></center>
    				</div>
				</div>
  			</div>
  			<div class="col-lg-6 col-md-5 col-12">
  				<div class="card">
  					<img class="card-img-top" src="images\Monk_donating_happiness.jpeg" alt="Card image">
  					<div class="card-body">
    					<h4 class="card-title">Want to Collect?</h4>
    					<p class="card-text">For Distributor NGOs forwarding it to the needy</p>
    					<center><a href="search_food.php" class="btn btn-primary">COLLECT</a>  </center>
  					</div>
				</div>
  			</div>
  		</div>
  	</div>
</section>

<footer>
 	<p class="p-3 bg-dark text-white text-center">
 		@SmileProduction
 	</p>
</footer>

</body>
</html>