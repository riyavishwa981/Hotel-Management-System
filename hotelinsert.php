<?php
include 'conn.php';
if(isset($_POST['done'])){
    $hotel_name =$_POST['hotel_name'];
    $location =$_POST['location'];
    $address =$_POST['address'];
    $contact =$_POST['contact'];
    $email =$_POST['email'];
    $price =$_POST['price'];
    $description =$_POST['description'];
    $discount =$_POST['discount'];
 
    $q="INSERT INTO `crudhotel`( `hotel_name`, `location`, `address`, `contact`, `email`, `price`, `description`, `discount`) 
    values ('$hotel_name','$location','$address','$contact','$email','$price',' $description','$discount') ";
    $query = mysqli_query($con,$q);
    header('location:hoteldisplay.php');  
    
}




?>
<html>
<head>
    <title>Add admin</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"> 

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
        body{
    margin: 0;
    padding: 0;
    background: url(Skopelos-Hotels-Adrina-8-Quadruple.jpg);
    background-size:auto;
    background-repeat:no-repeat;
    background-position: center;
    font-family: sans-serif;
}
.login-box{
    width: 620px;
    height: 780px;
    
    
    box-shadow: 4px 3px 8px 1px #0c0c0c;
    color: #fff;
    top: 65%;
    left: 50%;
    margin-top: 220px;
    margin-bottom: 300px;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 25px 30px;
    border-radius: 20px;
}
.login-box input[type="text"], input[type="password"],input[type="tel"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
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
                                                      <li class="active"><a href="adminpage.html"><div class="nav_item d-flex flex-column align-items-center justify-content-center"><span>Admin</span></div></a></li>
                                                </ul>
                                          </nav>
                                      
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
                        <li><a href="HomePage.html">Home</a></li>
                        <li><a href="loginadmin.html">Register</a></li>
                        <li><a href="rooms.html">Explore</a></li>
                        <li><a href="news.html">My Account</a></li>
                        <li><a href="adminpage.html">Admin</a></li>
                  </ul>
                  <div class="menu_review"><a href="#">Add your review</a></div>
            </div>
      </div>

    <div class="login-box" style="height: 900px; margin-top: 160px;">
        <h1 style="text-align: center; padding-bottom: 20px;" class="loginhere">Insert Hotel</h1>
            <form action="hotelinsert.php" method="post">        
            <br><p>Name of the hotel</p>
            <input type="text" class="form-control" name="hotel_name" placeholder="Enter hotel name" required="true">
            <p>location</p>
            <input type="text" class="form-control" name="location" placeholder="Enter location" required="true">
            <p>Address</p>
            <input type="text" class="form-control" name="address" placeholder="Enter address" required="true"> 
            <p>Contact</p>  
            <input type="number" class="form-control"  name="contact" maxlength="10" placeholder="Enter number" 
            required="true" required maxlength="10" required input type="number">
            <p>Email</p>
            <input type="email" class="form-control" name="email" placeholder="Enter valid Email Id" required="true"> 
            <p>Price</p>
            <input type="number" class="form-control" name="price" placeholder="Enter price" required="true"> 
            <p>Discount</p>
            <input type="number" class="form-control" name="discount" placeholder="Enter discount in %" required="true"> 
            <p>Description</p>
            <input type="text" class="form-control" name="description" placeholder="Enter description" required="true"> 
            <image>

           <div>
            <button class="buttonnew" type="submit" name="done"><b>Insert</b></button>  
           </div>
             
            </form>
        
        
        </div>

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