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
      <!-- BOOTSTRAP  -->
      <link rel="stylesheet" href="mdl/bootstrap-4.0.0-dist/css/bootstrap.min.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
     <style type="text/css">
    #new {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }
    
    #new td,
    #new th {
        border: 1px solid #ddd;
        padding: 8px;
    }
    
    #new tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    
    #new tr:hover {
        background-color: #ddd;
    }
    
    #new th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
    }
</style>
   </head>
   <body>
      <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
         <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
            <div class="mdl-layout__header-row">
               <span class="mdl-layout-title">Home</span>
               <div class="mdl-layout-spacer"></div>
               <button type="button" class="mdl-button"><span class="mdl-layout-item">Home</span></button>
               <button type="button" class="mdl-button"><span class="mdl-layout-item">Others</span></button>
               <button type="button" class="mdl-button"><span class="mdl-layout-item">About</span></button>
               <button type="button" class="mdl-button"><span class="mdl-layout-item">Contact</span></button>
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
                  <div class="mdl-tooltip" for="tt3">Upload <strong>Profile</strong></div>
                  <div class="mdl-tooltip" for="tt3">Upload <strong>file.zip</strong></div>
                  <div class="mdl-layout-spacer"></div>
                  <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                  <i class="material-icons" role="presentation">arrow_drop_down</i>
                  <span class="visuallyhidden">Accounts</span>
                  </button>
                  <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
                     <li class="mdl-menu__item">hello@ptc.com</li>
                     <li class="mdl-menu__item">info@ptc.com</li>
                     <li class="mdl-menu__item"><i class="material-icons">add</i>Add another account...</li>
                     <li class="mdl-menu__item">Logout</li>
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

<div class="container">
            <form class="well form-horizontal" action="flatregconnect.php" method="POST" name="f1">
                <fieldset>
                    <legend>
                        <center>
                            <h2><b>Registration Form</b></h2></center>
                    </legend>
                    <br>
			   
                    <div class="form-group">
						<i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>
                        <label class="col-md-4 control-label">Owner Name</label>
                        <div class="col-md-4 inputGroupContainer">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z]*" id="firstName" />
								<label class="mdl-textfield__label" for="firstName">First Name</label>
								<span class="mdl-textfield__error">Only alphabet and no spaces, please!</span>
							</div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Co-Owner Name</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input name="cowner" placeholder="Enter The Co-Owner Name" class="form-control" type="text" required maxlength=30 value="<?php echo $cowner;?>" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Contact No.</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                <input name="contact" placeholder="Enter The Contact Number" class="form-control" type="no" required maxlength=12 value="<?php echo $address;?>" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Alternate Contact No.</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                <input name="altcontact" placeholder="Enter The Alternate Contact Number" class="form-control" type="no" maxlength=12 value="<?php echo $altcontact;?>" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Address</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                                <input name="address" placeholder="Enter The Address" class="form-control" type="text" required value="<?php echo $address;?>" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">E-Mail</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input type="Email" name="email" placeholder="Enter The E-Mail" id="email" class="form-control" required value="<?php echo $email;?>" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Family Member</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="fmember" placeholder="Enter The No Of Family Members" class="form-control" type="text" required value="<?php echo $fmember;?>" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Phase No</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input name="phaseno" placeholder="Enter The Phase No" class="form-control" type="text" required value="<?php echo $phaseno;?>" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Wing No</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
                                <input name="wing" placeholder="Enter Wing No" class="form-control" type="text" required value="<?php echo $wing;?>" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Floor No</label>
                        <div class="col-md-4 selectContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                <select name="floorno" class="form-control selectpicker" required value="<?php echo $floorno;?>">
                                    <option>Select Floor No</option>
                                    <option>Ground</option>
                                    <option>First</option>
                                    <option>second</option>
                                    <option>Third</option>
                                    <option>Fourth</option>
                                    <option>Fifth</option>
                                    <option>sixth</option>
                                    <option>seventh</option>
                                    <option>Eighth</option>
                                    <option>Nineth</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Flat No</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
                                <input name="flatno" placeholder="Enter The Flat No" id="flatno" class="form-control" type="text" required value="<?php echo $flatno;?>" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Flat Type</label>
                        <div class="col-md-4 selectContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                <select name="flattype" class="form-control selectpicker" required value="<?php echo $flattype;?>">
                                    <option value="">Select Your Flat Type</option>
                                    <option>1RK </option>
                                    <option>1BHK </option>
                                    <option>1.5BHK</option>
                                    <option>2BHK</option>
                                    <option>2.5BHK</option>
                                    <option>3BHK</option>
                                    <option>4BHK</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Buildup Area</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
                                <input name="areatype" placeholder="Enter Buildup Area" class="form-control" type="text" value="<?php echo $areatype;?>" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Carpet Area</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
                                <input name="areasq" placeholder="Enter Carpet Area" class="form-control" type="text" value="<?php echo $areasq;?>" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Usages</label>
                        <div class="col-md-4 selectContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <select name="usages" class="form-control selectpicker" required value="<?php echo $usages;?>">
                                    <option value="">Select Your Usages</option>
                                    <option value="<?php echo $row['usages'];?>"></option>
                                    <option value="self occupied">Self Occupied</option>
                                    <option value="Tentent">Tentent</option>
                                    <option>Empty</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-md-4 control-label">Parking No</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-bullhorn"></i></span>
                                <input name="parkingno" placeholder="Enter The Parking No" class="form-control" type="text" required value="<?php echo $parkingno;?>" />
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Upload Photo</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span>
                                <input name="upload" placeholder="Upload file" class="form-control" type="file" required value="<?php echo $upload;?>" />
                            </div>
                        </div>
                    </div>
                    <br>


                    <!-- Success message -->

                    <!-- Button -->

                    <div class="form-group">
                        <div class="col-md-4 col-lg-offset-4 inputGroupContainer">
                            <button type="submit" class="btn btn-success" name="save" id="save">Save</button>
                            <button type="submit" class="btn btn-success" name="update" id="update">Update</button>
                            <input type="hidden" name="upload" id="upload" class="form-control" placeholder="upload here" value="<?php echo $upload;?>" />
                            <input type="hidden" name="id" id="id" value="<?php echo $id;?>" />
                            <input type="hidden" name="societyid" id="societyid" value="1" value="<?php echo $societyid;?>" />

                            <button id="reset" type="reset" class="btn btn-success">Reset</button>

                        </div>
                    </div>
                </fieldset>
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
         </main>
      </div>
      <script src="./mdl/material.min.js"></script>
      <script src="./mdl/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   </body>
</html>