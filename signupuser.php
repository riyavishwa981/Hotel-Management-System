<?php

session_start();

$con = mysqli_connect('localhost','root');
if ($con) {
	echo 'alert("Connection Successful")';
}else{
	echo "Connection Failed.Please try again later";
}

mysqli_select_db($con, 'hotelhunt');

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$contact = $_POST['phone'];
$add = $_POST['address'];
$user = $_POST['username'];
$pass = $_POST['password'];
$pass1 = $_POST['password1'];
$passf = password_hash($pass, PASSWORD_BCRYPT);
$cpassf = password_hash($pass1, PASSWORD_BCRYPT);

if ($pass != $pass1) {
   echo '<script type="text/javascript">';
   echo ' alert("Password and Confirm Password should match")';  
   echo '</script>';  
   include 'signupuser.html' ;
}
else{

$q = "select * from user where Username = '$user' && Password ='$pass' ";

$result = mysqli_query($con, $q);
$num= mysqli_num_rows($result);

if($num == 1){
	echo 'alert("User already exists")';
	include 'signupuser.html' ;
}else{

	$qy = " insert into user(FirstName, LastName, Contact, Address, Username, Password, CPassword) values ('$fname', '$lname', '$contact', '$add', '$user', '$passf', '$cpassf') ";
	mysqli_query($con, $qy);
	?>
	<script>
	alert("You have successfully signedup");
	</script>
	<?php
	include 'loginuser.html';
}
}

?>