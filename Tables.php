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

      <!-- G Font -->
      <link rel="stylesheet" href="mdl/googleapi.css">
      <!-- MDL -->
      <link rel="stylesheet" href="mdl/material.icon.css">
      <!-- MDL THEAME -->
      <link rel="stylesheet" href="mdl/material.cyan-light_blue.min.css">
      <!-- Custom css -->
      <link rel="stylesheet" href="mdl/styles.css">
      <!-- Font Awesome css -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <!-- BOOTSTRAP 
     <link rel="stylesheet" href="mdl/bootstrap-4.0.0-dist/css/bootstrap.min.css">
     -->
   </head>
   <body>
      <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
         <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
            <div class="mdl-layout__header-row">
               <span class="mdl-layout-title">Home</span>
               <div class="mdl-layout-spacer"></div>
               <button type="button" class="mdl-button"><span class="mdl-layout-item">About</span></button>
               <button type="button" class="mdl-button"><span class="mdl-layout-item">About</span></button>
               <button type="button" class="mdl-button"><span class="mdl-layout-item">About</span></button>
               <button type="button" class="mdl-button"><span class="mdl-layout-item">About</span></button>
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
         <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
            <header class="demo-drawer-header">
               <img id="tt3" src="images/user.jpg" class="demo-avatar">
               <div class="demo-avatar-dropdown">
                  <span>aadake@ptc.com</span>
				  <div class="mdl-tooltip" for="tt3">Upload <strong>Profile</strong></div><div class="mdl-tooltip" for="tt3">Upload <strong>file.zip</strong></div>
                  <div class="mdl-layout-spacer"></div>
                  <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                  <i class="material-icons" role="presentation">arrow_drop_down</i>
                  <span class="visuallyhidden">Accounts</span>
                  </button>
                  <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
                     <li class="mdl-menu__item">hello@ptc.com</li>
                     <li class="mdl-menu__item">info@ptc.com</li>
                     <li class="mdl-menu__item"><i class="material-icons">add</i>Add another account...</li>
                  </ul>
               </div>
            </header>
            <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
               <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Home</a>
               <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">attach_money</i>Revenue</a>
               <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Inquiry</a>
               <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">person_add</i>Addmission</a>
               <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">group</i>Staff Details</a>
               <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Batches Details</a>
               <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Batches Details</a>
               <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">library_books</i>Cource Details</a>
               <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">money</i>Finance Details</a>
               <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Reference Details</a>
               <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">inbox</i>Inbox</a>
               <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">delete</i>Trash</a>
               <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">report</i>Spam</a>
               <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">forum</i>Forums</a>
               <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">flag</i>Updates</a>
               <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>Promos</a>
               <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">shopping_cart</i>Purchases</a>
               <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">people</i>Social</a>
               <div class="mdl-layout-spacer"></div>
               <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i><span class="visuallyhidden">Help</span></a>
            </nav>
         </div>
		 <main class="mdl-layout__content mdl-color--grey-100">
         <div class="mdl-grid demo-content">
<!-- Start  -->
		 <table   class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
               <thead>
                  <tr>
                     <th class="mdl-data-table__header--sorted-ascending" >ID</th>
                     <th class="mdl-data-table__cell--non-numeric">Full Name</th>
                     <th class="mdl-data-table__cell--non-numeric">Email</th>
                     <th>Phone No 1</th>
                     <th>Phone No 2</th>
                     <th class="mdl-data-table__cell--non-numeric">Address</th>
                     <th class="mdl-data-table__cell--non-numeric">UserName</th>
                     <th class="mdl-data-table__cell--non-numeric">Password</th>
                     <th>userType</th>
                  </tr>
               </thead>
			    <?php 
                  require 'db.php';
                  $query = "select * from users order by ID";
                  $result = mysqli_query($connection,$query);
                  while($row = mysqli_fetch_array($result) ){
                   $id = $row['ID'];
                   $name = $row['Name'];
                   $Email = $row['Email'];
                   $PhoneNo1 = $row['PhoneNo1'];
                   $PhoneNo2 = $row['PhoneNo2'];
                   $Address = $row['Address'];
                   $username = $row['userName'];
                   $userPassword = $row['userPassword'];
                   $userType = $row['userType'];
                   
                  ?>
               <tbody>
                  <tr>
                  <td contentEditable class="mdl-data-table__cell--non-numeric edit" id='ID_<?php echo $id; ?>'><?php echo $id; ?></td>
                  <td contentEditable class="mdl-data-table__cell--non-numeric edit" id='Name_<?php echo $id; ?>'><?php echo $name; ?></td>
                  <td contentEditable class="mdl-data-table__cell--non-numeric edit" id='Email_<?php echo $id; ?>'><?php echo $Email; ?></td>
                  <td contentEditable class="edit" id='PhoneNo1_<?php echo $id; ?>'><?php echo $PhoneNo1; ?> </td>
                  <td contentEditable class="edit" id='PhoneNo2_<?php echo $id; ?>'><?php echo $PhoneNo2; ?> </td>
                  <td contentEditable class="mdl-data-table__cell--non-numeric edit" id='Address_<?php echo $id; ?>'><?php echo $Address; ?></td>
                  <td contentEditable class="mdl-data-table__cell--non-numeric edit" id='userName_<?php echo $id; ?>'><?php echo $username; ?></td>
                  <td contentEditable class="mdl-data-table__cell--non-numeric edit" id='userPassword_<?php echo $id; ?>'><?php echo $userPassword; ?></td>
                  <td class="mdl-data-table__cell--non-numeric edit"><?php echo $userType; ?> </td>
               </tr>
               <?php } ?>
               </tbody>
            </table>
<!-- End  -->
        </div>
      </main>
	   <footer class="mdl-mini-footer">
        <div class="mdl-mini-footer__right-section social-icon">
		 
				<li><a href="https://facebook.com/ptc"  class="fa fa-facebook"></a></li>
				<li><a href="https://twitter.com/ptc"   class="fa fa-twitter"></a></li>
				<li><a href="https://instagram.com/ptc" class="fa fa-instagram"></a></li>
				<li><a href="https://pinterest.com/ptc" class="fa fa-pinterest"></a></li>
				<li><a href="https://google.com/ptc"    class="fa fa-google"></a></li>
				<li><a href="https://github.com/ptc"   class="fa fa-github"></a></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li><a href="#">Help</a></li>
				<li></li>
				<li></li>
				<li><a href="#">Privacy & Terms</a></li>
        </div>
      </footer>
      </div>
      
      <script src="./mdl/material.min.js"></script>
      <script src="./mdl/jquery.min.js"></script>
      <script>
         $(document).ready(function(){
         $("TD").click(function(){
         	//$(this).hide();
         });
         
         // Save data
                $("TD").focusout(function(){
           alert('Upated successfully'); 
                 /* $(this).removeClass("editMode");
                 var id = this.id;
                 var split_id = id.split("_");
                 var field_name = split_id[0];
                 var edit_id = split_id[1];
                 var value = $(this).text();
                
                 $.ajax({
                  url: 'update.php',
                  type: 'post',
                  data: { field:field_name, value:value, id:edit_id },
                  success:function(response){
                   alert('Upated successfully'); 
                  }
                  
                 });
           */
                });
         });
      </script>
   </body>
</html>