<?php
$username=$_POST["Username"];
$password=$_POST["Password"];
$email=$_POST["Email"];
$phone=$_POST["Phone"];

$query='insert into `customer_details` values("'.$username.'","'.$password.'","'.$email.'","'.$phone.'")';
echo $query;

$con=Mysql_connect("localhost","root","");

if(!$con){
		echo "not connected";
}
Mysql_select_db("grocery_store");

$result = mysql_query($query,$con);
echo "<script>window.location='login.html';</script>";
?>
