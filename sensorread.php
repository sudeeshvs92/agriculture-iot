<?php
include 'Config.php';
header('Content-type:application/json');
session_start();
if(isset($_SESSION['user']))
{
$uid=$_SESSION['user'];

 $sql1="SELECT * FROM Sensorsvalue WHERE userid = '". $uid ."' and Updatedatetime = (select min(Updatedatetime) from Sensorsvalue where userid = '". $uid ."')";
				 $result1 = mysqli_query($con,$sql1);
					if (!$result1) 
								{
							die('Invalid query: ' . mysqli_error($con));
								}
								else
								{
						  $row1=mysqli_fetch_assoc($result1);
					$firsttime=$row1["Updatedatetime"];
					
					
								}
 $sql="SELECT * FROM Sensorsvalue WHERE userid = '". $uid ."' and Updatedatetime = (select max(Updatedatetime) from Sensorsvalue where userid = '". $uid ."')";
				 $result = mysqli_query($con,$sql);
					if (!$result) 
								{
							die('Invalid query: ' . mysqli_error($con));
								}
								else
								{
						  $row=mysqli_fetch_assoc($result);
					$s1=$row["Sensor1"];
					$s3=$row["Sensor3"];
					$s4=$row["Sensor4"];
					if($s4>100)
					{
						$d=$s4-100;
						$s4=$s4-$d;
					}
					else if($s4<0)
					{
						$s4=0;
					}
					if($s1>100)
					{
						$d=$s1-100;
						$s1=$s1-$d;
					}
					else if($s1<0)
					{
						$s1=0;
					}
					$s2=$row["Sensor2"];
					if($s2>100)
					{
						$d=$s2-100;
						$s2=$s2-$d;
					}
					else if($s2<0)
					{
						$s2=0;
					}
					$lastupdate=$row["Updatedatetime"];
				                 }
                        $data=array("sensor1"=>$s1,"sensor2"=>$s2,"sensor3"=>$s3,"sensor4"=>$s4,"time"=>$lastupdate,"first"=>$firsttime);
                      echo(json_encode($data));						
}
?>								 