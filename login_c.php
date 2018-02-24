<?php

session_unset(); 
session_start();
require  'Config.php';
$count=0;
$user='';
$PWD='';
$message="";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(!empty($_POST['user']) && ! empty($_POST['pwd']) )
	{
$username = stripslashes($_POST['user']);
$password = stripslashes($_POST['pwd']);
$username = mysqli_real_escape_string($con,$username);
$password = mysqli_real_escape_string($con,$password);
$sql = "Select userid,password from Security where username= '". $username."'";  
  $result = mysqli_query($con,$sql);  
  if (!$result) {
    die('Invalid query: ' . mysqli_error($con));
}
  while($user=mysqli_fetch_array($result))
{
    $spassword= $user["password"];
			$uid= $user["userid"];
			$count++;
}
		
		if($count==1)
		{					
			
			if ($password == $spassword)
			{
				
				if(!empty($_POST["remember"]))   
                   {  
					setcookie ("member_login",$username,time()+ (10 * 365 * 24 * 60 * 60));  
					setcookie ("member_password",$password,time()+ (10 * 365 * 24 * 60 * 60));
					$_SESSION['user'] = $uid;
				   }  
				   else  
				   {  
					if(isset($_COOKIE["member_login"]))   
					{  
					 setcookie ("member_login","");  
					}  
					if(isset($_COOKIE["member_password"]))   
					{  
					 setcookie ("member_password","");  
					}  
								
					}
					 
				$_SESSION['user'] = $uid;		
               echo $message = 'ok';
		}		
		else
		{
		  echo $message = 'fail'; 		
		 
		}	
	}
	else
		{
		  echo $message ='fail'; 		
		 
		}	
	
	
}
else{
		
		$message = 'fail'; 
	}
}
 

?>