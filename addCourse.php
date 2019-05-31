<!doctype html>
<?php 
   session_start();
   if (!isset($_SESSION['userName'])) { 
     header("Location: http://localhost/Institute/login.php");
   }
   ?>
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
   </head>
   <body>
      <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
		 <!-- Nav Bar Start here  -->
         <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
            <div class="mdl-layout__header-row">
               <span class="mdl-layout-title">Institute</span>
               <div class="mdl-layout-spacer"></div>
               <button type="button" class="mdl-button"><span class="mdl-layout-item">Home</span></button>
               <button type="button" class="mdl-button"><span class="mdl-layout-item">Others</span></button>
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                  <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
                  <i class="material-icons">search</i>
                  </label>
                  <div class="mdl-textfield__expandable-holder">
                     <input class="mdl-textfield__input" type="text" id="search">
                     <label class="mdl-textfield__label" for="search">Enter your query...</label>
                  </div>
               </div>
               <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
               <i class="material-icons">more_vert</i>
               </button>
               <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
                  <li class="mdl-menu__item">About</li>
                  <li class="mdl-menu__item">Contact</li>
                  <li class="mdl-menu__item">Legal information</li>
               </ul>
            </div>
         </header>
		 <!-- Nav Bar Ends here  -->
		 <!-- Side Bar Start here  -->
         <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
            <header class="demo-drawer-header">
               <img id="tt3" src="images/user.jpg" class="demo-avatar"/>
               <div class="demo-avatar-dropdown">
                  <span><?php if(isset($_COOKIE["userName"])){echo $_COOKIE["userName"];} ?></span>
                  <div class="mdl-tooltip" for="tt3">Upload <strong>Profile</strong></div>
                  <div class="mdl-layout-spacer"></div>
                  <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                  <i class="material-icons" role="presentation">arrow_drop_down</i>
                  <span class="visuallyhidden">Accounts</span>
                  </button>
                  <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
                     <li class="mdl-menu__item">hello@ptc.com</li>
                     <li class="mdl-menu__item">info@ptc.com</li>
                     <li class="mdl-menu__item"><a href="logout.php">Logout</a></li>
                  </ul>
               </div>
            </header>
            <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
               <a class="mdl-navigation__link" href="index.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Home</a>
               <a class="mdl-navigation__link" href="Revenue_Details.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">monetization_on</i>Revenue</a>
               <a class="mdl-navigation__link" href="Enquiry_Details.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Enquiry</a>
               <a class="mdl-navigation__link" href="Addmission_Details.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">person_add</i>Addmission</a>
               <a class="mdl-navigation__link" href="Staff_Details.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">group</i>Staff Details</a>
               <a class="mdl-navigation__link" href="Coursees_Details.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">location_city</i>Coursees Details</a>
               <a class="mdl-navigation__link" href="Batches_Details.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">school</i>Batches Details</a>
               <a class="mdl-navigation__link" href="Cource_Details.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">library_books</i>Cource Details</a>
               <a class="mdl-navigation__link" href="Finance_Details.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">money</i>Finance Details</a>
               <a class="mdl-navigation__link" href="Reference_Details.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">wc</i>Reference Details</a>
               <div class="mdl-layout-spacer"></div>
               <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i><span class="visuallyhidden">Help</span></a>
            </nav>
         </div>
		 <!-- Side Bar Ends here  -->
		 <!-- content outer body Start here  -->
         <main class="mdl-layout__content mdl-color--grey-100">
            <div class="mdl-grid demo-content ">
               <!-- Start  -->
               <div class="mdl-card mdl-shadow--2dp container-login">
                  <div class="mdl-card__title">
                     <h2 class="mdl-card__title-text">New Course</h2>
                  </div>
                  <div class="mdl-card__supporting-text">
                     <form action="#">
               <!-- Start  -->
               <html lang="en" class="mdl-js">
   <head>
      <meta charset="UTF-8">
      <link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">
      <link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">
      
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <style>
         .mdl-button--file input {
         cursor: pointer;
         height: 100%;
         right: 0;
         opacity: 0;
         position: absolute;
         top: 0;
         width: 300px;
         z-index: 4;
         }
         .mdl-textfield--file .mdl-textfield__input {
         box-sizing: border-box;
         width: calc(100% - 32px);
         }
         .mdl-textfield--file .mdl-button--file {
         right: 0;
         }
      </style>
      <script>
         window.console = window.console || function(t) {};
      </script>
      <script>
         if (document.location.search.match(/type=embed/gi)) {
           window.parent.postMessage("resize", "*");
         }
      </script>
   </head>
   <body translate="no">
      <form>
         <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label is-upgraded" data-upgraded=",MaterialTextfield">
            <input class="mdl-textfield__input" type="text">
            <label class="mdl-textfield__label">Course Name</label>
         </div><br>
         <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label is-upgraded" data-upgraded=",MaterialTextfield">
            <input class="mdl-textfield__input" type="text">
            <label class="mdl-textfield__label"> Course Fees..</label>
         </div><br>
         <div class="mdl-textfield mdl-js-textfield mdl-textfield--file is-upgraded" data-upgraded=",MaterialTextfield">
            <input class="mdl-textfield__input" placeholder="Syllabus File" type="text" id="uploadFile" readonly=true>
            <div class="mdl-button mdl-button--primary mdl-button--icon mdl-button--file">
               <i class="material-icons">attach_file</i><input type="file" id="uploadBtn">
            </div>
         </div><br>
		 <div>
                           <button id="save" type="submit" class="mdl-js-button mdl-button--raised mdl-button--accent">Save</button>
                           <button id="reset" type="reset" class="mdl-js-button mdl-button--raised mdl-button--accent">Reset</button>
                        </div>
      </form>
      <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>
      <script src="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.min.js"></script>
      <script id="rendered-js">
         document.getElementById("uploadBtn").onchange = function () {
         document.getElementById("uploadFile").value = this.files[0].name;
         };
      </script>
      <script src="https://static.codepen.io/assets/editor/live/css_reload-5619dc0905a68b2e6298901de54f73cefe4e079f65a75406858d92924b4938bf.js"></script>
   </body>
</html>
               <!-- End  -->
                     </form>
                  </div>
               </div>

               <!-- End  -->
            </div>
            <footer class="mdl-mini-footer">
               <div class="mdl-mini-footer__right-section social-icon">
                  <li><a href="https://facebook.com/ptc"  class="fa fa-facebook"></a></li>
                  <li><a href="https://twitter.com/ptc"   class="fa fa-twitter"></a></li>
                  <li><a href="https://instagram.com/ptc" class="fa fa-instagram"></a></li>
                  <li><a href="https://pinterest.com/ptc" class="fa fa-pinterest"></a></li>
                  <li><a href="https://google.com/ptc"    class="fa fa-google"></a></li>
                  <li><a href="https://github.com/ptc"   class="fa fa-github"></a></li>
                  <li><a href="help.php">Help</a></li>
                  <li><a href="Terms_and_conditions.php">Privacy & Terms</a></li>
               </div>
            </footer>
         </main>
		 <!-- content outer body Ends here  -->
      </div>
	  <!-- Material Design Lite js script -->
      <script src="mdl/material.min.js"></script>
	  <!-- Jquery js script -->
      <script src="mdl/jquery.min.js"></script>
   </body>
</html>