<?php

session_start();

$user= "root";
$server = "localhost";
$passworddb ="";
$db = "hotelhunt";       

$con = mysqli_connect( $server,$user, $passworddb, $db);
 
if($con)
{
      $username= $_POST['username'];
      $phoneno= $_POST['phoneno'];
      $_SESSION['phone']=$phoneno;
      $_SESSION['uname']=$username;
      $query= "select *from user where Username='$username' ";
      $result= mysqli_query($con,$query);
      $count = mysqli_num_rows($result);
      
if($count)
{
    $a = mysqli_fetch_assoc($result);
    if($a['Contact']==$phoneno)
    {
      require('textlocal.class.php');
      require('cred.php');
      $textlocal = new Textlocal(false,false,API_KEY);
      
      $numbers = array(Mobile);
      $sender = 'TXTLCL';
      $otp= mt_rand(10000,99999);
      $message = "Hello ".$username." welcome to HOTELHUNT here is your OTP : ".$otp;

      try {
          $result = $textlocal->sendSms($numbers, $message, $sender);
          setcookie('otp',$otp);
          ?>
          <script>
                alert("OTP successfully send");
          </script>
          <?php
          include 'otpverify.html';
      } catch (Exception $e) {
          die('Error: ' . $e->getMessage());
      }
    }
    else 
    {
       ?>
       <script>
             alert("Phone number is incorrect,try again !");
       </script>
       <?php
       include 'forget.html';
    }
}
else 
    {
      ?>
      <script>
            alert("Username does not exist please sign-up");
      </script>
      <?php
      include 'signupuser.html'; 
    }
}
else
 {
      ?>
      <script>
            alert("Connection failed");
      </script>
      <?php
      include 'signupuser.html'; 
}

?>
