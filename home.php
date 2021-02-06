<?php 
    session_start();
?>

<!doctype html>
<html>

    <head>

        <title>"Smile"</title>

        <!-- add icon link -->
        <link rel = "icon" href = "images\happy_logo.ico" type = "image/x-icon">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link rel="stylesheet" href="style.css">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link href="./css/font-awesome.min.css" rel="stylesheet">
        <link href="./css/style.css" rel="stylesheet"> -->

    </head>
    
    <body>
    
    
    <?php include 'home_navbar.php';?>
    <?php include 'home_imageSlider.php';?>


        <div class="w3-container w3-padding-64 w3-theme-l5" id="connect">
    <section class="my-1">
        <div class="py-2">
  		    <h1 class="text-center" style="font-family:  Arial, Helvetica, sans-serif; color: #04868E; padding: 10 px;">Login to your Account to Donate/Receive</h1>
  	    </div>

  	    <div class="container-fluid">
  		    <div class="row">
  			    <div class="col-lg-6 col-md-6 col-sm-12">
  				    <div class="card">
  				        <div class="py-5">
                      		<h2 class="text-center">Sign Up</h2>
  	                    </div>
  	                    <div class="w-50 m-auto">
  			                <form action="userinfo.php" method="post">
  				                <div class="form-group">
  					                <label class="text">Username</label>
  					                <input type="text" name="user" autocomplete="off" class="form-control" required="">
  			        	        </div>
  	                			<div class="form-group">
  				            	    <label class="text">Email</label>
  				                	<input type="text" name="email" autocomplete="off" class="form-control" required="">
	  			                </div>
  				                <div class="form-group">
  					                <label class="text">Password</label>
            	     				<input type="password" name="password" autocomplete="off" class="form-control" 	required="">
  			    	            </div>
				    	    	<div class="card-body">
    			        		    <center><button type="submit" class="btn btn-success">Register</center></button>
  					        	</div>
  			                </form>
  	    	            </div> 	
					</div>
	            </div>

  		        <div class="col-lg-6 col-md-6 col-sm-12">
  					<div class="card">
  						<div class="py-5">
                	  		<h2 class="text-center">Login</h2>
  	                	</div>
	  	                <div class="w-50 m-auto">
  			                <form action="validation.php" method="post">
  				                <div class="form-group">
  					                <label class="text">Username</label>
  					                <input type="text" name="user" autocomplete="off" class="form-control" required="">
  	                			</div>
								<div class="form-group">
  				            	    <label class="text">Password</label>
  	                				<input name="password" autocomplete="off" class="form-control" type="password" required=""> 
	  			                </div>
								<!-- <div class="form-group">
									<lable>Login As</lable><br>
									<select name="donation" style="width: 100%;">
										<option value="Select">Select</option>
										<option value="Donor">Donor</option>
										<option value="Receiver">Receiver</option>
									</select>  
								</div> -->
  	                			
  			                	<div class="card-body">
        	                        <center><button type="submit" class="btn btn-primary">Login</button></center>  	
            	                </div> 

  		        	        </form>
  	                	</div> 
	  				</div>
  				</div>
  	    	</div>
	    </div>
	</section>
</div>
<!-- 
    
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
                            <center><a  href="sign-up_and_sign-in.php" class="btn btn-primary">DONATE</a></center>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images\Monk_donating_happiness.jpeg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Want to Collect?</h4>
                            <p class="card-text">For Distributor NGOs forwarding it to the needy</p>
                            <center><a href="sign-up_and_sign-in.php" class="btn btn-primary">COLLECT</a>  </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <?php include 'footer.php';?>

    <script>
    // Script for side navigation
        function w3_open() {
        var x = document.getElementById("mySidebar");
        x.style.width = "300px";
        x.style.paddingTop = "10%";
        x.style.display = "block";
        }

    // Close side navigation
        function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        }

    // Used to toggle the menu on smaller screens when clicking on the menu button
        function openNav() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
    </script>

<!-- Scripts -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>