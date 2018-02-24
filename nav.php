 <?php
require_once 'Config.php';

if($_SESSION['user'])
{
	$user=$_SESSION['user'];
}
$sql = "Select * from Security where userid= '". $user."'";  
						 $result = mysqli_query($con,$sql);  
							if (!$result) 
								{
							die('Invalid query: ' . mysqli_error($con));
								}
								else
								{
						  $row=mysqli_fetch_assoc($result);
								
							 $username=$row['Username'];
							 $email=$row['email'];
							 $mdpass=$row['mdpass'];
							 $api=$row['api'];
								}	
								
 ?>
 
 
 <aside class="sidebar">
                <div class="scrollbar-inner">

                    <div class="user">
                        <div class="user__info" data-toggle="dropdown">
                            <img class="user__img" src="demo/img/profile-pics/8.jpg" alt="">
                            <div>
                                <div class="user__name"><?php echo $username;?> </div>
								<hr>
                                <div class="user__email"><?php echo $email;?></div>
								<hr>
								 <div class="user__name"><span>API:  <b><?php echo $api;?></b></span></div>
								 <hr>
                                <div class="user__name "><span> Api Password: <div style=" text-overflow: inherit;"><br><small><?php echo  $mdpass;?></small></div></span></div>
								
                            </div>
                        </div>

                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">View Profile</a>
                            <a class="dropdown-item" href="<?php $_SERVER['SERVER_NAME']; ?>/iot/logout.php">Logout</a>
                        </div>
                    </div>

                    <ul class="navigation">
                        <li class="@@indexactive"><a href="/iot/dashboard.php"><i class="zmdi zmdi-home"></i> Home</a></li>

                        <li class="navigation__sub @@variantsactive">
                            <a href="#"><i class="zmdi zmdi-view-week"></i> Devices</a>

                            <ul>
                                <li class="@@sidebaractive"><a href="hidden-sidebar.html">Sensor1</a></li>
                                <li class="@@boxedactive"><a href="boxed-layout.html">Sensor2</a></li>
                                <li class="@@hiddensidebarboxedactive"><a href="hidden-sidebar-boxed-layout.html">Sensor3</a></li>
                            </ul>
                        </li>
                           <li class="navigation__sub @@tableactive">
                            <a href="#"><i class="zmdi zmdi-view-list"></i> Users</a>

                            <ul>
                                <li class="@@normaltableactive"><a href="html-table.html">Add user</a></li>
                                <li class="@@datatableactive"><a href="data-table.html">View user</a></li>
                            </ul>
                        </li>
                        <li class="@@typeactive"><a href="<?php $_SERVER['SERVER_NAME']; ?>/iot/logout.php"><i class="zmdi zmdi-format-underlined"></i>Logout</a></li>

                    </ul>
                </div>
            </aside>
<main>