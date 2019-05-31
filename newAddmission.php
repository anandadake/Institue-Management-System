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
      <style>
         .btn{outline: none !important;border: none;}
         .btn-primary{background: #57b846!important;}
         .btn-primary:hover{background: #5ff850!important;}
		 #save,#reset{width:100%!important;}
		 input{color:#333}
      </style>
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
               <a class="mdl-navigation__link" href="Branches_Details.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">location_city</i>Branches Details</a>
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
            <div class="mdl-grid demo-content">
               <!-- Start  -->
         <div class="wrap-login">
            <form class="login-form " METHOD="POST" action="newAddmissionBAckEnd.php">
			            <div class="form-group">
                        <label class="col-md-4 control-label">Course</label>
                        <div class="col-md-4 selectContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                <select name="Course" required value="Course">
                                    <option>Select Course</option>
                                    <option Value="">C </option>
                                    <option Value="">CPP </option>
                                    <option Value="">JAVA</option>
                                    <option Value="">PHP</option>
                                    <option Value="">Angular</option>
                                    <option Value="">UNIX</option>
                                </select>
                            </div>
                        </div>
                    </div><br>
			            <div class="form-group">
                        <label class="col-md-4 control-label">Branch</label>
                        <div class="col-md-4 selectContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                <select name="Branch" required value="Branch">
                                    <option>Select Branch</option>
                                    <option Value="">Pune</option>
                                    <option Value="">Mumbai </option>
                                </select>
                            </div>
                        </div>
                    </div>
                        <div >
                           <input id="total"class="mdl-textfield__input" type="text" disabled value="1000" />
                        </div>
                        <div >
                           <input id="paid"class="mdl-textfield__input" type="text" " />
                        </div>
                        <div>
                           <input id="rem"class="mdl-textfield__input" type="text"  disabled value="500"/>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                           <input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z]*" id="fullName" />
                           <label class="mdl-textfield__label" for="fullName">Full Name</label>
                           <span class="mdl-textfield__error">Only alphabet and no spaces, please!</span>
                        </div>
						<br>
                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
							<input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
							<span class="mdl-radio__label">Male</span>
						</label>
						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
							<input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
							<span class="mdl-radio__label">Female</span>
						</label>
						<br>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                           <input class="mdl-textfield__input" type="Date"  id="EmailEmail" />
                           <label class="mdl-textfield__label" for="Email">DOB</label>
                           <span class="mdl-textfield__error">Please Enter Valid DOB!</span>
                        </div>
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
			            <div class="form-group">
                        <label class="col-md-4 control-label">PayMode</label>
                        <div class="col-md-4 selectContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                <select name="Mode" required value="mode">
                                    <option>Select Mode</option>
                                    <option Value="">Cash</option>
                                    <option Value="">cheque </option>
                                </select>
                            </div>
                        </div>
                    </div>
					<br>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                           <input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z]*" id="Status1" />
                           <label class="mdl-textfield__label" for="Status1">Status 1</label>
                           <span class="mdl-textfield__error">Only alphabet and no spaces, please!</span>
                        </div>
						<br>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                           <input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z]*" id="Status2" />
                           <label class="mdl-textfield__label" for="Status2">Status 2</label>
                           <span class="mdl-textfield__error">Only alphabet and no spaces, please!</span>
                        </div>
						<br>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                           <input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z]*" id="Status3" />
                           <label class="mdl-textfield__label" for="Status3">Status 3</label>
                           <span class="mdl-textfield__error">Only alphabet and no spaces, please!</span>
                        </div>
						<br>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						
                        </div>
						<br>
                        <div>
                           <button id="save" type="submit" class="mdl-js-button mdl-button--raised mdl-button--accent">Add Addmission</button>
                           <button id="reset" type="reset" class="mdl-js-button mdl-button--raised mdl-button--accent">Reset</button>
                        </div>
            </form>
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
      <script src="mdl/bootstrap340/3.4.0.bootstrap.min.js"></script>
      <script>
		$("#total").on("input",function(){
		$("rem").val(parseInt($("#Total").val())-parseInt($("#paid").val()));
		});
	  </script>
   </body>
</html>