<!DOCTYPE html>
<html>
<head>
  <title>Taj Mahal Palace, Mumbai</title>

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
<style>
  /* Style the body */
body {
  font-family: Arial;
  margin: 0;
}

/* Header/Logo Title */
.header2 {
  padding: 60px;
  text-align: center;
  background: #5a2360;
  color: white;
  font-size: 30px;
  margin-top: 10px;
  height: 350px;
}


/* Page Content */
.content {padding:20px;}

.btn {
  border: 2px solid black;
  border-radius: 10px;
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

/*table part style*/
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;

}

th, td {
  text-align: center;
  padding: 16px;
}

th:first-child, td:first-child {
  text-align: left;
}

tr:nth-child(even) {
  background-color: #f2f2f2
}

.fa-check {
  color: green;
}

.fa-remove {
  color: red;
}

* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}


/* Position the "next button" to the right */
.next {
  right: 0%;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}


/* Caption text */
.text {
  color: #000000;
  font-size: 25px;
  padding: 8px 12px;
  position: absolute;
  bottom: 450px;
  width: 75%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #000000;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}


/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
.active, .dot:hover {
  background-color: #717171;
}


/* Fading animation*/
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1000000000000000000s;
}


@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}


/*user rating*/
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  margin: 0 auto; /* Center website */
 /* Max width */
  padding: 20px;
}

.heading {
  font-size: 25px;
  margin-right: 25px;
}

.fa {
  font-size: 25px;
}

.checked {
  color: orange;
}

/* Three column layout */
.side {
  float: left;
  width: 15%;
  margin-top:10px;
}

.middle {
  margin-top:10px;
  float: left;
  width: 70%;
}

/* Place text to the right */
.right {
  text-align: right;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The bar container */
.bar-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}

/* Individual bars */
.bar-5 {width: 81%; height: 18px; background-color: #4CAF50;}
.bar-4 {width: 14%; height: 18px; background-color: #2196F3;}
.bar-3 {width: 2%; height: 18px; background-color: #00bcd4;}
.bar-2 {width: 1%; height: 18px; background-color: #ff9800;}
.bar-1 {width: 2%; height: 18px; background-color: #f44336;}

/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
  .side, .middle {
    width: 100%;
  }
  .right {
    display: none;
  }
}

.round2 {
  background: #5a2360;
  padding-left: 30px;
  padding-right: 30px;
  padding-top: 20px;
  padding-bottom: 10px;
  height: 350px;
}
.hotel{
  width: 800px;
  margin-left: 300px;
  margin-right: 150px;

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
              <a href="booknow.php" class="button_container header_button ml-auto"><div class="button text-center"><span>Book Your Stay</span></div></a>
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
<?php


$con = mysqli_connect('localhost','root');


mysqli_select_db($con,'hotelhunt');

$id=$_GET['id'];
$qy = "select * from resortdetail where id='$id'";

$query = mysqli_query($con, $qy);
$res = mysqli_fetch_array($query);

?>
<div>
  <img style="margin-left: 300px; margin-right: 150px; margin-top: 120px; width: 800px; height: 500px;  " src="<?php echo $res['image']; ?>" >
</div>


<div class="hotel">
<div class="header2">
  <h1 style="font-size: 50px; color: white;"><?php echo $res['name']; ?></h1><br>
  <p style="color: white;"><?php echo $res['location']; ?></p>
  <br>


  <button class="btn default button1" style="margin-right: 250px;">Book Now</button> 
</div>

<div>
  <h1>        </h1>
</div>

<div class="round2">
  <h1 style="font-size: 30px; color: white;">Prices: <?php echo $res['price']; ?></h1>
  <h1 style="font-size: 30px; color: white;">Discount: <?php echo $res['discount']; ?>%</h1>
   <p style="color: white;">(To book the hotel please click the Book Now button)</p>
  <h1 style="font-size: 30px; color: white;">Contact Us:</h1>
  
  <address style="color: white;"><b><?php echo $res['address']; ?></b></address>
  <a href="https://maps.google.com/maps?gl=IN&hl=en&um=1&ie=UTF-8&fb=1&sa=X&geocode=Kf___2_A0ec7MVc_16SFBCnA&daddr=The+Taj+Mahal+Palace,+Mumbai,+Apollo+Bandar,+Colaba,+Mumbai,+Maharashtra+400001">
  <button class="btn default button1">Get Directions</button></a>
  <p style="color: white;"><b>Contact Number: <?php echo $res['contactno']; ?></b></p>
  
  <p style="color: white;"><b>Email: <?php echo $res['email']; ?></b></p>
  
</div>

<div class="content">
  <a href="slideshowstajhotelnew.php?id=<?php echo $res['id']; ?>">
  <button class="btn default button1">View All Photos</button></a>
  <h1 style="font-size: 30px;">Photos:</h1>
  </div>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="https://lh3.googleusercontent.com/proxy/av_rYkKpDNyyShnfj5DsS1EP7BCht2A9Xc5-w6bGtXRnxRsMpVDSjQJ13gxEIuovPtfxo42Mdv4xdO6vmCnOvrBrqlkfaS6fdYUGJfydqsfkdtXnxticTgPnvCwSdr6TRsmrsutd1SrrohE-icRzxYlRl-MlAXA=w592-h404-n-k-rw-no-v1" style="width:100%">
  <div class="text">Delux Room</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="https://lh3.googleusercontent.com/proxy/6mO6fYmFg4KlV-3X1ty-8DRiH7A9SJz_kJIwQ0L0nRdkAwKO3bmReVlysOMXl4sWAZu0A7Re-AXaVKVuLyWiwe_RY30c5ENPV7ntxUJDJvBHlPTG7uaGLzQy_gE-InZpaXywiQynoJ8R7vJjMxlEhR8Pbr-x_yQ=w592-h404-n-k-rw-no-v1" style="width:100%">
  <div class="text">Delux Bathroom</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="https://lh3.googleusercontent.com/proxy/RNtuB2teAfcpHFQVtNptHaQ-VyMisg5DldJqmyHt3TPNp1fkAloDKQUBw1163Dq8F8bpjQscCaQmU0_reYJ-eu6deHv3fo3q68LZBSuH-TmkTP7yj0PSUEkpnZ2h13j4d4M7NJMgtFhf_9-uC4KY1hJD52qVN9M=w592-h404-n-k-rw-no-v1" style="width:100%">
  <div class="text">Super Delux Room</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>



<div class="content">

  <a href="moredetails.php">
  <button class="btn default button1">View More Details</button></a>
  <h1 style="font-size: 30px;">About this hotel:</h1>

  
  <p><?php echo $res['detail']; ?></p>
  <p><b>Check-in time: 2:00 PM</b></p>
  <p><b>Check-out time: 12:00 PM</b></p>

</div>

<div class="content">
<h2 style="font-size: 30px;">Popular amenities:</h2>
</div>

<table>
  <tr>
    <th style="width:50%">Features</th>
    <th>Availablity</th>
  </tr>
  <tr>
    <td>Pool</td>
    <td><i class="fa fa-check"></i></td>
  </tr>
  <tr>
    <td>Spa</td>
    <td><i class="fa fa-check"></i></td>
  </tr>
  <tr>
    <td>Wifi</td>
    <td><i class="fa fa-check"></i></td>
  </tr>
  <tr>
    <td>Air Conditioning</td>
    <td><i class="fa fa-check"></i></td>
  </tr>
  
</table>

<h1 style="font-size: 30px;">User Ratings:</h1>
<a href="tajhotelreviews.php">
<button class="btn default button1">View Reviews</button></a>

<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<p>4.7 average based on 25,200 reviews.</p>
<hr style="border:3px solid #f1f1f1">

<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5"></div>
    </div>
  </div>
  <div class="side right">
    <div>81%</div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4"></div>
    </div>
  </div>
  <div class="side right">
    <div>14%</div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3"></div>
    </div>
  </div>
  <div class="side right">
    <div>2%</div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2"></div>
    </div>
  </div>
  <div class="side right">
    <div>1%</div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1"></div>
    </div>
  </div>
  <div class="side right">
    <div>2%</div>
  </div>
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
</html> 
