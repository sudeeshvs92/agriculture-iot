<?php
	include 'Config.php';

	$switch = -1;
	$user = "";
        $pwd = "";
        $uid=0;
	$valueset = 0;
	$spassword="";
        $count=0;
	$message="No values found";


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
       if($valueset == 2)
	{
		$result = $con->query("select Password,userid from Security where api= '". $id ."';");
		$row = $result->fetch_assoc();
		$count=$result->num_rows;
		if($count>0)
		{			
			$spassword=$row["Password"];
			$uid=$row["userid"];
			if (md5($spassword) == $pwd)
			{
				$result = $con->query("select Currentstatus from Switchstatus where userid = '". $uid ."';");
				$row = $result->fetch_assoc();
				$count=$result->num_rows;
					if($count>0)
					{
				        $switch=$row["Currentstatus"];
						echo ("Switch-". $switch ."Value");
					$message="sucessfull";
					}	
			}
			else
			{
				$message="Password error";
			}
		}
		else
		{
			$message="User name not found";
		}
	}
	else
	{
		$message="Values Error";
	}
}
?>
	<?php	

echo $message;
	?>