<?php

session_start();
$con = mysqli_connect("localhost","root","","matdb");

if($con)
{
	//echo "Connected to database";
}
else
{
   echo "Could not connect";
   die();
}

?>