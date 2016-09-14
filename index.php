<?php
//start a session
session_start();
?>

<!Doctype html>
<html>
<head>
<title>IITJ GuestHouse</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<!--End Of Head-->
<!--Start of Body-->
<body>
<!--Division of Page segment Start-->
<div id="container"> 
  <div id="header">
    <div id="website_title">
      <div id="title">  IIT Jodhpur </div>
      <div id="slogan"> Online GuestHouse Booking</div>
    </div>
  </div>
  <!-- end of header -->
    <div id="menu">
      <ul style="margin-left: 400px">
        <li><a href="#" class="current">Home</a></li>
     <!--  <li><a href="">Gallery</a></li> -->
        <li><a href="contact.html" class="last">Contact</a></li>
      </ul>
    </div>
  <!-- end of banner -->
  <div id="content">
    <div id="content_left">
      <div class="content_left_section">
        <div class="content_title_01">Request For Booking at <?php echo date('H:i') ?></div>
        <!-- Form for booking room -->
        <form method="post" action="request.php">
          <label>Arrival</label>
		  <input class="inputfield" name="Arrival" type="date" placeholder="dd-mm-yyyy" style="width: 150px; margin-right: 20px; margin-left: 12px" required="text"  /><br><br>
            
            <label>Departure</label>
             <input class="inputfield" name="Departure" type="date" placeholder="dd-mm-yyyy" style="width: 150px; margin-right: 20px;margin-left: 12px" required="text" /><br><br>
			 <label>First Name :</label>
            <input class="inputfield" name="Name" type="text" style="width: 100px;margin-left: 10px;" required="text" maxlength="25" onkeypress="return restrictCharacters(this, event, alphaOnly);"/><br><br>
            <label>Last Name :</label>
			<input class="inputfield" name="Surname" type="text" style="width: 100px; margin-right: 20px;margin-left: 12px;"required="text" maxlength="25" onkeypress="return restrictCharacters(this, event, alphaOnly);"/><br><br>
			<label>Designation :</label>
            <select name="Designation" style="margin-left: 11px;">
              <option value="student" >Student</option>
              <option value="faculty">Faculty</option>
            </select><br><br>
			<label>Contact :</label>
             <input class="inputfield" name="Contact" type="text" style="width: 100px; margin-right: 20px;margin-left: 11px;" required="text" maxlength="10" onkeypress="return restrictCharacters(this, event, digitsOnly);" /><br><br>
			 <label>Email :</label>
             <input class="inputfield" name="Mail" type="email" style="width: 150px; margin-right: 20px;margin-left: 11px;" required="text" /><br><br>
             <label>Number of Person :</label>
            <select name="Persons" style="margin-left: 11px;">
              <option value="1" >1</option>
              <option value="2">2</option>
              <option value="3" >3</option>
              <option value="4">4</option>
              <option value="5" >5</option>
              <option value="6">6</option>
              <option value="7" >7</option>
              <option value="8">8</option>
              <option value="9" >9</option>
              <option value="10">10</option>
            </select><br><br>
            <label>Would you like to have Food :</label>
            <select name="Food" style="margin-left: 11px;">
              <option value="Yes" >Yes</option>
              <option value="No">No</option>
            </select><br><br>
            <label>Type Of Food :</label>
            <select name="Type_of_food" style="margin-left: 11px;">
              <option value="Yes" >Veg</option>
              <option value="No">Non Veg</option>
            </select><br><br>
           <label>Password :</label>
             <input class="inputfield" name="Password" type="password" style="width: 100px; margin-right: 20px;margin-left: 11px;" required="text" /><br><br>
          <div class="cleaner_h20">&nbsp;</div>
          <div class="rc_btn_01"><input type="submit" value="Request" name="request"></div>
        </form>
        <div class="cleaner">&nbsp;</div>
      </div>
      <!-- end of booking -->
      <div class="cleaner_h30">&nbsp;</div>
      <div class="cleaner_horizontal_divider_01">&nbsp;</div>
      <div class="cleaner_h30">&nbsp;</div>
    </div>
    <!-- end of content left -->
    
    <!--starting of content right -->
    <div id="content_right">
      <div class="content_right_section">
	   <div class="content_right_2column_box">
     
     <!--Form for Checking Status of Booking -->
        <div class="content_title_01">Check Booking Status</div>
        <form action="check.php" method="post">
         <div class="form_row">
            <label style="margin-right: 15px">UserID:</label>
            <input class="inputfield" name="URId" type="text" style="width: 80px;" required="text" /><br><br>
            <label>Password:</label>
            <input class="inputfield" name="Password" type="password" style="width: 80px;" required="text" />
          </div>
        <div class="cleaner_h10">&nbsp;</div>
        <div class="cleaner_h40">&nbsp;</div>
        <input type="submit" value="Check" name="check"/>
      <!-- End of Checking Form -->

      </div>
      <div class="cleaner_h40">&nbsp;</div>
        <div class="content_title_01">About IIT Jodhpur</div>
        <p>Indian Institute of Technology Jodhpur was established in 2008, to foster technology education and research in India. The Institute is committed to technological thought and action to benefit the economic development of India. Scholarship in teaching and learning; Scholarship in research and creative accomplishments; and relevance to Industry are three driving forces for us at IIT Jodhpur.
Currently, it is functioning from its Temporary Campus at MBM Engineering College premises in Jodhpur. IIT Jodhpur is expected to shift by 2016 to a sprawling residential permanent campus on 852 acres on National Highway 65, north-northwest of Jodhpur towards Nagaur. The new campus of IIT Jodhpur is meticulously planned and envisioned to stand as a symbol of academics – simple, but deep.</p>
      </div>
      <div class="content_right_section">
        <div class="content_title_01">Gallery</div>
        <div class="gallery_box"> <img src="http://www.iitj.ac.in/slidertest/img/01.jpg" alt="" width=82px height=82px /></div>
        <div class="gallery_box"> <img src="http://www.iitj.ac.in/slidertest/img/02.jpg" alt=""  width=82px height=82px/></div>
        <div class="gallery_box"> <img src="http://www.iitj.ac.in/slidertest/img/03.jpg" alt=""  width=82px height=82px/> </div>
        <div class="gallery_box"> <img src="http://www.iitj.ac.in/slidertest/img/15th%20aug%20002.jpg" alt="" width=82px height=82px /></div>
        <div class="cleaner">&nbsp;</div>
      </div>
      <div class="cleaner_h20">&nbsp;</div>
    </div>
    <!-- end of content right -->
    <div class="cleaner">&nbsp;</div>
  </div>

</div>
<!-- end of container -->
<!--Script for restricting Characters in Input field.-->
  <script type="text/javascript">

    var digitsOnly = /[1234567890]/g;
    var alphaOnly = /[A-Za-z]/g;

    function restrictCharacters(myfield, e, restrictionType) {
        if (!e) var e = window.event
        if (e.keyCode) code = e.keyCode;
        else if (e.which) code = e.which;
          var character = String.fromCharCode(code);

  // if they pressed esc... remove focus from field...
        if (code==27) { this.blur(); return false; }
  
  // ignore if they are press other keys
  // strange because code: 39 is the down key AND ' key...
  // and DEL also equals .
        if (!e.ctrlKey && code!=9 && code!=8 && code!=36 && code!=37 && code!=38 && (code!=39 || (code==39 && character=="'")) && code!=40) {
        if (character.match(restrictionType)) {
              return true;
        } else {
            return false;
        }
    
      }
    }
  </script>
<!--Script End-->
</body>
</html>
