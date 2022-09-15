<?php

$con=mysqli_connect('localhost','root','','restaurant');

mysqli_set_charset($con,"utf8");


$cid=$_GET["cid"];
$amount=$_GET["amount"];
$order_id=$_GET["basket"];


$result1 = mysqli_query($con,"SELECT price FROM category where id=$cid");
$row=mysqli_fetch_assoc($result1);
$p=$row['price'];

$tp=$p*$amount;
echo $tp;

$result = mysqli_query($con,"INSERT INTO orders_detail(`category_id`,`amount`,`tot_price`,`status`,`orders_id`) VALUES ($cid,$amount,$tp,1,$order_id)");

if(!$result1)
{
	echo "error";
	exit;
}

?>
