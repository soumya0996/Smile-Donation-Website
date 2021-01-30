<?php 

class Hunger
{
	public function connect()
	{
	$host = "localhost";
	$db_user ="root";
	$pass = "";
	$db_name = "smiles";

	$con = mysqli_connect($host,$db_user,$pass,$db_name);
		if($con)
			return $con;
	}

    public function  search_food_byCity($city)
    {
        $query = "select * from  `donor` where address like '%$city%' AND status = 'new'";

    	$run = mysqli_query($this->connect(),$query);

	    	if(mysqli_num_rows($run) > 0)
	    		return $run;
	    	else
	    		return false;
    }

    public function  get_donorDetails($id)
    {
    	$query = "select * from  donor where id='$id' AND status = 'new'";
    	$run = mysqli_query($this->connect(),$query);

	    	if(mysqli_num_rows($run)>=1)
	    		return $run;
	    	else
	    		return false;
    }

    public function food_ordered($user,$rec_name,$contact,$add,$food_id,$order_id,$time)
    {

    	$q = "UPDATE donor set status = 'pending' where id= '$food_id'";
    	$r = mysqli_query($this->connect(),$q);
   		
    	if($r)
    	{
    		$query = "INSERT into rec(user,rec_name,contact,address,food_id,order_id,status,prefer_time) values('$user','$rec_name','$contact','$add','$food_id','$order_id','pending','$time')";
			$run = mysqli_query($this->connect(),$query);
			
    		if($run)
    			return true;
    		else
    			return false;
    	}
    	else
    		return false;
    }

    public function donate_food($name,$contact,$items,$add)
    {

        $d = date('d/m/Y');
    	$qy = "insert into donor(name, contact, items, address, status, date) values ('$name', '$contact', '$items','$add','new','$d')";
		$run = mysqli_query($this->connect(),$qy);
		
        if($run)
            return true;
        else
            return false;
    }
}	//close of class function

?>