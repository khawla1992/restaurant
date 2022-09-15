<?php
$con=mysqli_connect('localhost','root','','restaurant');

mysqli_set_charset($con,"utf8");

$acc = $_GET['accountnumber'];


$result = mysqli_query($con,"UPDATE  `restaurant`.`account_no` SET  `account_no` =  $acc");



if(!$result)
{
	echo "error";
	exit;
}

?>