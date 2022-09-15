<?php

$con=mysqli_connect('localhost','root','','restaurant');

mysqli_set_charset($con,"utf8");


$result = mysqli_query($con,"SELECT max(id)FROM orders");

while($row=mysqli_fetch_assoc($result))
{
   $id=$row['max(id)'];
$output[]=$row;
$id1=$id+1;

$result1 = mysqli_query($con,"INSERT INTO orders(`id`) VALUES ($id1)");
if($result1)
{
print(json_encode($output));	
}
if(!$result1)
{
echo "error";
}

}



?>