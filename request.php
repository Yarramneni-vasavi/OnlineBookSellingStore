<?php
include ('db.php');

$s="insert into bookrequests values('".$_REQUEST['personname']."','".$_REQUEST['Bookname']."','".$_REQUEST['Author']."','".$_REQUEST['publications']."','".$_REQUEST['edition']."')";

echo $s;

if( $con->query($s))
{
	header('Location:requestbook.php?msg=success');
}
else
{
	echo "error";
}
?>