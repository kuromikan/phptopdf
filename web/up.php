<?php
header("Content-Type:text/html; charset=utf-8");
ob_start();
if (!isset($_SESSION)) {
  session_start();
}

if($_SESSION['admin'] != "admin"){
	echo  "<script>window.open('index.html','_top'); </script>";
	
}


echo "<html>";
echo "<head>";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />";
echo "</head>";


echo"<input type=\"submit\" value=\"輸入\"\ style=\"font-size:26pt; width:160px; height:100px;\" onClick=\"parent.downframe.location.href='insert_index.php'\"/ >";
echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo"<input type=\"submit\" value=\"列印\"\ style=\"font-size:26pt; width:160px; height:100px;\" onClick=\"parent.downframe.location.href='print_index.php'\"/ >";


echo "</html>";

?>