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
	  
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
      <style>
         table{width:500px}
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
                  <div class="mdl-card__title">
                     <h2 class="mdl-card__title-text">Enquiry Details</h2>
                  </div>
                  <div class="mdl-card__actions">
                     <a id="save" href="addEnquiry.php" type="submit" class="mdl-js-button mdl-button--raised mdl-button--accent">Add New Enquiry</a><br><br>
                     <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                           <tr>
                              <th>En_ID</th>
                              <th>Branch_ID</th>
                              <th>FullName</th>
                              <th>En_Date</th>
                              <th>Course_ID</th>
                              <th>Gender</th>
                              <th>Email</th>
                              <th>Contact_No1</th>
                              <th>Contact_No2</th>
                              <th>Enquiry_Status</th>
                              <th>Qualification</th>
                              <th>Reference_ID</th>
                           </tr>
                        </thead>
                        <?php 
                           require 'db.php';
                           $query = "select * from enquiry_details order by En_ID";
                           $result = mysqli_query($connection,$query);
                           if (!$result) {
                           printf("Error: %s\n", mysqli_error($connection));
                           exit();
                           }
                           while($row = mysqli_fetch_array($result) ){
                            $En_ID = $row['En_ID'];
                            $FullName = $row['FullName'];
                            $En_Date = $row['En_Date'];
                            $Course_ID = $row['Course_ID'];
                            $Gender = $row['Gender'];
                            $Email = $row['Email'];
                            $Contact_No1 = $row['Contact_No1'];
                            $Contact_No2 = $row['Contact_No2'];
                            $Enquiry_Status = $row['Enquiry_Status'];
                            $Qualification = $row['Qualification'];
                            $Reference_ID = $row['Reference_ID'];
                            
                           ?>
                        <tbody>
                           <tr>
                              <td id='En_ID-<?php echo $En_ID; ?>'><?php echo $En_ID; ?></td>
                              <td id='En_Date-<?php echo $En_Date; ?>'><?php echo $En_Date; ?></td>
                              <td id='FullName-<?php echo $FullName; ?>'><?php echo $FullName; ?></td>
                              <td id='Course_ID-<?php echo $Course_ID; ?>'><?php echo $Course_ID; ?></td>
                              <td id='Gender-<?php echo $Gender; ?>'><?php echo $Gender; ?></td>
                              <td id='Email-<?php echo $Email; ?>'><?php echo $Email; ?></td>
                              <td id='Contact_No1-<?php echo $Contact_No1; ?>'><?php echo $Contact_No1; ?></td>
                              <td id='Contact_No2-<?php echo $Contact_No2; ?>'><?php echo $Contact_No2; ?></td>
                              <td id='Enquiry_Status-<?php echo $Enquiry_Status; ?>'><?php echo $Enquiry_Status; ?></td>
                              <td id='Qualification-<?php echo $Qualification; ?>'><?php echo $Qualification; ?></td>
                              <td id='Reference_ID-<?php echo $Reference_ID; ?>'><?php echo $Reference_ID; ?></td>
                           </tr>
                           <?php } ?>
                        </tbody>
                     </table>
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
      <!-- Jquery js script -->
      <script src="mdl/jquery.min.js"></script>
	  <!-- Jquery js script For Table -->
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
      <!-- Material Design Lite js script -->
      <script src="mdl/material.min.js"></script>
      <script src="mdl/bootstrap340/3.4.0.bootstrap.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
      <script>
		$(document).ready( function () {
			$('#example').DataTable();
		} );
		 $('TD').click(function() {
         $(this).attr("contenteditable", true);
         });
         $('TD').focusout(function() {
         $(this).attr("contenteditable", false);
         });
      </script>
   </body>
</html>