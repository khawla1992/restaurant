
<?php

$con=mysqli_connect('localhost','root','','restaurant');

mysqli_set_charset($con,"utf8");

//$name=$_POST["name"];
$image=$_POST["image"];

$n=$_GET["n"];
$p=$_GET["p"];

$gid=$_GET["gid"];


$decodedImage=base64_decode("$image");

$result = mysqli_query($con,"INSERT INTO category(`name`,`price`,`group_id`) VALUES ('$n',$p,$gid)");

if(!$result)
{
	echo "error";
	exit;
}

$result1 = mysqli_query($con,"SELECT * FROM category where name='$n'");
while($row=mysqli_fetch_assoc($result1))
	
{
	$id=$row['id'];
	
}

file_put_contents("category/".$id.".jpg",$decodedImage);

?>
