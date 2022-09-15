<?php
$con=mysqli_connect('localhost','root','','restaurant');

mysqli_set_charset($con,"utf8");

$s = $_GET['sal'];
$id = $_GET['id'];

$result = mysqli_query($con,"UPDATE  `restaurant`.`employee` SET  `sal` =  $s WHERE  `employee`.`id` =$id");



if(!$result)
{
	echo "error";
	exit;
}

?>