<?php

session_start();

$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'hotelhunt');

$id = $_GET['id'];

$q = "delete from resortdetail where id = $id";

mysqli_query($con,$q);

header('location: resortdisplay.php');

?>