<?php

$con=mysqli_connect('localhost','root','','restaurant');

mysqli_set_charset($con,"utf8");

$result = mysqli_query($con,"SELECT * FROM orders where status=1");


if(!$result)
{
	echo "error ";
	exit;
}

while($row=mysqli_fetch_assoc($result))
	$output[]=$row;
print(json_encode($output));


?>