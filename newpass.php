<?php

session_start();

$user= "root";
$server = "localhost";
$password ="";
$db = "hotelhunt";       

$con = mysqli_connect( $server,$user, $password, $db);
 $username= $_SESSION['uname'];
if($con)
{
    $pass= $_POST['newpass'];
    $cpass= $_POST['conpass'];
    
    $pass1 = password_hash($pass, PASSWORD_BCRYPT);
    $cpass1 = password_hash($cpass, PASSWORD_BCRYPT);
    if($pass==$cpass)
    {
      $query = "update  user set Password ='$pass1',CPassword='$cpass1' where Username='$username'";
      $result = mysqli_query($con, $query);
      
      ?>
      <script>
          alert("Password updated successfully");
      </script>
      <?php
      include 'loginuser.html';
    }
    else
    {
        ?>
        <script>
            alert("Password not matching, enter again..");
        </script>
        <?php
        include 'newpass.html';
    }
}
else
{
    ?>
    <script>
        alert("Connection failed !!");
    </script>
    <?php
    include 'otpverify.html';
}
?>