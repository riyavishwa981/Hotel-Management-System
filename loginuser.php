<?php

session_start();


$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'hotelhunt');

if($con)
{
$user = $_POST['username'];
$pass = $_POST['password'];
$_SESSION['username'] = $user;

$q = "select * from user where Username = '$user' ";

$result = mysqli_query($con, $q);
$num= mysqli_num_rows($result);

if($num==0)
    {
        ?>
        <script>
            alert("Username does not exist,please signup");
        </script>
        <?php
        include 'signupuser.html';
    }
    else 
    {
       $a = mysqli_fetch_assoc($result);
       $f_pass = $a['Password'];
       $pass_result = password_verify( $pass, $f_pass);
       
  if($pass_result)
       {
         ?> 
         
         <script>
             alert("Login Successfully !!");
         </script>

         <?php
         include 'HomePage.html';
       }
       else {
        ?>
         
        <script>
            alert("Incorrect Password !!");
        </script>
          
        <?php
        include 'loginuser.html';
       }

    }
}
?>