<?php
$con=mysqli_connect('localhost','root','','restaurant');

mysqli_set_charset($con,"utf8");


$result = mysqli_query($con,"UPDATE  `restaurant`.`orders` SET  `noty_status` =  0");



if(!$result)
{
	echo "error";
	exit;
}

?>