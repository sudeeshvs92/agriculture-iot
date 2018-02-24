

<?php
	include 'Config.php';
	header('Content-type:application/json');
	$user = "";
        $pwd = "";
        $uid=0;
        $s1=-1;
        $s2=-1;
        $s3=-1;
		$s4=-1;
	$valueset = 0;
	$spassword="";
        $count=0;
		$data=array();
		 $row_array=array();
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
		$result = $con->query("select Password,userid from Security where api = '". $id ."';");
		$row = $result->fetch_array();
		$count=$result->num_rows;
		if($count>0)
		{			
			$spassword=$row["Password"];
			$uid=$row["userid"];
			if (md5($spassword) == $pwd)
			{
				$result = $con->query("SELECT Updatedatetime,Sensor1,Sensor2,Sensor3,Sensor3 FROM Sensorsvalue WHERE userid = '". $uid ."' ");
				while($row = $result->fetch_assoc())
				{
					$row_array['Updatedatetime'] = $row['Updatedatetime'];
                    $row_array['Sensor1'] = $row['Sensor1'];
                    $row_array['Sensor2'] = $row['Sensor2'];
					$row_array['Sensor3'] = $row['Sensor3'];
					$row_array['Sensor4'] = $row['Sensor4'];
                    array_push($data,$row_array);
				}
				$data=json_encode($data);
				$message=$data;
			
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
