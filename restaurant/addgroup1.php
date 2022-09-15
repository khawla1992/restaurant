
<?php

$con=mysqli_connect('localhost','root','','restaurant');

mysqli_set_charset($con,"utf8");

//$name=$_POST["name"];
$image=$_POST["image"];

$n=$_GET["n"];
$decodedImage=base64_decode("$image");

$result = mysqli_query($con,"INSERT INTO group1(`name`) VALUES ('$n')");

if(!$result)
{
	echo "error";
	exit;
}

$result1 = mysqli_query($con,"SELECT * FROM group1 where name='$n'");
while($row=mysqli_fetch_assoc($result1))
	
{
	$id=$row['id'];
	
}

file_put_contents("group/".$id.".jpg",$decodedImage);

?>
