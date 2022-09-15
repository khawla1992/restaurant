<?php
$con=mysqli_connect('localhost','root','','restaurant');

mysqli_set_charset($con,"utf8");

$p = $_GET['phone'];
$id = $_GET['id'];

$result = mysqli_query($con,"UPDATE  `restaurant`.`employee` SET  `phone` =  $p WHERE  `employee`.`id` =$id");



if(!$result)
{
	echo "error";
	exit;
}

?>