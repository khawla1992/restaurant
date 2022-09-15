<?php
$con=mysqli_connect('localhost','root','','restaurant');

mysqli_set_charset($con,"utf8");

$n = $_GET['name'];
$id = $_GET['id'];

$result = mysqli_query($con,"UPDATE  `restaurant`.`employee` SET  `name` =  '$n' WHERE  `employee`.`id` =$id");



if(!$result)
{
	echo "error";
	exit;
}

?>