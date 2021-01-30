<?php

session_start();
include_once("class/utility.php");
$hg = new Hunger;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Reciever's Details</title>
        <!-- add icon link -->
        <link rel = "icon" href = "images\happy_logo.ico" type = "image/x-icon">

	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Flamenco&display=swap" rel="stylesheet">
</head>
<body>


<?php include 'menu.php';  ?>


    <br>

            <?php 

                 if(isset($_GET['food_id']))
        {
            echo " <center> ";

            if($result= $hg->get_donorDetails($_GET['food_id']))
              {
                  echo "<hr>";
                    while($data=mysqli_fetch_assoc($result))
                    {
                      ?>
                             
                            
                      <div class="container">
                     
                      <div class="card  text-white bg-secondary  text-center">
                                <div class="card-header primary">
                                <h2 class=''> Selected Item  </h2> 
                                </div>
                                <div class="card-body">
                                <h3 class="card-title">Donation Details</h3>

                                  <h4>   Donor Details:   <?php echo $data["name"] ."(  ".$data["contact"]." )";  ?>    </h4>
                                    <br>  
                                  <h3 class="card-title">Donated Item Details</h3 >
                                  
                                  <p class="card-text"><?php echo $data["items"] ; ?></p>
                               
                                </div>
                                <div class="card-footer">
                                  Added on  <?php  echo $data["date"];  ?>
                                </div>
                              </div>
                    </div>
                      <br>
                            
                                         


                    <?php
                    }
              } 

             else
              {

                  echo " <center> <h2 class='text-danger'> Sorry , No Donated Item found in your City.</h2> </center>";


              } 
        }



            ?>


			<div class="  col-lg-6 col-md-4 col-sm-12">
  				<div class="card text-white bg-info">
  					<div class="py-5">
  		<h2 class="text-center">Fill Up Your Details to Recieve Donation</h2>
  	</div>
  	<div class="w-50 m-auto">
  		<form action="thankyou_receiver.php" method="post">
        <input type="number" value="<?php echo $_GET['food_id']; ?>" name="food_id" hidden>
  			<div class="form-group">
  				<label class="text">Name</label>
  				<input type="text" name="name" placeholder="Eg. Soumya Verma" autocomplete="on" class="form-control">
  			</div>
  			
  			<div class="form-group">
  				<label class="text">Contact</label>
  				<input type="number"  name="contact" placeholder="Eg. 1234567890" autocomplete="on" class="form-control" required="">
  			</div>

  			<div class="form-group">
  				<label class="text">Preferable Time to Deliver</label>
  				<input type="text" name="time" placeholder="Eg 8PM , 9AM etc" autocomplete="on" class="form-control">

  			</div>


  			<div class="form-group">
  				<label class="text">Full Address</label>
  				<input type="text" name="addrress" placeholder="Eg Indore" autocomplete="on" class="form-control">
  			</div>

  			<div class="card-body">
    					<button type="submit" class="btn btn-primary">RECEIVE DONATION</button>   
              <a href="search_food.php" class="btn btn-danger"> CANCLE </a>

  			</div> 

  		</form>
  	</div> 
  					
				</div>
  			</div>

        <br>   <br>  


</body>
</html>
