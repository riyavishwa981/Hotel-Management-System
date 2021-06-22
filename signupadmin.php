<?php
session_start();

$con = mysqli_connect('localhost','root');
if($con){
	header('location: loginadmin.html');
}else{
	echo "no connection";
}

mysqli_select_db($con,'hotelhunt');

$name = $_POST['firstname'];
$last = $_POST['lastname'];
$cont = $_POST['contactno'];
$address = $_POST['address'];
$email = $_POST['email'];
$user = $_POST['username'];
$pass = $_POST['password'];
$confir = $_POST['confirmpassword'];

$q = "select * from signup where username = '$user' && email = '$email' ";
$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
	echo "duplicate data";
}else{

	$qy = "insert into signup(firstname, lastname, contactno, address, email, username, password, confirmpassword) values('$name', '$last', '$cont', '$address', '$email', '$user', '$pass', '$confir')";
	mysqli_query($con, $qy);
}

 function test_input($data) 
 { 
 	$data = trim($data); 
 	$data =stripcslashes($data); 
 	$data =htmlspecialchars($data); 
 	return $data;
 } 

 ?>