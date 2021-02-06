<?php 

	session_start();

		include_once("class/utility.php");
  		$hg = new Hunger;

  if(isset($_POST['food_id']))
  {

  	$err=false;
   	$rec_name = $_POST['name'];
	$contact = $_POST['contact'];
	$add = $_POST['addrress'];
	$time = $_POST['time'];
	$food_id = $_POST['food_id'];
  	$order = uniqid();
  	$user = $_SESSION['name']; 
  	$re = $hg->food_ordered($user,$rec_name,$contact,$add,$food_id,$order,$time);

  }

  else
  {
  	$err=true;
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Thank You for Receiving</title>
        
		<!-- add icon link -->
        <link rel = "icon" href = "images\happy_logo.ico" type = "image/x-icon">

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Flamenco&display=swap" rel="stylesheet">
</head>
<body>
	<?php  include 'menu.php'; ?>

	<div class="text-center" class="col-lg-4 col-md-4 col-12">
  	<div class="card">
		<div class="py-5">
			<h2 class="text-centre text-primary">Item Received</h2></div>
				<div class="w-50 m-auto">

				<?php 
		if($err)
		{
				echo "<h2 class='text-danger'>  Some Error Occured. </h2>";
				echo "<a href='search_food.php' class='btn btn-danger'> GO BACK </a>";
		}
		
		if(isset($re))
		{
			if($re)
			{
			?>	
				<div class="row">		
					<div class="col-sm-12">
						<div class="card text-white bg-success">
				  			<div class="card-header"> <h3> Order Details </h3>  </div>
				  				<div class="card-body">
				    				<h4 class="card-title"  > <span style="color:black; font-family: verdana;" >  
									<?php echo "ORDER ID : ".$order;  ?> </span></h4>
				    				<h5 class="card-text">
										<?php  
											echo "Receiver Name : ". $rec_name;   echo "<br>";  echo "<br>";
											echo "Mobile No. : ". $contact;   echo "<br>";  echo "<br>";
											echo "Preferebale Time: ". $time;   echo "<br>";  echo "<br>";
											echo "Address to Deliver : ".$add;  echo "<br>";  echo "<br>";	 
										?>
								    </h5>
				  				</div>
				  				<div class="card-footer">
								  	<a href='login.php' class="btn btn-danger"> GO BACK </a>
							  	</div>
							</div>
						</div>
						<?php 
						} 
							else
							{
								echo "<h2 class='text-danger'>  Some Error Occured. </h2>";
								echo "<a href='search_food.php' class='btn btn-danger'> TRY AGAIN </a>";
							}
						}
						?>
					</div>
				</div>
			</div>

</body>
</html>