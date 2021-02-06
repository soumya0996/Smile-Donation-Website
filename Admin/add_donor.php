<?php

    session_start();
    include_once("../class/utility.php");
    $hg = new Hunger;

if(isset($_POST['name']))
{
    $err=false;
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $items = $_POST['details'];
    $add = $_POST['addrress'];

    $re = $hg->donate_food($name,$contact,$items,$add);
}

else
{
    $err=true;
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Add Donor Details</title>
  
        <!-- add icon link -->
        <link rel = "icon" href = "happy_logo.ico" type = "image/x-icon">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Flamenco&display=swap" rel="stylesheet">
<script type="cities.js"></script>
</head>
<body>


<div class="col-lg-12 col-md-4 col-sm-12">
          <div class="card">
            <div class="py-5">
      <h2 class="text-center">Add Donor Details</h2>
    </div>
    <div class="w-50 m-auto">
      <form action="add_donor.php" method="post">
        <div class="form-group">
          <label class="text">Name</label>
          <input type="text" name="name" autocomplete="on" class="form-control" placeholder="Eg. Soumya" required="">
        </div>
        
        <div class="form-group">
          <label class="text">Contact Number</label>
          <input type="text" name="contact" autocomplete="on" class="form-control" required="">
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
            <select name="ngo" style="width: 100%;" required="">
						  <option value="Select">Select</option>
						  <option value="donation_ngo">Food Donation NGO</option>
					    <option value="donation_ngo">Cloth Donation NGO</option>
					    <option value="donation_ngo">Stationery Donation NGO</option>
				  	</select>
        </div>
        <div class="form-group">
          <label class="text">Item Details</label>
          <input type="text" name="details" autocomplete="on" class="form-control" required="">
        </div>
        <div class="form-group">
          <label class="text">Address</label>
          <input type="text" name="addrress" autocomplete="on" class="form-control" required="">
        </div>
        <div class="form-group">
          <lable>Select City</lable>
            <br>
            <select name="city" style="width: 100%;" required="">
						  <option value="Select">Select</option>
						  <option value="city">Indore</option>
				  	</select>
        </div>

        <div class="card-body">
            <center>  <button type="submit" class="btn btn-primary">SUBMIT</button> </center>

        </div> 

      </form>
      <?php 

    if(isset($re))
    {
        if($re)
        {
        ?>	
                <?php
                echo "<script> alert('Donor details updated successfully..');  </script>";
            } 
        else
        {
            echo "<h2 class='text-danger'>  Some Error Occured. </h2>";
            echo "<a href='donor_details.php' class='btn btn-danger'> TRY AGAIN </a>";       
        }
    }    
?>
    </div> 
            
        </div>
        </div>


</body>
</html>

