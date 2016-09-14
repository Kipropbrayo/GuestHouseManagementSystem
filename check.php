<?php
session_start();
if(!mysql_connect('localhost','root','') or !mysql_select_db('hotel')) {
	die("Could not connect to database!");
}
include("mail/phpmailer.php");
?>



<!DOCTYPE html>
<html>
<head>
	<title>Request Status</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="container">
  <div id="header">
    <div id="website_title">
      <div id="title"> IIT Jodhpur </div>
      <div id="slogan"> Online GuestHouse Booking</div>
    </div><br>
    <div id="menu">
      <ul style="margin-left: 400px">
        <li><a href="index.php" >Home</a></li>
        <!-- <li><a href="#">Gallery</a></li> -->
        <li><a href="#" class="last">Contact</a></li>
        <li style="text-align: right"><a href="logout.php">Logout</a></li>
        <li style="text-align: right"><a href="cancel_booking.php">Cancel Booking</a></li>
      </ul>
    </div>
  </div><br><br><br>
 <h2 style="margin-left: 50px; font-size: 30px">Booking Details:</h2><br><br>
     <div style="font-size: 20px; margin-left: 150px">
<?php
// User Authentication section starts here
	     
		
        if(isset($_POST['check'])){
		  		    
		  $URId= $_POST['URId'];
		  $Pass = $_POST['Password'];


		  $query = "SELECT * FROM `userdetails` WHERE `URId` = '$URId' and `Password` = '$Pass'";
		  if($query_run = mysql_query($query))
		  {
		  	$query_num_rows = mysql_num_rows($query_run);
		  	if($query_num_rows == 0)
		  	{
		  		echo "Invalid URId or Password.<br>Please Try again.";
		  echo '<META HTTP-EQUIV="Refresh" Content="1; URL=index.php">';
		}
		
		  else if($query_num_rows == 1)
		  {
		  	$_SESSION['URId']= $URId;
		  	//$_SESSION['Password'] = $Password;
		  	$Name = mysql_result($query_run, 0, 'Name');
		  	$Surname = mysql_result($query_run,0, 'Surname');
		  	$Status = mysql_result($query_run, 0, 'Status');
		  	$Mail = mysql_result($query_run, 0, 'Mail');
		  	$Contact = mysql_result($query_run, 0, 'Contact');
		  	$Arrival = mysql_result($query_run, 0, 'Arrival');
		  	$Departure = mysql_result($query_run, 0, 'Departure');
		  	$Persons = mysql_result($query_run, 0, 'Persons');
		  	$Food = mysql_result($query_run, 0, 'Food');
		  	$Room = mysql_result($query_run, 0, 'Room');
		  	//taking diff od dates
		  	$diff = strtotime($Departure .' 00:00:00') - strtotime($Arrival.' 00:00:00');
		  	$days = floor($diff/(3600*24));
	 echo 'User Id:'.$URId.'<br><br>';
     echo 'Name: '.$Name.' '.$Surname.'<br><br>';
     echo 'Booking Status: '.$Status.'<br><br>';
     echo 'Email Id: '.$Mail.'<br><br>';
     echo 'Contact: '.$Contact.'<br><br>';
     echo 'Arrival: '.$Arrival.'<br><br>';
     echo 'Departure: '.$Departure.'<br><br>';
     echo 'Number of Persons: '.$Persons.'<br><br>';
     echo 'Avail Food Facility: '.$Food.'<br><br>';
     if($Status == "Confirmed")
     {
     echo 'Alloted Room Number: '.$Room.'<br><br>';  
     if($Food == "Yes")
     {
     echo 'Payment to be made : ';
     echo ($days*100)+($Persons*50).'<br><br>'; 
  	}	
 		else{ echo 'Payment to be made: ';
 		echo ($days*100).'<br><br>';
 	}
 }

		  }
		  else
		  	{
		  		echo mysql_error();
		  	}

		  }
		  }
//user authentication ends here
 	 ?>
	 </div>
</body>
</html>