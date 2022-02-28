<?php

$serverusername = "localhost";
$servername = "root";
$serverpassword = "";
$database = "userprofiledeatils";
error_reporting(0);

$conn = mysqli_connect($serverusername, $servername, $serverpassword, $database);

if (!$conn) 
{
	
	die("Sorry Some Probelm Occur!!<br> We are Resolving we need your patitence");
} 


?>