
<!DOCTYPE html>
<html>
<head>

	<title>display page</title>
	
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



<style>
	 body{

  	background-color: #fff;
  }
  
table th{
	border: 2px solid #fff;
	border-collapse:collapse ;
background-color: #5a2360;
color: #fff;
text-align: center;
}

table td{
	border: 1px solid #5a2360;
}
table th tr {
 font-size:2px;
 
}
table tr:hover {
	background-color: 
}
table tr {
color: #5a2360;
font-style: bold;
}


table{
 border:2px solid #5a2360;
 border-collapse:collapse;
 width: 800px;
  height: auto;
  justify-content: center;
  margin-left:0px;
  margin-right: 200px;
  
  
}

</style>



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
                <ul class="d-flex flex-row align-items-center justify-content-start" style="margin-left: 750px;">
                  <li><a href="HomePage.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Home</span></div></a></li>
                  <!--<li><a href="loginadmin.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Register</span></div></a></li>
                  <li><a href="hotellistsexplore.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Explore</span></div></a></li>
                  <li><a href="news.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>My Account</span></div></a></li>-->
                  <li class="active"><a href="adminpage.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Admin</span></div></a></li>
                </ul>
              </nav>
              
              <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

</head>
<!-----table---->
<body>
	
<br><br><br><h3 style="margin-top: 100px; text-align: center; color:#5a2360;">Customer's Booking details</h3>
	<br><br><table id="Customer" class="table" width="900px">
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Address</th>
        <th>Hotel Name</th>
        <th>Adults</th>
        <th>Kids</th>
        <th>Rooms</th>
        <th>Checkin Date</th>
        <th>Checkout Date</th>
        <th>Services</th>
        <th>Delete</th>
        <th>Update</th>

      </tr>

    <?php

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'hotelhunt');

	$qy = "select* from book";
	$ch = mysqli_query($con, $qy);

    while ($res = mysqli_fetch_array($ch)) {
    	
    ?>

  <tr>
        <td><?php echo $res['id']?></td>
        <td><?php echo $res['name']?></td>
        <td><?php echo $res['email']?></td>
        <td><?php echo $res['contact']?></td>
        <td><?php echo $res['address']?></td>
        <td><?php echo $res['hotelname']?></td>
        <td><?php echo $res['no_adults']?></td>
        <td><?php echo $res['no_kids']?></td>
        <td><?php echo $res['no_rooms']?></td>
        <td><?php echo $res['checkin_date']?></td>
        <td><?php echo $res['checkout_date']?></td>
        <td><?php echo $res['services']?></td>
         <td><button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']?>" class="text-white">DELETE </a> </button></td>
         <td><button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id']?>" class="text-white"> UPDATE</a></button></td>
         	

         
      </tr>
      <?php
       
       }

      ?>


</table>



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

</body>
</html>