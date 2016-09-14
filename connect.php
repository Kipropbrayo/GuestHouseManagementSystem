<?php

if(!mysql_connect('localhost','root','') or !mysql_select_db('hotel')) {
	die("Could not connect to database!");
}

?>