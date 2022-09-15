<?php

$con=mysqli_connect('localhost','root','','restaurant');

mysqli_set_charset($con,"utf8");
$oid = $_GET['oid'];

$result = mysqli_query($con,"SELECT D.id, C.name,D.amount FROM category as C , orders_detail as D where D.orders_id=$oid and C.id=D.category_id and D.status=1 ");


if(!$result)
{
	echo "error ";
	exit;
}

while($row=mysqli_fetch_assoc($result))
	$output[]=$row;
print(json_encode($output));


?>