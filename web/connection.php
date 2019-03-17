<?php
$con=Mysql_connect("localhost","root","");

if(!$con){
		echo "not connected";
}
Mysql_select_db("grocery_store");
?>