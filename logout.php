<?php session_start(); ?>
<?php
require 'connect.php';
  if(isset($_POST['logout'])){
    $_SESSION = array();
    session_destroy(); 
   echo '<META HTTP-EQUIV="Refresh" Content="1; URL=index.php">';
	
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Request Sent</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body style="text-align: center;animation: ">
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
        <li><a href="contact.html" class="last">Contact</a></li>
      </ul>
    </div>
  </div>
 	 <h2><br><br><br><br>
 		<p>
    You are Successfully Logged out.<br>
    
 </div>
</body>
</html>