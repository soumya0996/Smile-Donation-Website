<?php

	session_start();
  include_once("class/utility.php");
	$hg = new Hunger;
?>


<!DOCTYPE html>
<html>
<head>
	<title>Search For Donations</title>
  
        <!-- add icon link -->
        <link rel = "icon" href = "images\happy_logo.ico" type = "image/x-icon">
        
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Flamenco&display=swap" rel="stylesheet">



</head>
<body>

	<?php include 'menu.php' ?>

  <br>
	<div class="container">
    <div class="row">
      <div class="col-sm-10">
          <h2 class="text-center text-success"> Welcome <?php echo $_SESSION['username']; ?>  </h2>
      </div>
       <div class="col-sm-2">
            <a href = "logout.php" class="btn btn-danger"> LOGOUT </a>
      </div>
    </div>
	</div> 
  <!-- Close of Containter -->

    <div class="container" >
      
        <div class="row">
              
            <div class="col-sm-6 " >
              <center> 
               <form method="get"  style="padding-top:17px;">
                    <div class="input-group">
                            <input type="text" class="form-control input-md" size="10" style="color:black;" placeholder="Enter location" name="search" id="search" required>
                              &nbsp;  &nbsp;
                              <div class="input-group-btn">
                                    <button type="submit" class="btn btn-info btn-md ">Search</button>
                              </div>
                    </div>
              </form>   
              </center>         
            </div>
        </div>
    </div>

  <br>
   
    <hr>
    



    <?php 

      
            
        if(isset($_GET['search']))
        {
            echo " <center> <h2 class='text-primary'> Donated Item List </h2> </center>";

            if($result= $hg->search_food_byCity($_GET['search']))
              {
                  echo "<hr>";
                    while($data=mysqli_fetch_assoc($result))
                    {
                      ?>
                             
                                        
                      <div class="container">
                     
                      <div class="card text-white bg-info text-center">
                                <div class="card-header">
                                 <h4>  Donor Details:   <?php echo $data["name"] ."(  ".$data["contact"]." )";  ?>  </h4>
                                </div>
                                <div class="card-body">
                                  <h5 class="card-title">Donated Item Details</h5>
                                  <p class="card-text"><?php echo $data["items"] ; ?></p>
                                  <a href="receiver.php?food_id=<?php echo $data['id'];  ?>" class="btn btn-primary">Receive Item</a>
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

                  echo " <center> <h2 class='text-danger'> Sorry , No Food found in your City.  </h2> </center>";


              } 
        }

    ?>


  <br>

  <footer>
 	<p class="p-3 bg-dark text-white text-right">
 		@SmilesProduction
 	</p>
 </footer>



</body>
</html>
