<?php
$con=mysqli_connect('localhost','root','','restaurant');

mysqli_set_charset($con,"utf8");


$id = $_GET['id'];
$result = mysqli_query($con,"Delete FROM `restaurant`.`group1` where `group1`.`id`=$id");
$result1 = mysqli_query($con,"Delete FROM `restaurant`.`category` where `category`.`group_id`=$id");




if(!$result)
{
	echo "error";
	exit;
}

?>