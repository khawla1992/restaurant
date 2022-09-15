<?php
$con=mysqli_connect('localhost','root','','restaurant');

mysqli_set_charset($con,"utf8");

$g = $_GET['g'];
$id = $_GET['id'];

$result = mysqli_query($con,"UPDATE  `restaurant`.`group1` SET  `name` =  '$g' WHERE  `group1`.`id` =$id");



if(!$result)
{
	echo "error";
	exit;
}

?>