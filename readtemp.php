<?php


include 'Config.php';
session_start();
function secs2date($secs,$date)
    {
    if ($secs>2147472000)    //2038-01-19 expire dt
        {
        $date->setTimestamp(2147472000);
        $s=$secs-2147472000;
        $date->add(new DateInterval('PT'.$s.'S'));
        }
    else
        $date->setTimestamp($secs);
    }
 $count=0;
 $data=[];
$date=new dateTime();
		$data=array();
		 $row_array=array();
if(isset($_SESSION['user']))
{
$uid=$_SESSION['user'];
$result =mysqli_query($con,"SELECT sensor3,max(Updatedatetime) FROM Sensorsvalue WHERE userid = '". $uid ."'   ");
				$last =mysqli_fetch_assoc($result);
			
				
                 $D=$last=$last['max(Updatedatetime)'];
				 
				 $last=strtotime($last);
				 
				 secs2date($last,$date);
				$dt=$date->format('Y-m-d H:i:s');
                 $last=$last-(1200);
				 $secs=2017472000;  
				secs2date($last,$date);
				$dt1=$date->format('Y-m-d H:i:s');
				

	
	$date=new dateTime();
	
	$result =mysqli_query($con,"SELECT Sensor3,Updatedatetime FROM Sensorsvalue WHERE userid = '". $uid ."' and Updatedatetime BETWEEN '". $dt1 ."' and '". $dt ."'  ");
				while($row =mysqli_fetch_assoc($result))
				{
					$data["label"]="<h5>".$row['Sensor3']."°C || Last update: ".$D."</h5>";
					secs2date(strtotime($row['Updatedatetime']),$date);
				    $ud=$date->format('H:i:s');
					$row_array[]=[strtotime($ud),(int)$row['Sensor3']];
					
                    $data["data"]=$row_array;
				}
				
				
				echo json_encode($data);
				
}
else
{
	echo "no data";
}
				?>