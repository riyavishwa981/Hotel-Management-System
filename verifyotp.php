<?php

session_start();

$otp= $_POST['otp'];
if($otp == $_COOKIE['otp'])
{
    include 'newpass.html';
}
else 
{
    ?>
    <script>
        alert("Incorrect OTP");
    </script>
    <?php
    include 'forget.html';
}
?>