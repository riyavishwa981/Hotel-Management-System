<?php

session_start();

$con = mysqli_connect('localhost','root');
if($con){
	header('location: resortinsert.html');
}else{
	echo "no connection";
}

mysqli_select_db($con,'hotelhunt');

$name = $_POST['name'];
$loca = $_POST['location'];
$add = $_POST['address'];
$price = $_POST['price'];
$discount = $_POST['discount'];
$contact = $_POST['contactno'];
$email = $_POST['email'];
$files = $_FILES['file'];
$details = $_POST['detail'];



//print_r($files);
$file='';
$file_tmp='';
$location="upload/";
$data = '';
foreach($_FILES['images']['name'] as $key=>$val)
{
	$file=$_FILES['images']['name'][$key];
	$file_tmp=$_FILES['images']['tmp_name'][$key];
	move_uploaded_file($file_tmp,$location.$file);
	$data .=$file." ";
}

$filename = $files['name'];
$fileerror = $files['error'];
$filetmp = $files['tmp_name'];

$fileext = explode('.',$filename);
$filecheck = strtolower(end($fileext));

$fileextstored = array('png', 'jpg', 'jpeg');
if(in_array($filecheck,$fileextstored)){


	$destinationfile ='upload/'.$filename;
	move_uploaded_file($filetmp, $destinationfile);

	$qy = "INSERT INTO resortdetail(name, location, address, price, discount, contactno, email, image, detail,images) VALUES('$name', '$loca', '$add','$price', '$discount', '$contact', '$email', '$destinationfile','$details', '$data')";

	$query = mysqli_query($con, $qy);
}

?>