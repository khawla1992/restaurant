<?php

$con=mysqli_connect('localhost','root','','restaurant');

mysqli_set_charset($con,"utf8");

$basket=$_GET["basket"];
$cusaccount=$_GET["cusaccount"];


$result1 = mysqli_query($con,"UPDATE  `restaurant`.`orders` SET  `account_no`= $cusaccount ,`status`=1 ,`noty_status`=1 WHERE  `orders`.`id`=$basket");


if(!$result1)
{
	echo "error ";
	exit;
}






?>