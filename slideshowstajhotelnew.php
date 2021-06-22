<!DOCTYPE html>
<html>
<title>All photos</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
body {
  font-family: Arial;
  margin: 0;

}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container1 {
  position: relative;

}

/* Hide the images by default */
.mySlides {
  display: none;
  max-width: 950px;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 130%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
  margin-left: 320px;
  margin-right: 320px;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;

}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

.hotel{
  width: 800px;
  

}
.header2 {
  padding: 60px;
  text-align: center;
  background: #5a2360;
  color: white;
  font-size: 30px;
  margin-top: 130px;
  height: 250px;
}

.center {
  max-width: 800px; /* Max width */
  padding: 20px;
margin: 0 auto; /* Center website */
}


</style>
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
              <a href="#" class="button_container header_button ml-auto"><div class="button text-center"><span>Book Your Stay</span></div></a>
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


  <?php


$con = mysqli_connect('localhost','root');


mysqli_select_db($con,'hotelhunt');

$id=$_GET['id'];
$qy = "select name,location,images from resortdetail where id='$id'";

$query = mysqli_query($con, $qy);
$res = mysqli_fetch_array($query);

?>

<div class="center">
<div class="header2">
  <h1 style="font-size: 50px; color: white;"><?php echo $res['name']; ?></h1>
  <p style="color: white;"><?php echo $res['location']; ?></p><br>
</div>
</div>
<div>
  <h1 style=" margin-left: 320px; font-size: 50px;">All Photos:</h1>
</div>

<?php


$con = mysqli_connect('localhost','root');


mysqli_select_db($con,'hotelhunt');

$id=$_GET['id'];
$i="";
$qy = "select images from resortdetail where id='$id'";

$fire = mysqli_query($con, $qy);
$data = mysqli_fetch_array($fire);
$res = $data['images'];
$res = explode(" ",$res);
$count = count($res)-1;
for($i=0;$i<$count;++$i){


?>

<center>
<div class="container1">
  <div class="mySlides">
    <div class="numbertext">1 / 10</div>
    <img src="upload/<?= $res[$i]?>" style="width:80%">
  </div>
<!--
  <div class="mySlides">
    <div class="numbertext">2 / 10</div>
    <img src="https://lh3.googleusercontent.com/proxy/av_rYkKpDNyyShnfj5DsS1EP7BCht2A9Xc5-w6bGtXRnxRsMpVDSjQJ13gxEIuovPtfxo42Mdv4xdO6vmCnOvrBrqlkfaS6fdYUGJfydqsfkdtXnxticTgPnvCwSdr6TRsmrsutd1SrrohE-icRzxYlRl-MlAXA=w592-h404-n-k-rw-no-v1" style="width:80%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 10</div>
    <img src="https://lh3.googleusercontent.com/proxy/6mO6fYmFg4KlV-3X1ty-8DRiH7A9SJz_kJIwQ0L0nRdkAwKO3bmReVlysOMXl4sWAZu0A7Re-AXaVKVuLyWiwe_RY30c5ENPV7ntxUJDJvBHlPTG7uaGLzQy_gE-InZpaXywiQynoJ8R7vJjMxlEhR8Pbr-x_yQ=w592-h404-n-k-rw-no-v1" style="width:80%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 10</div>
    <img src="https://lh3.googleusercontent.com/proxy/RNtuB2teAfcpHFQVtNptHaQ-VyMisg5DldJqmyHt3TPNp1fkAloDKQUBw1163Dq8F8bpjQscCaQmU0_reYJ-eu6deHv3fo3q68LZBSuH-TmkTP7yj0PSUEkpnZ2h13j4d4M7NJMgtFhf_9-uC4KY1hJD52qVN9M=w592-h404-n-k-rw-no-v1" style="width:80%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 10</div>
    <img src="https://lh3.googleusercontent.com/proxy/C9GxgdW0diPddQgHhxMVrIkfgeoCFcNPeVJqQdlPwLCnnjnmWv8J1Ici8m7nHHK1JFOcODoSovYsaW1cytDftOST__cLSVScvVAAshy_sAW-pFC7GIjcSV18EBPJlYV2h8GYybIM9PvCpf6YQdR9lTNgcTRLIw=w592-h404-n-k-rw-no-v1" style="width:80%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 10</div>
    <img src="https://lh3.googleusercontent.com/proxy/9bTUCExGfyIo-VC2UpMd3TaWIZxBi4avGUwK3W6HaxUgW_fErRmJdehzqtLhsSnV20OMyfXMuRqG8qEB-1spCc_JmT8e4iqt3ZkB9JKDqOy0l3kJT_0I3lzO7ux9is2mzAwQcKyvw2E07el0v-zWJhw6koaDK3Q=w592-h404-n-k-rw-no-v1" style="width:80%">
  </div>

  <div class="mySlides">
    <div class="numbertext">7 / 10</div>
    <img src="https://lh3.googleusercontent.com/proxy/TGoBdlobgfP5sCnb8TeP3p5yI_yu-Bnqv2DXMt7x5w7D71S766qnFR9wE9rsmv8WGFyyhWqCn0Epn_mEx3hEJgNi5tE5faZxIwP485KW-9SipcIC9OPtY2iAr4UcGi8EDqwNJAVhnO1D_9xnhqsYOTYEvyjjxw=w592-h404-n-k-rw-no-v1" style="width:80%">
  </div>

  <div class="mySlides">
    <div class="numbertext">8 / 10</div>
    <img src="https://lh5.googleusercontent.com/p/AF1QipNuLjL4vMhZvoMD4olURUBdcSoCzAxbuzvpvFI=w325-h182-k-no" style="width:80%">
  </div>

  <div class="mySlides">
    <div class="numbertext">9 / 10</div>
    <img src="https://lh5.googleusercontent.com/p/AF1QipNmpMGhTK8u0KhykpTxYZLzcze_iOVMcgtLz6KM=w325-h243-k-no" style="width:80%">
  </div>

  <div class="mySlides">
    <div class="numbertext">10 / 10</div>
    <img src="https://lh3.googleusercontent.com/proxy/P8h-Fmkey1OpjgXSS7z9czCCjOVQ4S3aR-gtYYZMAFZABtJ51tOKs6IOtz1jtbEu8Ubsj9deSwNl6s8h7A5FPD4ARKLbZXn38q_BNdhNCTrrbZTm0wtoRbublBpo4GLtyjXp47Kd3HdfBq8nwSsfHE_PQY6rwfU=w325-h183-k-no" style="width:80%">
  </div>-->

  <?php
  }
  ?>



</center>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  

  <div class="caption-container">
    <p id="caption"></p>
  </div>
 

  <div class="row">
     <?php


$con = mysqli_connect('localhost','root');


mysqli_select_db($con,'hotelhunt');

$id=$_GET['id'];
$i="";
$qy = "select images from resortdetail where id='$id'";

$fire = mysqli_query($con, $qy);
$data = mysqli_fetch_array($fire);
$res = $data['images'];
$res = explode(" ",$res);
$count = count($res)-1;
for($i=0;$i<$count;++$i){


?>
      <div class="column">
      <img class="demo cursor" src="upload/<?= $res[$i]?>" style="width:100%;" onclick="currentSlide(1)" >
      </div>
            <?php
}
?>


    <!--
    <div class="column">
      <img class="demo cursor" src="https://lh3.googleusercontent.com/proxy/av_rYkKpDNyyShnfj5DsS1EP7BCht2A9Xc5-w6bGtXRnxRsMpVDSjQJ13gxEIuovPtfxo42Mdv4xdO6vmCnOvrBrqlkfaS6fdYUGJfydqsfkdtXnxticTgPnvCwSdr6TRsmrsutd1SrrohE-icRzxYlRl-MlAXA=w592-h404-n-k-rw-no-v1" style="width:100%" onclick="currentSlide(2)">
    </div>
    <div class="column">
      <img class="demo cursor" src="https://lh3.googleusercontent.com/proxy/6mO6fYmFg4KlV-3X1ty-8DRiH7A9SJz_kJIwQ0L0nRdkAwKO3bmReVlysOMXl4sWAZu0A7Re-AXaVKVuLyWiwe_RY30c5ENPV7ntxUJDJvBHlPTG7uaGLzQy_gE-InZpaXywiQynoJ8R7vJjMxlEhR8Pbr-x_yQ=w592-h404-n-k-rw-no-v1" style="width:100%" onclick="currentSlide(3)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="https://lh3.googleusercontent.com/proxy/RNtuB2teAfcpHFQVtNptHaQ-VyMisg5DldJqmyHt3TPNp1fkAloDKQUBw1163Dq8F8bpjQscCaQmU0_reYJ-eu6deHv3fo3q68LZBSuH-TmkTP7yj0PSUEkpnZ2h13j4d4M7NJMgtFhf_9-uC4KY1hJD52qVN9M=w592-h404-n-k-rw-no-v1" style="width:100%" onclick="currentSlide(4)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="https://lh3.googleusercontent.com/proxy/C9GxgdW0diPddQgHhxMVrIkfgeoCFcNPeVJqQdlPwLCnnjnmWv8J1Ici8m7nHHK1JFOcODoSovYsaW1cytDftOST__cLSVScvVAAshy_sAW-pFC7GIjcSV18EBPJlYV2h8GYybIM9PvCpf6YQdR9lTNgcTRLIw=w592-h404-n-k-rw-no-v1" style="width:100%" onclick="currentSlide(5)" >
    </div>    
    <div class="column">
      <img class="demo cursor" src="https://lh3.googleusercontent.com/proxy/9bTUCExGfyIo-VC2UpMd3TaWIZxBi4avGUwK3W6HaxUgW_fErRmJdehzqtLhsSnV20OMyfXMuRqG8qEB-1spCc_JmT8e4iqt3ZkB9JKDqOy0l3kJT_0I3lzO7ux9is2mzAwQcKyvw2E07el0v-zWJhw6koaDK3Q=w592-h404-n-k-rw-no-v1" style="width:100%" onclick="currentSlide(6)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="https://lh3.googleusercontent.com/proxy/TGoBdlobgfP5sCnb8TeP3p5yI_yu-Bnqv2DXMt7x5w7D71S766qnFR9wE9rsmv8WGFyyhWqCn0Epn_mEx3hEJgNi5tE5faZxIwP485KW-9SipcIC9OPtY2iAr4UcGi8EDqwNJAVhnO1D_9xnhqsYOTYEvyjjxw=w592-h404-n-k-rw-no-v1" style="width:100%" onclick="currentSlide(7)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="https://lh5.googleusercontent.com/p/AF1QipNuLjL4vMhZvoMD4olURUBdcSoCzAxbuzvpvFI=w325-h182-k-no" style="width:100%" onclick="currentSlide(8)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="https://lh5.googleusercontent.com/p/AF1QipNmpMGhTK8u0KhykpTxYZLzcze_iOVMcgtLz6KM=w325-h243-k-no" style="width:100%" onclick="currentSlide(9)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="https://lh3.googleusercontent.com/proxy/P8h-Fmkey1OpjgXSS7z9czCCjOVQ4S3aR-gtYYZMAFZABtJ51tOKs6IOtz1jtbEu8Ubsj9deSwNl6s8h7A5FPD4ARKLbZXn38q_BNdhNCTrrbZTm0wtoRbublBpo4GLtyjXp47Kd3HdfBq8nwSsfHE_PQY6rwfU=w325-h183-k-no" style="width:100%" onclick="currentSlide(10)" >
    </div>-->
  </div>

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
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
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
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

<br>
<br>

 <footer class="footer" style="background-color: #5a2360; ">
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
