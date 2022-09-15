<?php
$con=mysqli_connect('localhost','root','','restaurant');

mysqli_set_charset($con,"utf8");

$group = $_GET['group'];

$result = mysqli_query($con,"INSERT INTO group1(`name`) VALUES ('$group')");

if(!$result)
{
	echo "error";
	exit;
}

while($row=mysqli_fetch_assoc($result))
	$output[]=$row;
print(json_encode($output));


?>