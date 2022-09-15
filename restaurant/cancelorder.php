<?php
$con=mysqli_connect('localhost','root','','restaurant');

mysqli_set_charset($con,"utf8");


$oid = $_GET['oid'];
$result = mysqli_query($con,"Delete FROM `restaurant`.`orders_detail` where `orders_detail`.`group_id`=$oid");




if(!$result)
{
	echo "error";
	exit;
}

?>