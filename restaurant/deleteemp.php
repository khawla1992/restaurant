<?php
$con=mysqli_connect('localhost','root','','restaurant');

mysqli_set_charset($con,"utf8");


$id = $_GET['id'];
$result = mysqli_query($con,"Delete FROM `restaurant`.`employee` where `employee`.`id`=$id");




if(!$result)
{
	echo "error";
	exit;
}

?>