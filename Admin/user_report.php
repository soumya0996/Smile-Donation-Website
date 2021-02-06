
 <?php include("admin_navbar.php");
 include("../check_connection.php")
 ?>
<?php
if(isset($_POST['go']))
{
    $valueToSearch = $_POST['search'];
    // search in all table columns
    // using concat mysql function
    $query =mysqli_query($conn,"SELECT * FROM 'registered users' WHERE CONCAT(id,name,mob,email,city,dob) LIKE '%".$valueToSearch."%'");
  
}
 else {
    $query = mysqli_query($conn,"SELECT * FROM 'registered users'");
}
?>

<div style="width:90%; margin:5px auto;  border:solid 1px #666; background: white; ">
    <div style="line-height:50px; text-indent:18px;color:white; font-size:14px;font-family:arial;background: #7d7d7d;font-weight:bold; ">USER REPORT<a href="admin_home.php" style="float:right; margin-right: 15px;font-weight:bold; color:white; text-decoration: none;">BACK</a>
    </div>
<div style="width:98%; margin:7px auto; padding:4px; background: white;">
	<div style="width:100%;">
		<div style="text-indent:10px; background:white; margin-left: -10px;margin-bottom: 3px;">
    <form class="example" action="user_report.php" method="post">
      <input type="text" placeholder="Search by anyname" name="search" >
      <button name="go">go</button>
    </form>
  </div>
	   	 <table style ="width:100%;" border="1">
			<tr style="background: #7d7d7d; color:white;">
			  	<th>USER ID</th>
			  	<th>NAME</th>
			  	<th>EMAIL</th>
			  	<th>PASSWORD</th>
			  	<th>ACTION</th>
			  </tr>
			  		<?php 
			  		 $count=1;
			  		while($row = mysqli_fetch_assoc($query))
			  		
				          { ?>
				            <tr>
				               
				                <td><?= $row['id']?></td>						
							  	<td style="text-transform: uppercase;"><?= $row['username']?></td>
							  	<td><?= $row['email']?></td>
							  	<td><?= $row['password']?></td>				
							  	<td ><a  href="user_report.php?id=<?php echo $row["id"]?>" style="text-decoration:none;">
							  		EDIT</button></a>||
							  		<a  href="user_report.php?id=<?php echo $row["id"]?>" style="text-decoration:none;">
							  		DELETE</a>
							  	</td>
				                   
				                   
				                  </tr>
				          <?php $count++;  } ?>
							
		  	</table>
		  	</div>
	</div>
</div>
<?php include("../footer.php");?>
</body>
</html>