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
$id=$_POST['id'];
	$id_array=array();
	$cnt=0;
	$sql = "SELECT `id` FROM `custom_info`";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_row($result)){
		$id_array[$cnt]=$row[0];
		$cnt++;
	}


echo "<html>";
echo "<body>";
echo "<form id='form1' name='form1' method='post' action=print_index.php>";
echo "<select name=\"id\" onchange=\"this.form.submit()\">";
	for($i=0;$i<count($id_array);$i++)
	{
		if($id==$id_array[$i])
		{
			echo"<option selected value=\"$id_array[$i]\">$id_array[$i]</option>";
		}
		else
		{
			echo "<option value=\"$id_array[$i]\">$id_array[$i]</option>";
		}
	
	}
echo "</select>";
echo "<br>";
echo"<input type=\"submit\" value=\"輸出\"\ style=\"width:75px; height:30px;\" onClick=\"this.form.action='pdf_create.php';this.form.submit();\" / >";

echo "</form>";
echo "</body>";
echo "</html>";


?>