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
      </style>
   </head>
   <body>
      <div bgimage class="container-login">
         <div class="wrap-login">
            <form class="login-form" METHOD="POST" action="loginBackEnd.php">
               <span class="login-form-title">Member Login</span>
               <div class="login-wrap">
                  <div class="input-group">
                     <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                     <input type="text" id="userName" name="userName" class="form-control" placeholder="Username" required autofocus value=<?php if(isset($_COOKIE["userName"])){echo $_COOKIE["userName"];} ?> >
                  </div>
                  <div class="input-group">
                     <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
                     <input type="password" id="pass" name="userPassword" class="form-control" placeholder="Password" required value=<?php if(isset($_COOKIE["userPassword"])){echo $_COOKIE["userPassword"];} ?> >
                     <span class="input-group-addon"><i id="eye" onclick="showPassword()" class="glyphicon glyphicon-eye-close" aria-hidden="true"></i></span>
                  </div>
                  <label class="checkbox">
                  <input type="checkbox" name="remember-me" value="remember-me" checked /> Remember me
                  <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
                  </label>
                  <button type="submit" id="login" name="login"  class="btn btn-primary btn-lg btn-block" disabled="true" >Login</button>
                  <button onclick="window.location.href = 'SignUp.php'" class="btn btn-info btn-lg btn-block" >Signup</button>
               </div>
            </form>
         </div>
      </div>
      <!-- Material Design Lite js script -->
      <script src="mdl/material.min.js"></script>
      <!-- Jquery js script -->
      <script src="mdl/jquery.min.js"></script>
      <script>
         function showPassword(){
         var x = document.getElementById("pass");
         if (x.type === "password") {
             x.type = "text";
			 $("#eye").attr("class","glyphicon glyphicon-eye-open");
         } else {
             x.type = "password";
			 $("#eye").attr("class","glyphicon glyphicon-eye-close");
         }
         }
         $('#pass').on('input', function(){
         var userName = document.getElementById("#userName");
         $("#login").attr("disabled",false);
         });
      </script>
   </body>
</html>