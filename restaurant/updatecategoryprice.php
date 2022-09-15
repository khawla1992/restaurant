<?php
$con=mysqli_connect('localhost','root','','restaurant');

mysqli_set_charset($con,"utf8");

$price = $_GET['p'];
$id = $_GET['id'];

$result = mysqli_query($con,"UPDATE  `restaurant`.`category` SET  `price` =  $price WHERE  `category`.`id` =$id");



if(!$result)
{
	echo "error";
	exit;
}

?>