<?php
session_unset(); 
session_start();
require  'Config.php';
include 'rand.php';
$count=0;
$message="";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(!empty($_POST['user']) && ! empty($_POST['pwd'])&& ! empty($_POST['pwd1'])&& ! empty($_POST['email']) )
	{
		if($_POST['pwd']==$_POST['pwd1'])
		{
			$username = stripslashes($_POST['user']);
			$password = stripslashes($_POST['pwd']);
			$email=$_POST['email'];
			if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
			{
	
						$username = mysqli_real_escape_string($con,$username);
						$password = mysqli_real_escape_string($con,$password);
						$sql = "Select userid from Security where email= '". $email."'";  
						 $result = mysqli_query($con,$sql);  
							if (!$result) 
								{
							die('Invalid query: ' . mysqli_error($con));
								}
						  while($user=mysqli_fetch_array($result))
								{
							
									$count++;
								}
								if($count==0)
								{					
									$api=api();
				$values = 'VALUES ("'.$username.'", "'.$email.'", "'.$password.'", "'.md5($password).'", "'.$api.'")';	
				$query = "insert into security ( Username, email, Password, mdpass, api) ".$values;
						
							if ($result = mysqli_query($con,$query)) 
								{
									
									echo 'ok';
								}
								else{
									die( mysqli_error($con));
								
				
								}
								}								
							   else
								{
								  echo $message ='All ready registed email...'; 		
								 
								}	
							
			}		
			else
			{
			 echo  $message = 'Invalid Email Address'; 	
			}
		}
		else
		{
		 echo  $message = 'passwords words not match..'; 	
		}
	}
	else
	{
		 echo $message = 'fail'; 
	}
}
 

?>