<!-- <!DOCTYPE html>
<html>
<head>
  <title>Donating Items</title> -->
  
        <!-- add icon link -->
        <!-- <link rel = "icon" href = "images\happy_logo.ico" type = "image/x-icon">
        
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Flamenco&display=swap" rel="stylesheet"> -->
<!-- <script type="cities.js"></script> -->
<!-- </head>
<body>
      
    // include "menu.php";
    

    <div class="col-lg-12 col-md-4 col-sm-12">
        <div class="card">
            <div class="py-5">
                <h2 class="text-center">Fill Up Your Details</h2>
            </div>
            <div class="w-50 m-auto">
                <form action="thankyou_donor.php" method="post">

                    <div class="form-group">
                        <label class="text">Name</label>
                        <input type="text" name="name" autocomplete="off" class="form-control" placeholder="Eg: Soumya" required>
                    </div>

                    <div class="form-group">
                        <label class="text">Contact Number</label>
                        <input type="text" name="contact" class="form-control" required pattern="[0-9]{5}-[0-9]{5}" autocomplete="off" placeholder="Format: 12345-67890">
                    </div>

                    <div class="form-group">
                        <lable>Donation Type</lable>
                        <br>
                        <select name="donation" style="width: 100%;">
						    <option value="Select">Select</option>
						    <option value="Donation">Food Donation</option>
						    <option value="Donation">Cloth Donation</option>
						    <option value="Donation">Stationery Donation</option>
						</select>  
                    </div>
                    <div class="form-group">
                        <label class="text">Product Details</label>
                        <input type="text" name="details" autocomplete="off" class="form-control">
                    </div>

                    <div class="form-group">
                        <label class="text">Address</label>
                        <input type="text" name="addrress" autocomplete="off" class="form-control">
                    </div>

                    <div class="card-body">
                        <center><button type="submit" class="btn btn-primary">DONATE</button></center>
                    </div> 

                </form>
            </div>    
        </div>
    </div>

</body>
</html> -->

<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Donor Details</title>
  
        <!-- add icon link -->
        <link rel = "icon" href = "images\happy_logo.ico" type = "image/x-icon">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Flamenco&display=swap" rel="stylesheet">
<script type="cities.js"></script>
</head>
<body>

<?php  include "menu.php" ?>

<!-- <img src="images\humanitarian-assistance-during-pandemic-box-with-essentials-pasta-cereals-fruits_231056-520.jpg"> -->

<div class="col-lg-12 col-md-4 col-sm-12">
          <div class="card">
            <div class="py-5">
      <h2 class="text-center">Fill Up Your Details</h2>
    </div>
    <div class="w-50 m-auto">
      <form action="thankyou_donor.php" method="post">
        <div class="form-group">
          <label class="text">Name</label>
          <input type="text" name="name" autocomplete="on" class="form-control" placeholder="Eg. Soumya" required>
        </div>
        
        <div class="form-group">
          <label class="text">Contact Number</label>
          <input type="text" name="contact" autocomplete="on" class="form-control">
        </div>
        <div class="form-group">
          <lable>Donation Type</lable>
            <br>
            <select name="donation" style="width: 100%;">
						  <option value="Select">Select</option>
						  <option value="Donation">Food Donation</option>
					    <option value="Donation">Cloth Donation</option>
					    <option value="Donation">Stationery Donation</option>
				  	</select>  
        </div>
        <div class="form-group">
          <lable>Select NGO</lable>
            <br>
            <select name="ngo" style="width: 100%;">
						  <option value="Select">Select</option>
						  <option value="donation_ngo">Food Donation NGO</option>
					    <option value="donation_ngo">Cloth Donation NGO</option>
					    <option value="donation_ngo">Stationery Donation NGO</option>
				  	</select>
        </div>
        <div class="form-group">
          <label class="text">Item Details</label>
          <input type="text" name="details" autocomplete="on" class="form-control">
        </div>
        <div class="form-group">
          <label class="text">Address</label>
          <input type="text" name="addrress" autocomplete="on" class="form-control">
        </div>
        <div class="form-group">
          <lable>Select City</lable>
            <br>
            <select name="city" style="width: 100%;">
						  <option value="Select">Select</option>
						  <option value="city">Indore</option>
				  	</select>
        </div>

        <div class="card-body">
            <center>  <button type="submit" class="btn btn-primary">DONATE</button> </center>

        </div> 

      </form>
    </div> 
            
        </div>
        </div>


</body>
</html>

