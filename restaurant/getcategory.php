<?php

$con=mysqli_connect('localhost','root','','restaurant');

mysqli_set_charset($con,"utf8");
$gid = $_GET['gid'];
$result = mysqli_query($con,"SELECT * FROM category where group_id=$gid");


if(!$result)
{
	echo "error ";
	exit;
}

while($row=mysqli_fetch_assoc($result))
	$output[]=$row;
print(json_encode($output));


?>