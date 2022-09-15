
<?php

$con=mysqli_connect('localhost','root','','restaurant');
mysqli_set_charset($con,"utf8");


$n=$_GET["name"];
$s=$_GET["sal"];
$p=$_GET["phone"];
$j=$_GET["job"];

echo $n;
echo $s;
echo $j;
echo $p;


$result = mysqli_query($con,"INSERT INTO employee(`name`,`sal`,`phone`,`job`) VALUES ('$n',$s,$p,'$j')");

if(!$result)
{
	echo "error";
	exit;
}


?>
