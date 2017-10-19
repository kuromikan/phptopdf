<?php
$fp = fopen('tmp.html', 'w');
$id=$_POST['id'];
include("mysql.php");
$data=array();
$print_data=array("公司名稱","連絡電話","負責人","產品名稱","總價");
$sql = "SELECT * FROM `custom_info` WHERE `id`='".$id."'";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_row($result)){
		for($i=0;$i<count($row);$i++)
		{
			$data[$i]=$row[$i];
		}
	}



$html=" <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\"> \n";
for($i=1;$i<count($data);$i++)
{
$html.=$print_data[$i-1]."：".$data[$i]."<br>\n";
}

fwrite($fp, $html);
fclose($fp);
echo "<html>";
echo "<body>";
/*echo "<form id='form1' name='form1' method='post' action=pdf_output.php>";
echo "<script   language=\"javascript\">document.form1.submit();</script>";
echo "</form>";*/
echo "<script>";
echo "window.open('pdf_output.php','');";
echo "</script>";
echo "</body>";
echo "</html>";


?>