<?php

session_start();

$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'hotelhunt');

$qy = "select id,name,location from resortdetail";

$query = mysqli_query($con, $qy);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Home Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
	<style type="text/css">
		.admin{
			border: 1px solid transparent;
			box-shadow: 4px 3px 8px 1px #0c0c0c;
			width: 600px;
			margin-left: 350px;	
			background-color: #5a2360;
			padding-top: 12px;
			padding-bottom: 12px;
			
		}
		.mainpage{
			margin-top: 250px;
		}
		.see{
			text-align: center;
			font-size: 23px;
			color: white;
			font-style: bold;	
		}
		.admin:hover{
			background-color: #d6baa0;
			transform:scale(1.1);

		}
		.see:hover{
			color: black;
		}
	</style>
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
                <ul class="d-flex flex-row align-items-center justify-content-start" style="margin-left: 750px;">
                  <li><a href="HomePage.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Home</span></div></a></li>
                  <!--<li><a href="loginadmin.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Register</span></div></a></li>
                  <li><a href="rooms.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Explore</span></div></a></li>
                  <li><a href="news.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>My Account</span></div></a></li>-->
                  <li  class="active"><a href="resortdisplay.php"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Admin</span></div></a></li>
                </ul>
              </nav>
              <!--<a href="#" class="button_container header_button ml-auto"><div class="button text-center"><span>Book Your Stay</span></div></a>
              <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
              <div class="header_review"><a href="#">Add your review</a></div>-->
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
<br>
<br>
<br>


<div class="container" style="margin-top: 100px;">
	<div class="col-lg-12">
		
		<h3 class="text-center">RESORT AND VILLAS</h3>
		<br>


		<table class="table table-striped table-hover  table-bordered">
			<tr style="background-color: #5a2360;">
				<th class="text-white text-center">ID</th>
				<th class="text-white text-center">NAME</th>
				<th class="text-white text-center">LOCATION</th>
				<th class="text-white text-center">DELETE</th>
				<th class="text-white text-center">UPDATE</th>
				<th class="text-white text-center">VIEW</th>
			</tr>
<?php

		

		$con = mysqli_connect('localhost','root');

		mysqli_select_db($con,'hotelhunt');


		$qy = "select id,name,location from resortdetail";

		$query = mysqli_query($con, $qy);

		while($res = mysqli_fetch_array($query)){


?>


			<tr class="text-center" style="color:black;">
				<td><?php echo $res['id']; ?></td>
				<td><?php echo $res['name']; ?></td>
				<td><?php echo $res['location']; ?></td>
				<td><button class="btn btn-danger"><a href="resortdelete.php?id=<?php echo $res['id']; ?>" class="text-white">DELETE</a></button></td>
				<td><button class="btn btn-success"><a href="resortupdate.php?id=<?php echo $res['id']; ?>" class="text-white">UPDATE</a></button></td>
				<td><button class="btn btn-primary"><a href="resortview.php?id=<?php echo $res['id']; ?>" class="text-white">VIEW</a></button></td>
			</tr>

		<?php
			}
		?>

		</table>


	</div>
</div>

<br>
<br>
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
	
</body>
</html>