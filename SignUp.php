<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
      <title>Institute Management System</title>
      <!-- Add to homescreen for Chrome on Android -->
      <meta name="mobile-web-app-capable" content="yes">
      <link rel="icon" sizes="192x192" href="images/android-desktop.png">
      <!-- Add to homescreen for Safari on iOS -->
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-status-bar-style" content="black">
      <meta name="apple-mobile-web-app-title" content="Material Design Lite">
      <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">
      <!-- Tile icon for Win8 (144x144 + tile color) -->
      <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
      <meta name="msapplication-TileColor" content="#3372DF">
      <link rel="shortcut icon" href="images/favicon.png">
      <!-- MDL -->
      <link rel="stylesheet" href="mdl/material.icon.css">
      <!-- MDL THEAME -->
      <link rel="stylesheet" href="mdl/material.cyan-light_blue.min.css">
      <!-- Custom css -->
      <link rel="stylesheet" href="mdl/styles.css">
      <!-- Font Awesome css -->
      <link rel="stylesheet" href="mdl/font-awesome.min.css">
      <!-- BOOTSTRAP  -->
      <link rel="stylesheet" href="mdl/bootstrap340/3.4.0.bootstrap.min.css">
      <style>
         .btn{outline: none !important;border: none;}
         .btn-primary{background: #57b846!important;}
         .btn-primary:hover{background: #5ff850!important;}
		 #save,#reset{width:100%!important;}
		 input{color:#333}
      </style>
   </head>
   <body>
      <div bgimage="true" class="container-login">
         <div class="wrap-login">
            <form class="login-form" METHOD="POST" action="SignUpBackEnd.php">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                           <input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z]*" id="fullName" />
                           <label class="mdl-textfield__label" for="fullName">Full Name</label>
                           <span class="mdl-textfield__error">Only alphabet and no spaces, please!</span>
                        </div>
						<br>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                           <input class="mdl-textfield__input" type="email"  id="EmailEmail" />
                           <label class="mdl-textfield__label" for="Email">Email</label>
                           <span class="mdl-textfield__error">Please Enter Valid email!</span>
                        </div>
                        <br>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                           <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="no1">
                           <label class="mdl-textfield__label" for="no1">Number...</label>
                           <span class="mdl-textfield__error">Input is not a number!</span>
                        </div>
						<br>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                           <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="no2">
                           <label class="mdl-textfield__label" for="no2">Alt Number...</label>
                           <span class="mdl-textfield__error">Input is not a number!</span>
                        </div>
                        <br/>
						<div class="mdl-textfield mdl-js-textfield">
						<textarea class="mdl-textfield__input" type="text" rows= "3" id="address" ></textarea>
						<label class="mdl-textfield__label" for="address">address...</label>
						</div>
                        <br>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                           <input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z]*" id="userName" />
                           <label class="mdl-textfield__label" for="firstName">User Name</label>
                           <span class="mdl-textfield__error">Please Enter Valid User Name!</span>
                        </div>
						<br>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                           <input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z]*" id="pass" />
                           <label class="mdl-textfield__label" for="pass">Password</label>
                           <span class="mdl-textfield__error">Please Enter Valid Password!</span>
                        </div>
						<br>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                           <input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z]*" id="repass" />
                           <label class="mdl-textfield__label" for="repass">Repeat Password</label>
                           <span class="mdl-textfield__error">Please Enter Valid Repeat Password!</span>
                        </div>
						<br>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
							<input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
							<span class="mdl-radio__label">Male</span>
						</label>
						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
							<input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
							<span class="mdl-radio__label">Female</span>
						</label>
						</div>
                        <div>
                           <button id="save" type="submit" class="mdl-js-button mdl-button--raised mdl-button--accent">Sign Up</button>
                           <button id="reset" type="reset" class="mdl-js-button mdl-button--raised mdl-button--accent">Reset</button>
                        </div>
            </form>
         </div>
      </div>
      <!-- Material Design Lite js script -->
      <script src="mdl/material.min.js"></script>
      <!-- Jquery js script -->
      <script src="mdl/jquery.min.js"></script>
   </body>
</html>