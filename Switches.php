<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sensors</title>                        
<meta http-equiv="pragma" content="no-cache" />
<?php
	include 'Config.php';

	$switch = "0";
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

	if(isset($_GET["switch"]))
	{
		$switch = $_GET["switch"];
		$valueset++;
	}
	else
	{
		$switch=0;
	}
       if($valueset == 3)
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
				$result = $con->query("select * from Switchstatus where userid = '". $uid ."';");
				$row = $result->fetch_assoc();
				$count=$result->num_rows;
					if($count==0)
					{
				$sql = "insert into Switchstatus (Currentstatus,userid) values('$switch','$uid');";
					}
					else
					{
				$sql = "Update Switchstatus set Currentstatus=$switch,lupdatetime=CURRENT_TIMESTAMP where userid = '$uid';";
					}
				if (!mysqli_query($con,$sql))
	  			{
					die('Error: ' . mysqli_error());
					$mainerror = "Error In addition";
					$message="Insert error";
	  			}					
				else
				{
					$message="Save sucessfull";
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

</head>
<body>
	<?php	
//	echo ($spassword);		
//	echo ("<br>");
//	echo (md5($spassword));		
//	echo ("<br>");
//	echo ("$sensor1");
//	echo ("<br>");
//	echo ("$sensor2");
//	echo ("<br>");
//	echo ("$sensor3");
//	echo ("<br>");
	echo ("$message");
	?>
</body>
</html>