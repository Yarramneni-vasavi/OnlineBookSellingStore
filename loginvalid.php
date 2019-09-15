<?php
session_start(); 
include("db.php");
$user=$_REQUEST['name'];
$pass=$_REQUEST['password'];

$sql="select * from userslist where username='".$user."' and password='".$pass."'";

//echo $sql;

$result=$con->query($sql);

if($result->num_rows==1)
{
	$_SESSION['username']=$user;
	$_SESSION['password']=$pass;
	Header('Location:bookavailable2.php');
	echo "valid";
}
else
{
	header('Location:login.php?msg=Oops, login failed!');
	echo "login failed";
}
?>
