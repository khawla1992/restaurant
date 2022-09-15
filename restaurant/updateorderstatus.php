<?php
$con=mysqli_connect('localhost','root','','restaurant');

mysqli_set_charset($con,"utf8");

$id = $_GET['id'];

$result = mysqli_query($con,"UPDATE  `restaurant`.`orders` SET  `status` =  0 where id=$id");

$result = mysqli_query($con,"UPDATE  `restaurant`.`orders_detail` SET  `status` =  0 where orders_id=$id");


if(!$result)
{
	echo "error";
	exit;
}

?>