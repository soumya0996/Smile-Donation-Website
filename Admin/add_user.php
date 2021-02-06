<!-- Sign-Up and Login Container -->


<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml"> 

	<head runat="server">

	    <title>"Smile"</title>

		<script type='text/javascript'>
    		$(document).ready(function () {

        	$("add_user.php").on("click", function (e) {

					alert("User Registered");
					document.write('User Registered!');
				});

			});

		</script>

        <!-- add icon link -->
        <link rel = "icon" href = "happy_logo.ico" type = "image/x-icon">


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

	<body><center>

        <div class="w3-container w3-padding-64 w3-theme-l5" id="connect">
            <section class="my-1">
                <div class="py-2">
                    <h1 class="text-center" style="font-family:  Arial, Helvetica, sans-serif; color: #04868E; padding: 10 px;">Add User</h1>
                </div>

                    <div class="container-fluid">
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <div class="card">
                                <div class="py-5">
                                    <h2 class="text-center">Sign Up</h2>
                                </div>
                                <div class="w-50 m-auto">
                                    <form action="admin_userinfo.php" method="post">
                                        <div class="form-group">
                                            <label class="text">Username</label>
                                            <input type="text" name="name" autocomplete="off" class="form-control" required="">
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
                                            <center><button type="submit" class="btn btn-success">Register</center>
                                            </button>
                                        </div>
                                    </form>
                                </div> 	
                            </div>
                        </div>
                    </div>
            </section>
        </div>

    </body>

</html>
