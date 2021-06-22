<?php
session_start();

$con = mysqli_connect('localhost','root');



mysqli_select_db($con, 'hotelhunt');

$user = $_POST['username'];
$pass = $_POST['password'];

$q = "select * from signup where username = '$user' && password = '$pass' ";

$result = mysqli_query($con,$q);

$num  = mysqli_num_rows($result);

if($num == 1){
	header('location: adminpage.html');
}else{
	echo '<script type="text/javascript">';
	echo 'alert("wrong password");';
	echo 'window.location.href = "loginadmin.html";';
	echo '</script>';
}




?>