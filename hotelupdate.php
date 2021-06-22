<?php
session_start();
$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'hotelhunt');

if(isset($_POST['submit'])) {
$id = $_GET['id'];	
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$add = $_POST['address'];
$hn = $_POST['hname'];
$adl = $_POST['adults'];
$kid = $_POST['kids'];
$room = $_POST['rooms']; 
$cin = $_POST['checkin'];
$cout = $_POST['checkout'];
$checkbox1=$_POST['services'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }

    $qy = "update book set id='$id', name='$name', email='$email', contact='$contact', address='$add', hotelname='$hn', no_adults='$adl', 
           no_kids='$kid', no_rooms='$room', checkin_date='$cin', checkout_date='$cin', services='$chk' where id='$id' ";
	$ch = mysqli_query($con, $qy);

	if($ch==1)  
   {  
      echo'<script>alert("Updated Successfully")</script>';  
      header('location:hoteldisplay.php');
   }  
   else  
   {  
      echo'<script>alert("Failed To Updated")</script>';  
   }  
	
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Booking form</title>
	<link rel="stylesheet" type="text/css" href="styles/bookingform.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script
  <script>
  $( function() {
    $( ".datepicker" ).datepicker({
                  dateFormat : 'yy-mm-dd'
                });
  } );
  </script>

	
</head>
<body>

 <header class="header">
    <div class="header_content">

      <!-- Logo -->
      <div class="logo_container d-flex flex-column align-items-center justify-content-center">
        <div class="logo">
          <a href="#" class="text-center">
            <div class="logo_subtitle">Hotel</div>
            <div class="logo_title">Hunt</div>
            <div class="logo_stars">
              <ul class="d-flex flex-row align-items-start justfy-content-start">
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
              </ul>
            </div>
          </a>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="header_inner d-flex flex-row align-items-center justify-content-start">
              <nav class="main_nav">
                <ul class="d-flex flex-row align-items-center justify-content-start">
                  <li><a href="HomePage.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Home</span></div></a></li>
                  <li><a href="loginuser.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Register</span></div></a></li>
                  <li><a href="hotellistsexplore.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Explore</span></div></a></li>
                  <li><a href="news.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>My Account</span></div></a></li>
                  <li><a href="adminpage.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Admin</span></div></a></li>
                </ul>
              </nav>
              <a href="#" class="button_container header_button ml-auto"><div class="button text-center"><span>Book Your Stay</span></div></a>
              <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
              <div class="header_review"><a href="#">Add your review</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Menu -->

  <div class="menu">
    <div class="background_image" style="background-image:url(images/menu.jpg)"></div>
    <div class="menu_content d-flex flex-column align-items-center justify-content-center">
      <ul class="menu_nav_list text-center">
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">Register</a></li>
        <li><a href="rooms.html">Explore</a></li>
        <li><a href="news.html">My Account</a></li>
        <li><a href="contact.html">Admin</a></li>
      </ul>
      <div class="menu_review"><a href="#">Add your review</a></div>
    </div>
  </div>

 

	<div class="container formhome" style="width: 650px;">
		<div class="page-header">
			<h2 style="text-align: center; color:white;">Update Booking details</h2>
		</div>
		<form method="post" >
			<div  class="form-group" >
				<label for="user"style="color: white; font-size: 18px;">Name *</label>
				<input id="user" type="text" class="form-control" required="true" placeholder="Enter Full name" name="name">
			</div>
			<div class="form-group">
				<label style="color: white; font-size: 18px;">E-mail *</label>
				<input type="email" class="form-control" required="true" placeholder="Enter valid email address" name="email">
			</div>
			<div class="form-group">
				<label style="color: white; font-size: 18px;">Contact No. *</label>
				<input type="text" class="form-control" required="true" placeholder="Enter contact Number" name="contact">
			</div>
			<div class="form-group">
				<label style="color: white; font-size: 18px;">Address *</label>
				<input type="textarea" class="form-control" required="true" placeholder="Enter address" name="address">
			</div>
			<div class="form-group" style="font-size: 18px;">
                <label style="color: white; font-size: 18px;" for="hotels">Hotel Name *</label><br>
                <select id="hotelname" name="hname" class="form-control" required="true">
                  <option value="Taj Hotel,Mumbai">Taj Hotel,Mumbai</option>
                  <option value="Ambassdor Group of Hotel">Ambassdor Group of Hotel</option>
                  <option value="Hilton Mumbai International Airport">Hilton Mumbai International Airport</option>
                  <option value="J.W Marriott Hotel">J.W Marriott Hotel</option>
                  <option value="ITC Grand Central Hotel">ITC Grand Central Hotel</option>
                  <option value="ITC Maratha,Mumbai">ITC Maratha,Mumbai</option>
                  <option value="J.W Marriott,Mumbai Sahar">J.W Marriott,Mumbai Sahar</option>
                  <option value="Novotel Mumbai Juhu Beach">Novotel Mumbai Juhu Beach</option>
                  <option value="Ramada Plaza Palm Grove">Ramada Plaza Palm Grove</option>
                </select>
            </div>
			<div class="form-group">
				<label style="color: white; font-size: 18px;">No. of Adults</label>
				<input type="number" class="form-control" required="true" placeholder="Enter number of adults" name="adults">
			</div>
			<div class="form-group">
				<label style="color: white; font-size: 18px;">No. of Kids</label>
				<input type="number" class="form-control" required="true" placeholder="Enter number of kids" name="kids">
			</div>
			<div class="form-group">
				<label style="color: white; font-size: 18px;">No. of Rooms *</label>
				<input type="number" class="form-control" required="true" placeholder="Enter number of rooms" name="rooms">
			</div>
			<br>
			<div class="form-group">
				<label style="color: white; font-size: 18px;">Check In *</label>
				<input type="text" class="datepicker" style="padding-left: 50px" class="form-control" required="true" placeholder="Enter check in date" name="checkin">
			</div>
			<br>
			<div class="form-group">
				<label style="color: white; font-size: 18px;">Check out *</label>
				<input type="text" class="datepicker" style="padding-left: 50px" class="form-control" required="true" placeholder="Enter check out date" name="checkout">
			</div>
			<br>
			<div  class="form-group" >
				<label style="color: white; font-size: 18px;" >Other Required Service</label>
				<div class="checkbox">
					<label style="color: white;"><input type="checkbox" value="Parking facility" name="services[]"><b>Parking facility</b></label>
				</div>
				<div class="checkbox">
					<label style="color: white;"><input type="checkbox" value="Room Service" name="services[]"><b>Room Service</b></label>
				</div>
				<div class="checkbox">
					<label style="color: white;"><input type="checkbox" value="Spa service" name="services[]"><b>Spa Service</b></label>
				</div>
				<div class="checkbox">
					<label style="color: white;"><input type="checkbox" value="Gym service" name="services[]"><b>Gym Service</b></label>
				</div>
			</div>

			<div  class="form-group">
					<input type="submit" name="submit" class="buttonnew" value="Update Now">	
			</div>
		</form>
	</div>

	<br>
<br>

 <footer class="footer" style="background-color: #5a2360;">
            <div class="container">
                  <div class="row">

                        <!-- Footer Logo -->
                        <div class="col-lg-3 footer_col">
                              <div class="footer_logo_container">
                                    <div class="footer_logo">
                                          <a href="#" class="text-center">
                                                <div class="footer_logo_subtitle" style="color: white;">hotel</div>
                                                <div class="footer_logo_title" style="color: white;">Hunt</div>
                                                <div class="footer_logo_stars">
                                                      <ul class="d-flex flex-row align-items-start justfy-content-start">
                                                            <li><i class="fa fa-star" aria-hidden="true" style="color: white;"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true" style="color: white;"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true" style="color: white;"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true" style="color: white;"></i></li>
                                                            <li><i class="fa fa-star" aria-hidden="true" style="color: white;"></i></li>
                                                      </ul>
                                                </div>
                                          </a>
                                    </div>
                                    <div class="copyright">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by Hotel Hunt

</div>
                              </div>
                        </div>

                        <!-- Footer Menu -->
                        <div class="col-lg-5 footer_col">
                              <div class="footer_menu">
                                    <ul class="d-flex flex-row align-items-start justify-content-start">
                                          <li><a href="index.html" style="color: white;">Home</a></li>
                                          <li><a href="about.html" style="color: white;">Register</a></li>
                                          <li><a href="rooms.html" style="color: white;">Explore</a></li>
                                          <li><a href="news.html" style="color: white;">My Account</a></li>
                                          <li><a href="contact.html" style="color: white;">Admin</a></li>
                                    </ul>
                                    <div class="footer_menu_text">
                                          <p>The best online booking website. We assure to provide the best services to our customers.</p>
                                    </div>
                              </div>
                        </div>

                        <!-- Footer Contact -->
                        <div class="col-lg-4 footer_col">
                              <div class="footer_contact clearfix">
                                    <div class="footer_contact_content float-lg-right">
                                          <ul>
                                                <li style="color: white;">Address: <span>52 Park Lane Colaba MU 30424</span></li>
                                                <li style="color: white;">Phone: <span>+91 022 7953 3453</span></li>
                                                <li style="color: white;">Email: <span>hotelhunt@gmail.com</span></li>
                                          </ul>
                                    </div>
                              </div>
                        </div>

                  </div>
            </div>
      </footer>



</html>