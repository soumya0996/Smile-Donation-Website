
<!-- 
<!DOCTYPE html>
<html>
<head>
	<title>Register/Login</title> -->
        <!-- add icon link -->
        <!-- <link rel = "icon" href = "images\happy_logo.ico" type = "image/x-icon">
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Flamenco&display=swap" rel="stylesheet">   

</head>
<body> -->

<!-- <section class="my-5">
        <div class="py-1">
  		    <h1 class="text-center" style="font-family:  Arial, Helvetica, sans-serif;">Take An Initiative</h1>
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
  				                <input type="text" name="user" autocomplete="off" class="form-control" required>
  			                </div>
  	                		<div class="form-group">
  				                <label class="text">Email</label>
  				                <input type="text" name="email" autocomplete="off" class="form-control" required>
  			                </div>
  			                <div class="form-group">
  				                <label class="text">Password</label>
                 				<input type="password" name="password" autocomplete="off" class="form-control" required>
  			                </div> -->
                            <!-- <div class="form-group">
  			                	<label class="text">Contact Number (Format: 12345-67890)</label>
  				                <input type="password" name="password" autocomplete="off" class="form-control" required pattern="[0-9]{5}-[0-9]{5}">
                  			</div>   -->
				        	<!-- <div class="card-body">
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
  				                <input type="text" name="user" autocomplete="off" class="form-control" required>
  	                		</div>
    
  	                		<div class="form-group">
  				                <label class="text">Password</label>
  	                			<input name="password" autocomplete="off" class="form-control" type="password" required> 
  			                </div>

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


<footer>
 	<p class="p-3 bg-dark text-white text-center">@SmilesProduction</p>
</footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html> -->


<!-- Sign-Up and Login Container -->


<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml"> 

	<head runat="server">

	    <title>Donate Here</title>

		<script type='text/javascript'>
    		$(document).ready(function () {

        	$("sign-up_and_sign-in.php").on("click", function (e) {

					alert("User Registered");
					document.write('User Registered!');

				});

			});

		</script>

        <!-- add icon link -->
        <link rel = "icon" href = "images\happy_logo.ico" type = "image/x-icon">


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- <link rel="stylesheet" href="style.css"> -->

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

	<body>

<div class="w3-container w3-padding-64 w3-theme-l5" id="connect">
    <section class="my-1">
        <div class="py-2">
  		    <h1 class="text-center" style="font-family:  Arial, Helvetica, sans-serif; color: #04868E; padding: 10 px;">Take An Initiative</h1>
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

</body>

</html>