<?php 

    session_start();

?>

<!DOCTYPE html>

<html>
    <head>
        <title>"Smile"</title>

        <!-- add icon link -->
        <link rel = "icon" href = "happy_logo.ico" type = "image/x-icon">
    </head>
    <body>
                <!-- <div class="col-lg-6 col-md-6 col-sm-12">
  					<div class="card">
  						<div class="py-20">
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
                  </div> -->
                  
                <div style="width:25%; margin:150px auto;  border:solid 1px #666; background: white; ">
                    <div style="line-height:50px; text-indent:18px;color:white; font-size:14px;font-family:arial;   background:#cc0000;font-weight:bold; ">LOGIN &nbsp;TO&nbsp; YOUR&nbsp; ACCOUNT</div>
                    <form method="post" action="">
                        <table>
                            <tr>
                                <td>USER NAME</td>
                                <td></td>
                                <td><input type="text" name="username" required=""></td>
                            </tr>
                            <tr>
                                <td>PASSWORD</td>
                                <td></td>
                                <td><input type="password" name="password" required=""></td>
                            </tr>
                            <tr><td></td>
                                <td></td>
                                <td><button name="login">submit</button></td>
                                
                            </tr>
                        </table>
                    </form>
                </div>

                <?php
                    if(isset($_POST['login']))
                    {
                        $name=$_POST['username'];
                        $pass=$_POST['password'];
                        

                        $sql_u = "SELECT username FROM login WHERE username='$name'";
                        $res_u = mysqli_query($db,$sql_u);

                        $row = mysqli_fetch_array($res_u);
                        
                                $uid=$row['uname'];
                                $up=$row['pass'];
                                //$_SESSION["user_name"] = $row['user_name'];
                        
                            

                            if($name=="admin" && $pass=="admin")
                            {
                                $_SESSION["uname"] = $row['uname'];
                                header('Location:admin_home.php' );
                            }
                            elseif($name==$uid && $pass==$up)
                            {
                                $_SESSION["uname"] = $row['uname'];
                                header('Location:adminlogin.php' );
                            }
                            else
                            { 
                                ?>
                                <script type="text/javascript"> 
                                    alert("your id and password is invalid"); 
                                </script>

                                <?php
                            }
                            
                    }
                ?>
    </body>
</html>