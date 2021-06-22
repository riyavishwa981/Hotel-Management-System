<?php

session_start();

$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'hotelhunt');



$qy = "select first_name,last_name,feedback,rating from userfeedback";

$query = mysqli_query($con, $qy);


?>



<!DOCTYPE html>
<html>
<head>
	<title>Reviews</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Samira hotel template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.2.0/jquery.rateyo.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.2.0/jquery.rateyo.min.js"></script>

<style>
.round1 {
  border: 2px solid;
  border-radius: 5px;
  border-color: #E6E6FA;
  background-color: #5a2360;
  padding-right: 20px;
  padding-left: 20px;
  padding-top: 15px;
  padding-bottom: 15px;

}


body {
  font-family: Arial;
  margin: 0 auto; /* Center website */
  /* Max width */
 
}

.btn {
  border: 2px solid black;
  background-color: white;
  color: black;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  float: right;
}
.button1 {width: 200px;}
.default:hover {
  background:  #d6baa0;
}


.checked {
  color: orange;
}

.hotel{
   max-width: 800px;
   margin-top:20px;
  
}
.header2 {
  padding: 60px;
  text-align: center;
  background: #5a2360;
  color: white;
  font-size: 30px;
  margin-top: 120px;
  height: 300px;
}

.center {
  max-width: 800px; /* Max width */
  padding: 20px;
margin: 0 auto; /* Center website */
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
                                                <ul class="d-flex flex-row align-items-center justify-content-start">
                                                      <li><a href="HomePage.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Home</span></div></a></li>
                                                      <li><a href="loginuser.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Register</span></div></a></li>
                                                      <li><a href="hotellistsexplore.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Explore</span></div></a></li>
                                                      <li><a href="news.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>My Account</span></div></a></li>
                                                      <li><a href="loginadmin.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Admin</span></div></a></li>
                                                </ul>
                                          </nav>
                                          <a href="filterPage.html" class="button_container header_button ml-auto"><div class="button text-center"><span>BOOK  Now</span></div></a>
                                          <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                                          <div class="header_review"><a href="feedback.html">Add your review</a></div>
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


<div class="center">
<div class="header2">
  <h1 style="font-size: 50px; color: white;">The Taj Mahal Palace, Mumbai</h1>
  <p style="color: white;">Refined rooms in a high-end seafront hotel with 11 restaurants & bars, plus a luxe spa & pool.</p>
</div>

<div class="hotel">
<div>
    <a href="feedback.php">
  <button class="btn default button1">Give Feedback</button></a>
	<h1 style="font-size: 50px; ">Reviews:</h1>
</div>


<?php

    

    $con = mysqli_connect('localhost','root');

    mysqli_select_db($con,'hotelhunt');


    $qy = "select first_name,last_name,feedback,rating from userfeedback";

    $query = mysqli_query($con, $qy);

    while($res = mysqli_fetch_array($query)){
    

?>

<div class="round1">
  <h4 style="color: white;"><?php echo $res['first_name']; ?> <?php echo $res['last_name']; ?></h4>
<h4 style="color: white;"><?php echo $res['rating']; ?>  <span class="fa fa-star checked"></span></h4>
<!--<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>-->

  <p style="color: white;"><?php echo $res['feedback']; ?></p>
</div>

<div>
  <h1>
    
  </h1>
</div>

<?php
      }
    ?>

<div>
	<h1>
		
	</h1>
</div>

<!--<div class="round1">
  <h4 style="color: white;">By Neelam Yadav</h4>

  <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>

  <p style="color: white;">One of the finest hotel in India since Britishers were ruling. It's a five star hotel. Very iconic one . I haven't checked in to the hotel since it's for the wealthiest! But the look from the outside is just marvelous. I hope one day I'll be rich enough spend a night in one of the sea facing suites. If you're rich and an Indian, you should spend a night here. The location is just beautiful. Near the gate way of India.</p>
</div>

<div>
	<h1>
		
	</h1>
</div>

<div class="round1">
  <h4 style="color: white;">By Riya Vishwakarma</h4>

  <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>

  <p style="color: white;">Drive away to our beautiful city resorts and luxury retreats to be with your near and dear ones. Enjoy our warm hospitality and service in your own private villas, beautiful bungalows and luxurious suites as we make you feel at home.These cozy rooms located in the historic Palace Wing are the gateway to a memorable experience. Perfect for meditation, these windowless rooms offer you complete tranquillity. Designed for our jet-setting business travellers who require silence</p>
</div>

<div>
	<h1>
		
	</h1>
</div>

<div class="round1">
  <h4 style="color: white;">By Safa Umatia</h4>

  <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>

  <p style="color: white;">Loved the place. Loved the stay.. Loved the hospitality.. everything was just excellent.. The breakfast was too great.. in these Covid times.. it was a sigh of relief staying here at this property!</p>
</div>

<div>
	<h1>
		
	</h1>
</div>

<div class="round1">
  <h4 style="color: white;">By Aroma Sinha</h4>

  <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>

  <p style="color: white;">Stayed here for a week's quarantine after an international flight. The staff were extremely friendly and took care of our every need. Everyone had complete PPE on and took all precautions to make us feel safe. We were served a wide variety of good quality food, and all service requests were completed very quickly. There's a reason why this hotel is considered one of the best in India and the Taj brand is synonymous with customer satisfaction, and I hope to stay here again after the pandemic ends!</p>
</div>
<div>
	<h1>
		
	</h1>
</div>


<div class="round1">
  <h4 style="color: white;">By Yashika Varshney</h4>

  <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
  <p style="color: white;">World class authentic five star hotel. Rooms and services are very good like any other five star hotels but the museum like feel in each floor with super vintage collection makes it different. Few rooms got sea and Gateway of India view and food is also delicious.</p>
</div>

<div>
	<h1>
		
	</h1>
</div>


<div class="round1">
  <h4 style="color: white;">By Anahita Gupta</h4>

  <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>

  <p style="color: white;">Amazing building... This hotel is not only the landmark of Mumbai. The Taj is now a landmark of India. It is very beautiful to see at evenings. Elegant place having stunning building. Many horse carts are there in this area.</p>
</div>

<div>
	<h1>
		
	</h1>
</div>

<div class="round1">
  <h4 style="color: white;">By Pallavi Vishwakarma</h4>

  <span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>

  <p style="color: white;">The place is fabulous. It was one of the brightest event in my visiting of India. With its history and up to date conveniences at once. I can recommend this place without hesitations. It's worth seeing.</p>
</div>-->

</div>
</div>

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
</html>>