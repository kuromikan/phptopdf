<?php
header("Content-Type:text/html; charset=utf-8");
ob_start();
if (!isset($_SESSION)) {
  session_start();
}

if($_SESSION['admin'] != "admin"){
	echo  "<script>window.open('index.html','_top'); </script>";
	
}


$com_name=$_POST['com_name'];
$phone=$_POST['phone'];
$manager=$_POST['manager'];
$produce=$_POST['produce'];
$price=$_POST['price'];

echo $com_name."<br>";
echo $phone."<br>";
echo $manager."<br>";
echo $produce."<br>";
echo $price."<br>";


?>