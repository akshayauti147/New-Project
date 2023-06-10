<?php
//connection file	
error_reporting('E_ALL');
	/*$host = 'localhost';
	$user = 'root';
	$dbpass = '';
	$db = "doctordb";
	$con = mysql_connect($host, $user,$dbpass,$db);*/
	$db = "doctordb";
    $con = mysql_connect('localhost','root','');
	if(!$con){
		echo 'Could not connect to database ';
	}else{
		mysql_select_db($db);
		  "Connected";
	}
	?>
