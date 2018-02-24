
<!DOCTYPE html>

<html>
<head>
<title>TERABITE IOT monitor..</title>
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- jQuery library -->
       <script src="<?php $_SERVER['SERVER_NAME']; ?>/iot/vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="<?php $_SERVER['SERVER_NAME']; ?>/iot/vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
		
        <script src="<?php $_SERVER['SERVER_NAME']; ?>/iot/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?php $_SERVER['SERVER_NAME']; ?>/iot/vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
		 <link rel="stylesheet" href="<?php $_SERVER['SERVER_NAME']; ?>/iot/vendors/bower_components/sweetalert2/dist/sweetalert2.min.css">
		 
 <link rel="stylesheet" href="<?php $_SERVER['SERVER_NAME']; ?>/iot/css/app.min.css">
		 <!-- Demo -->
<script src="<?php $_SERVER['SERVER_NAME']; ?>/iot/vendors/bower_components\jquery-flip\jquery.flip.js"></script>
<style>
@import url('https://fonts.googleapis.com/css?family=Nunito');
@import url('https://fonts.googleapis.com/css?family=Poiret+One');
@import url(https://fonts.googleapis.com/css?family=Roboto:400,900,700,500,300,100);
@import url(https://fonts.googleapis.com/css?family=Raleway:400,500);
@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css);


body, html {
	height: 100%;
	background-repeat: no-repeat;    /*background-image: linear-gradient(rgb(12, 97, 33),rgb(104, 145, 162));*/
	background:black;
	position: relative;
}




.in-page {
    min-height: 520px;
}

.main {
    position: relative;
}

a {
    color: #1b5a7c;
}

a:hover, a:focus {
    color: #1b5a7c;
}

.btn-cyan {
    background-color: #1b5a7c;
    color: #fff;
}

.btn-cyan:hover {
    color: #fff;
    opacity: 0.9;
}

.form-control:focus {
    border-color: #1b5a7c;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset, 0 0 8px rgba(24, 204, 162, 0.6);
    outline: 0 none;
}

.min-height {
    min-height: 380px;
}

.login-screen {
    background-image: url(http://cdn.hitroncomponents.com/wp-content/uploads/2016/07/2016-01-06-image-9.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    -moz-background-size: cover;
    -webkit-background-size: cover;
    position: fixed;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
	
		
}

.login-screen:before {
    content: "";
    background: rgba(0,0,0, 0.5);
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
}

.login {
    position: absolute;
	top:180px;
	left: 50%;
	transform: translateX(-50%);
	width: 350px;
	margin: 0 auto;
    color: #fff;
	z-index:9998;
	
}
p.form-title
{
    font-family: 'Open Sans' , sans-serif;
    font-size: 20px;
    font-weight: 600;
    text-align: center;
    color: #FFFFFF;
    margin-top: 5%;
    text-transform: uppercase;
    letter-spacing: 4px;
}

.login .login-form {
    text-align: left;
	
}

.login label {
    color: #fff;
}

.login-form .input-group .form-control {
    background: none;
    height: 44px;
    color: #ddd;
}

.login-form .input-group .input-group-addon {
    background: none;
}

.login-form .input-group .input-group-addon .glyphicon {
    color: #1b5a7c;
}

.login-form .input-group .form-control::-moz-placeholder {
    color: #fff;
    opacity: 0.3;
}

.login .sign-btn input.btn {
    background: #1b5a7c;
    border-color: #1b5a7c;
    color: #fff;
    width: 180px;
}

.login .sign-btn a {
    text-decoration: none;
}

.login .checkbox {
    margin-top: 20px;
    margin-bottom: 20px;
}

.login .forgot {
    display: inline-block;
    margin: 20px 0;
}
#particles-js{
  	width: 100%;
  	height: 100%;
  	background-size: cover;
  	background-position: 50% 50%;
  	position: fixed;
  	top: 0px;
  	z-index:1;
}

</style>

</head>
<body class="main">

<div class="login-screen"></div>
<div id="particles-js"></div>   
       
        	<div class="row">
			
                <div  class="col-xs-4 col-md-8 col-sm-4" >
				 
			 <div style="text-align:center; position:relative; top:100px; left:25%" class="form-title "><h1>TERABITE</h1><br><h5>IOT MONITOR</h5> </div>
                    <div class="login" id="card">
					
                     <div class="front signin_form"> 
                          <p class="form-title">Login </p>
						 
                          <form class="login-form"  method="POST" id="login">
                              <div class="form-group">
                                  <div class="input-group">
                                      <input type="text"  name="user" value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>" class="form-control" placeholder="Type your username" required>
                                      <span class="input-group-addon">
                                          <i class="glyphicon glyphicon-user"></i>
                                      </span>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="input-group">
                                      <input type="password" name="pwd" class="form-control" value="<?php if(isset($_COOKIE["member_password"])) { echo $_COOKIE["member_password"]; } ?>"  placeholder="Type your password" required>
                                      <span class="input-group-addon">
                                          <i class="glyphicon glyphicon-lock"></i>
                                      </span>
                                  </div>
                              </div>
                              <div class="checkbox">
                              <label><input   name="remember" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?> value="true" type="checkbox">Remember me.</label>
                              </div>
							 
							  
                               <div class="form-group sign-btn">
                                  <span class="col-md-6"><input type="submit"   name="login_button" class="btn    btn-block" value="Sign in"></span><span class="col-md-6"><button id="signup" type="button"  class="btn btn-info  btn-block " >Sign Up</button></span>
                                  
                              </div>
                            
                          </form>
                        </div>
						
                        <div class="back signup_form" style="opacity: 0;"> 
                          <p class="form-title">Register</p>
                          <form class="login-form" id="registerf" action="" method="POST">
                              <div class="form-group">
                                  <div class="input-group">
                                      <input type="text" name="user" class="form-control" placeholder="Username" required>
                                      <span class="input-group-addon">
                                          <i class="glyphicon glyphicon-user"></i>
                                      </span>
                                  </div>
                              </div>
                              <div class="form-group">
                                <div class="input-group">
                                  <input type="password"  name="pwd" class="form-control" placeholder="Password" required>
                                 <span class="input-group-addon">
                                          <i class="glyphicon glyphicon-lock"></i>
                                      </span>
                                </div>
                              </div>
                              <div class="form-group">
                                  <div class="input-group">
                                      <input type="password" name="pwd1" class="form-control" placeholder="Confirm Password" required>
                                      <span class="input-group-addon">
                                          <i class="glyphicon glyphicon-lock"></i>
                                      </span>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="input-group">
                                      <input type="email" name="email" class="form-control" placeholder="Email" required>
                                      <span class="input-group-addon">
                                          <i class="glyphicon glyphicon-envelope"></i>
                                      </span>
                                  </div>
                              </div>
                              
                              <div class="form-group sign-btn">
                                 
								  <span class="col-md-6"><input id="register_b" type="submit" class="btn    btn-block" value="Sign up"></span><span class="col-md-6"><button id="unflip-btn" type="button"  class="btn btn-info  btn-block " >Sign in</button></span>
                              </div>
                          </form>
                        </div>
                         
                        </div>
                    </div>
                </div>
            </div>
       
    
	

    
    </body>

  <script src="<?php $_SERVER['SERVER_NAME']; ?>/iot/vendors/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>
        <script src="<?php $_SERVER['SERVER_NAME']; ?>/iot/vendors/bower_components/sweetalert2/dist/sweetalert2.min.js"></script>


<script>


$("#registerf").submit(function (event) {
	event.preventDefault();
var data = $("#registerf").serialize();

$.ajax({
type : 'POST',
url : '<?php $_SERVER['SERVER_NAME']; ?>/iot/register.php',
data : data,
success : function(response){
	
if(response=="ok"){
notify('top' ,'center', 'glyphicon glyphicon-sucess-sign','success', 'animated flipInY', 'animated flipInY','<span style=\"color:white;\"><h4>Registeration sucess..!</h4></span>','notification');
setTimeout(' window.location.href = "login.php"; ',1000);
} else {
notify('top' ,'center', 'glyphicon glyphicon-warning-sign','danger', 'animated flipInY', 'animated flipInY','<span style=\"color:white;\"><h4>'+response+'</h4></span>','notification');
}
}
});
return false;
});

$("#login").submit(function (event) {
	event.preventDefault();
var data = $("#login").serialize();

$.ajax({
type : 'POST',
url : '<?php $_SERVER['SERVER_NAME']; ?>/iot/login_c.php',
data : data,
success : function(response){
	
if(response=="ok"){
notify('top' ,'center', 'glyphicon glyphicon-sucess-sign','success', 'animated flipInY', 'animated flipInY','<span style=\"color:white;\"><h4>Login sucess..!</h4></span>','notification');
setTimeout(' window.location.href = "dashboard.php"; ',4000);
} else {
notify('top' ,'center', 'glyphicon glyphicon-warning-sign','danger', 'animated flipInY', 'animated flipInY','<span style=\"color:white;\"><h4>Invalid login....!</h4></span>','notification');
}
}
});
return false;
});






$().ready(function() {
	$("#card").flip({
	  trigger: 'manual'
	});
});


$("#signup").click(function() {

	$(".signin_form").css('opacity', '0');
	$(".signup_form").css('opacity', '100');
	
	
	$("#card").flip(true);
	
	return false;
});

$("#unflip-btn").click(function(){
  
	$(".signin_form").css('opacity', '100');
	$(".signup_form").css('opacity', '0');
	
  	$("#card").flip(false);
	
	return false;
	
});
$.getScript("https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js", function(){
    particlesJS('particles-js',
      {
        "particles": {
          "number": {
            "value": 80,
            "density": {
              "enable": true,
              "value_area": 200
            }
          },
          "color": {
            "value": "#ffffff"
          },
          "shape": {
            "type": "circle",
            "stroke": {
              "width": 0,
              "color": "#000000"
            },
            "polygon": {
              "nb_sides": 10
            },
            "image": {
              "width": 100,
              "height": 100
            }
          },
          "opacity": {
            "value": 0.5,
            "random": false,
            "anim": {
              "enable": false,
              "speed": 1,
              "opacity_min": 0.1,
              "sync": false
            }
          },
          "size": {
            "value": 5,
            "random": true,
            "anim": {
              "enable": false,
              "speed": 50,
              "size_min": 0.1,
              "sync": false
            }
          },
          "line_linked": {
            "enable": true,
            "distance": 120,
            "color": "#ffffff",
            "opacity": 0.4,
            "width": 1
          },
          "move": {
            "enable": true,
            "speed": 6,
            "direction": "none",
            "random": false,
            "straight": false,
            "out_mode": "out",
            "attract": {
              "enable": false,
              "rotateX": 600,
              "rotateY": 1200
            }
          }
        },
        "interactivity": {
          "detect_on": "canvas",
          "events": {
            "onhover": {
              "enable": true,
              "mode": "repulse"
            },
            "onclick": {
              "enable": true,
              "mode": "push"
            },
            "resize": true
          },
          "modes": {
            "grab": {
              "distance": 400,
              "line_linked": {
                "opacity": 1
              }
            },
            "bubble": {
              "distance": 400,
              "size": 40,
              "duration": 5,
              "opacity": 4,
              "speed": 3
            },
            "repulse": {
              "distance": 200
            },
            "push": {
              "particles_nb": 8
            },
            "remove": {
              "particles_nb": 3
            }
          }
        },
        "retina_detect": true,
        "config_demo": {
          "hide_card": false,
          "background_color": "#b61924",
          "background_image": "",
          "background_position": "50% 50%",
          "background_repeat": "no-repeat",
          "background_size": "cover"
        }
      }
    );

});
  function notify(from, align, icon, type, animIn, animOut,message,head){
                $.notify({
                    icon: icon,
                    title: head,
                    message: message,
                    url: ''
                },{
                    element: 'body',
                    type: type,
                    allow_dismiss: true,
                    placement: {
                        from: from,
                        align: align
                    },
                    offset: {
                        x: 20,
                        y: 20
                    },
                    spacing: 10,
                    z_index: 1031,
                    delay: 2500,
                    timer: 1000,
                    url_target: '_blank',
                    mouse_over: false,
                    animate: {
                        enter: animIn,
                        exit: animOut
                    },
                    template:   '<div style="text-align:center;" data-notify="container" class="alert alert-dismissible alert-{0} alert--notify" role="alert">' +
                                    '<span data-notify="icon"></span> ' +
                                    '<span data-notify="title">{1}</span> ' +
                                    '<span data-notify="message">{2}</span>' +
                                    '<div class="progress" data-notify="progressbar">' +
                                        '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                                    '</div>' +
                                    '<a href="{3}" target="{4}" data-notify="url"></a>' +
                                    '<button type="button" aria-hidden="true" data-notify="dismiss" class="close"><span>×</span></button>' +
                                '</div>'
                });
            }

</script>
</html>