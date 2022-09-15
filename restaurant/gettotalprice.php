<?php

$con=mysqli_connect('localhost','root','','restaurant');

mysqli_set_charset($con,"utf8");
$basket=$_GET["basket"];
$x=$_GET["x"];
$y=$_GET["y"];


$result = mysqli_query($con,"SELECT sum(tot_price)FROM orders_detail where orders_id=$basket and status=1");

while($row=mysqli_fetch_assoc($result))
{
          $tot_price=$row['sum(tot_price)'];
$output[]=$row;
	
}

if(!$result)
{
	echo "error ";
	exit;
}

else{
print(json_encode($output));
}


$result1 = mysqli_query($con,"UPDATE  `restaurant`.`orders` SET  `total_price`= $tot_price ,`x`=$x ,`y`=$y  WHERE  `orders`.`id`=$basket");


if(!$result1)
{
	echo "error ";
	exit;
}






?>