<?php
$hostname = "localhost";
$database = "product";
$username = "root";
$password = "1234";
$sql_connect = mysql_pconnect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_select_db($database, $sql_connect);
/*mysql_connect($hostname, $username, $password) or die("Unable to connect to database");
@mysql_select_db( "$database") or die( "Unable to select database");*/

mysql_query('SET NAMES UTF8');

?>