<?php

session_start();
$connect = mysqli_connect("localhost","root","","hotel");

include("mail/phpmailer.php");

/*** first check that form token have been sent ***/
if(!isset($_POST['request'])){
  header('Location: requestfail.php');
}
else
{
   /*** if we are here the data is valid and we can insert it into database ***/
	$URId=str_pad(mt_rand(0, 9999), 4, '0', STR_PAD_LEFT);
	$Name=mysqli_real_escape_string($connect, $_POST['Name']);
  $Surname=mysqli_real_escape_string($connect, $_POST['Surname']);
  $Mail= mysqli_real_escape_string($connect, $_POST['Mail']);	
  $Contact= mysqli_real_escape_string($connect,$_POST['Contact']);
  $Designation = mysqli_real_escape_string($connect,$_POST['Designation']);
  $Arrival = mysqli_real_escape_string($connect,$_POST['Arrival']);
  $Departure = mysqli_real_escape_string($connect,$_POST['Departure']);
  $Password=mysqli_real_escape_string($connect, $_POST['Password']);
 // $Password = sha1($Password);
  $Persons =mysqli_real_escape_string($connect, $_POST['Persons']);
  $Food = mysqli_real_escape_string($connect,$_POST['Food']);
  $Type_of_food = mysqli_real_escape_string($connect,$_POST['Type_of_food']);
  //$amount = 0;
  //$no_of_days = date_diff(Arrival,Departure);
  //$address = mysqli_real_escape_string($connect,$_POST['address']);
  if($Arrival>$Departure)
{echo "Arrival date should be less than Departure Date.<br> Please try Again.";
 echo '<META HTTP-EQUIV="Refresh" Content="1; URL=index.php">';
 }
else{
$query="INSERT into userdetails(URId,Name, Surname, Mail,Contact,Designation,Arrival,Departure,Persons,Food ,Type_of_food,Password) values('$URId','$Name','$Surname', '$Mail','$Contact','$Designation', '$Arrival','$Departure','$Persons','$Food','$Type_of_food','$Password')";

  $query_run=mysqli_query($connect, $query);


   if($query_run)
	{  header('Location: requestsuccess.php');
       /* $mail->AddAddress("$Mail");

         $mail->Subject = "Request for Room Booking";
				$mail->Body    = "Dear $Name $Surname,<br>You request is successfully registered.</b><br><br>Your details are as below:<br>User Id:<b> $URId</b><br>Your Password:<b> $Password </b> <br>MailAddress: $Mail<br><br><b>Note: </b>Please note your User Id for checking your booking status.<br><br> Thanks.";
				$mail->AltBody = "Thanks for registering.Your request has been successfully registered.<br>Your details are as below:<br>User Id :<b> $URId</b>";
				 // Now sending the email
                  if(!$mail->Send()){
	                   header('Location: requestfail.php');
                   }
                  else{
                     	header('Location: requestsuccess.php');
			       }*/

	}
}


}
?>