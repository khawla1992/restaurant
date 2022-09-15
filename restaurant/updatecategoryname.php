<?php
$con=mysqli_connect('localhost','root','','restaurant');

mysqli_set_charset($con,"utf8");

$g = $_GET['g'];
$id = $_GET['id'];

$result = mysqli_query($con,"UPDATE  `restaurant`.`category` SET  `name` =  '$g' WHERE  `category`.`id` =$id");



if(!$result)
{
	echo "error";
	exit;
}

?>