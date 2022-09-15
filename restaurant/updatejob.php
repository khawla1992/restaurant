<?php
$con=mysqli_connect('localhost','root','','restaurant');

mysqli_set_charset($con,"utf8");

$j = $_GET['job'];
$id = $_GET['id'];

$result = mysqli_query($con,"UPDATE  `restaurant`.`employee` SET  `job` =  '$j' WHERE  `employee`.`id` =$id");



if(!$result)
{
	echo "error";
	exit;
}

?>