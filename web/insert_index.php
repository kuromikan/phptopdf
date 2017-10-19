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
//$ID=$_POST['ID'];


echo "<html>";
echo "<body>";
echo "<form id='form1' name='form1' method='post' action=insert_insert.php>";

echo "<table border=\"1\">";
echo "<tr>";
echo "<td>公司名稱</td><td><input type=\"text\" name=\"com_name\" style=\"width:325px;\" /></td>";
echo "</tr>";
echo "<tr>";
echo "<td>連絡電話</td><td><input type=\"text\" name=\"phone\" style=\"width:325px;\" /></td>";
echo "</tr>";
echo "<tr>";
echo "<td>負責人</td><td><input type=\"text\" name=\"manager\" style=\"width:325px;\" /></td>";
echo "</tr>";
echo "<tr>";
echo "<td>產品名稱</td><td><input type=\"text\" name=\"produce\" style=\"width:325px;\" /></td>";
echo "</tr>";
echo "<tr>";
echo "<td>總價</td><td><input type=\"text\" name=\"price\" style=\"width:325px;\" /></td>";
echo "</tr>";

echo "</table>";
echo"<input type=\"submit\" value=\"輸入\"\ style=\"width:75px; height:30px;\" onClick=\"this.form.submit();\" / >";

echo "</form>";
echo "</body>";
echo "</html>";


?>