<?php
$con=mysqli_connect('localhost','root','','restaurant');

mysqli_set_charset($con,"utf8");

$amount=$_GET["amount"];
$id = $_GET['id'];

$result1 = mysqli_query($con,"SELECT category_id FROM orders_detail where id=$id");
$row=mysqli_fetch_assoc($result1);
$category_id=$row['category_id'];
if(!$result1)
{
	echo "error1";
	exit;
}


$result2 = mysqli_query($con,"SELECT price FROM category where id=$category_id");
$row=mysqli_fetch_assoc($result2);
$p=$row['price'];
$tp=$p*$amount;

if(!$result2)
{
	echo "error2";
	exit;
}

$result = mysqli_query($con,"UPDATE  `restaurant`.`orders_detail` SET  `amount` = $amount , `tot_price`=$tp WHERE  `orders_detail`.`id`=$id");



if(!$result)
{
	echo "error";
	exit;
}

?>