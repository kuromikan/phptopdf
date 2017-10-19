<?php
header("Content-Type:text/html; charset=utf-8");
ob_start();
if (!isset($_SESSION)) {
  session_start();
}

$_SESSION['admin'] = NULL;

if($_POST['passwd'] == "passwd" && $_POST['username']== "username"){
	 $_SESSION['admin'] = "admin";
	header("Location: main.html");
}else{
	header("Location: http://localhost");
}
ob_end_flush();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
