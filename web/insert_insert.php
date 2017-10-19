<?php
header("Content-Type:text/html; charset=utf-8");
ob_start();
if (!isset($_SESSION)) {
  session_start();
}

if($_SESSION['admin'] != "admin"){
	echo  "<script>window.open('index.html','_top'); </script>";
	
}
include("mysql.php"); 

$com_name=$_POST['com_name'];
$phone=$_POST['phone'];
$manager=$_POST['manager'];
$produce=$_POST['produce'];
$price=$_POST['price'];


echo "<html>";
echo "<body>";
echo "<form id='form1' name='form1' method='post' action=insert_complete.php>";


$sql = "INSERT INTO `product`.`custom_info` (`id`, `com_name`, `phone`, `manager`, `produce`, `price`) VALUES (NULL, '".$com_name."', '".$phone."', '".$manager."', '".$produce."', '".$price."');";
$result = mysql_query($sql);



echo "<input type=\"hidden\" name=\"com_name\" value=$com_name>";
echo "<input type=\"hidden\" name=\"phone\" value=$phone>";
echo "<input type=\"hidden\" name=\"manager\" value=$manager>";
echo "<input type=\"hidden\" name=\"produce\" value=$produce>";
echo "<input type=\"hidden\" name=\"price\" value=$price>";

echo "<script   language=\"javascript\">document.form1.submit();</script>";

echo "</form>";
echo "</body>";
echo "</html>";
?>