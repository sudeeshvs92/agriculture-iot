
<?php
	include 'Config.php';
   global $remoteip;
   global $remoteport;
	$sensor1 = "0";
	$sensor2 = "0";
	$sensor3 = "0";
	$sensor4 = "0";
	$user = "";
        $pwd = "";
        $uid=0;
	$valueset = 0;
	$spassword="";
        $count=0;
		if(isset($_SERVER['REMOTE_ADDR']))
		{
	$GLOBAL["remoteip"]=$_SERVER['REMOTE_ADDR'];
	$GLOBAL["remoteport"]=$_SERVER['REMOTE_PORT'];
	
        }

if ($_SERVER["REQUEST_METHOD"] == "GET" ) {
	if(isset($_GET["api"]))
	{
		$id = $_GET["api"];
		$valueset++;
	}
	else
	{
		$user = "";
	}

	if(isset($_GET["pwd"]))
	{
		$pwd = $_GET["pwd"];
		$valueset++;
	}
	else
	{
		$pwd = "";
	}

	if(isset($_GET["s1"]))
	{
		$sensor1 = $_GET["s1"];
		$valueset++;
	}
	else
	{
		$sensor1 = 0;
	}

	if(isset($_GET["s2"]))
	{
		$sensor2 = $_GET["s2"];
		$valueset++;
	}
	else
	{
		$sensor2 = 0;
	}

	if(isset($_GET["s3"]))
	{
		$sensor3 = $_GET["s3"];
		$valueset++;
	}
	else
	{
		$sensor3 = 0;
	}
	if(isset($_GET["s4"]))
	{
		$sensor4 = $_GET["s4"];
		$valueset++;
	}
	else
	{
		$sensor4 = 0;
	}
       if($valueset == 6)
	{
		$result = $con->query("select Password,userid,mdpass from Security where api= '". $id ."';");
		$row = $result->fetch_assoc();
		$count=$result->num_rows;
		if($count>0)
		{			
			$spassword=$row["Password"];
			$uid=$row["userid"];
			$mdpass=$row["mdpass"];
			if ($mdpass == $pwd)
			{
				$sql = "insert into Sensorsvalue (Sensor1,Sensor2,Sensor3,Sensor4,userid) values('$sensor1','$sensor2','$sensor3','$sensor4','$uid');";
				if (!mysqli_query($con,$sql))
	  			{
					die('Error: ' . mysqli_error($con));
					
					echo "ierror\r";
	  			}					
				else
				{
					echo ">\r";
				}	
			}
			else
			{
				echo "perror\r";
			}
		}
		else
		{
			echo "usf\r";
		}
	}
	else
	{
		echo "verror\r";
	}
}
?>

