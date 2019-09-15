<?php
$username="root";
$password="";
$ip="localhost";
$db="bookselling";

$con=new mysqli($ip,$username,$password,$db);

if(!$con)
{
	echo "error...";
}

?>