
<?php

$con=mysqli_connect('localhost','root','','restaurant');

mysqli_set_charset($con,"utf8");

$id=$_POST["id"];
$image=$_POST["image"];


$decodedImage=base64_decode("$image");



file_put_contents("group/".$id.".jpg",$decodedImage);

?>
