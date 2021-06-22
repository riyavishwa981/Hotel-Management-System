<?php
         
session_start();
$con = mysqli_connect('localhost','root');
if($con) 
{

header('location: tajhotelreviews.php');
}
else {
   echo" no connection";

}


mysqli_select_db($con,'hotelhunt');


  $fname =$_POST['first_name'];
  $lname = $_POST['last_name'];
  $mail = $_POST['email_Id'];
  $contact = $_POST['contact'];
  $hoteln = $_POST['hotel_name'];
  $feed = $_POST['feedback'];
  $rating = $_POST['rating'];


/*{

$q  = " select * from userfeedback where first_name= '$fname' && last_name='$lname' && email_Id='$mail' && contact='$contact'  &&  hotel_name='$hoteln' && feedback='$feed' && rating='$rating'";
}*/

{
   $qy= " insert into userfeedback (first_name,last_name,email_Id,contact,hotel_name,feedback,rating) values('$fname', '$lname', '$mail', '$contact','$hoteln','$feed','$rating')";
}

            mysqli_query($con,$qy);
         
      ?>