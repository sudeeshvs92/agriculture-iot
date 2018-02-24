<!DOCTYPE html>
<?php
include 'Config.php';
session_start();
	if((!isset($_SESSION['user'])))
	{
	header("Location: login.php");
	}
	
?>
<html lang="en">
    

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendor styles -->
        <link rel="stylesheet" href="<?php $_SERVER['SERVER_NAME']; ?>/iot/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="<?php $_SERVER['SERVER_NAME']; ?>/iot/vendors/bower_components/animate.css/animate.min.css">
        <link rel="stylesheet" href="<?php $_SERVER['SERVER_NAME']; ?>/iot/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">

        <!-- App styles -->
        <link rel="stylesheet" href="<?php $_SERVER['SERVER_NAME']; ?>/iot/css/app.min.css">
		 <!-- Demo -->
        <link rel="stylesheet" href="<?php $_SERVER['SERVER_NAME']; ?>/iot/demo/css/demo.css">
    </head>

    <body data-sa-theme="1">
        <main class="main">
            <div class="page-loader">
                <div class="page-loader__spinner">
                    <svg viewBox="25 25 50 50">
                        <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                    </svg>
                </div>
            </div>

            <header class="header">
                <div class="navigation-trigger hidden-xl-up" data-sa-action="aside-open" data-sa-target=".sidebar">
                    <i class="zmdi zmdi-menu"></i>
                </div>

                <div class="logo hidden-sm-down">
                    <h1><a href="dashboadrd.php">TREABITE <br> <small>IOT monitor</small></a></h1>
                </div>

             

                <ul class="top-nav">
                    <li class="hidden-xl-up"><a href="#" data-sa-action="search-open"><i class="zmdi zmdi-search"></i></a></li>

               
                    <li class="dropdown top-nav__notifications">
                        <a href="#" data-toggle="dropdown" class="top-nav__notify">
                            <i class="zmdi zmdi-notifications"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
                            <div class="dropdown-header">
                                Notifications

                                <div class="actions">
                                    <a href="#" id="nclr" class="actions__item zmdi zmdi-check-all" data-sa-action="notifications-clear"></a>
                                </div>
                            </div>

                            <div class="listview listview--hover" >
                                <div class="listview__scroll scrollbar-inner" id="notfi">
                               

                                    
                                
       
                                </div>

                            </div>
                        </div>
                    </li>

                  
                    <li class="dropdown hidden-xs-down">
                        <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-item theme-switch">
                                Theme Switch

                                <div class="btn-group btn-group--colors mt-2 d-block" data-toggle="buttons">
                                    <label class="btn active border-0" style="background-color: #772036"><input type="radio" value="1" autocomplete="off" checked></label>
                                    <label class="btn border-0" style="background-color: #273C5B"><input type="radio" value="2" autocomplete="off"></label>
                                    <label class="btn border-0" style="background-color: #174042"><input type="radio" value="3" autocomplete="off"></label>
                                    <label class="btn border-0" style="background-color: #383844"><input type="radio" value="4" autocomplete="off"></label>
                                    <label class="btn border-0" style="background-color: #49423F"><input type="radio" value="5" autocomplete="off"></label>

                                    <br>

                                    <label class="btn border-0" style="background-color: #5e3d22"><input type="radio" value="6" autocomplete="off"></label>
                                    <label class="btn border-0" style="background-color: #234d6d"><input type="radio" value="7" autocomplete="off"></label>
                                    <label class="btn border-0" style="background-color: #3b5e5e"><input type="radio" value="8" autocomplete="off"></label>
                                    <label class="btn border-0" style="background-color: #0a4c3e"><input type="radio" value="9" autocomplete="off"></label>
                                    <label class="btn border-0" style="background-color: #7b3d54"><input type="radio" value="10" autocomplete="off"></label>
                                </div>
                            </div>
                            <a href="#" class="dropdown-item" data-sa-action="fullscreen">Fullscreen</a>
                            <a href="#" class="dropdown-item">Clear Local Storage</a>
                        </div>
                    </li>
                </ul>

                <div class="clock hidden-md-down">
                    <div class="time">
                        <span class="hours"></span>
                        <span class="min"></span>
                        <span class="sec"></span>
                    </div>
                </div>
            </header>