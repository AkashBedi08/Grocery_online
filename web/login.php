<?php
include("connection.php");
session_start();
$Username=$_POST["Username"];
$Password=$_POST["Password"];
$query='select * from customer_details where Username="'.$Username.'" AND Password="'.$Password.'"';
$result = mysql_query($query,$con);
$count = mysql_num_rows($result);
if($count > 0){
	echo "valid user";
	$_SESSION['Username'] = $Username;
	echo "<script>window.location='index1.html';</script>";
}
else
{
	echo " USERNAME OR PASSWORD IS INVALID !!!";
}
?>
