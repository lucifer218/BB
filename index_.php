<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<link href="css/text.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
session_start();
$str="<a href='login.php'><img href='login.php' src='image/login.jpg' width='85' height='44'/></a>";
if(isset($_SESSION["id"])) {
	echo $_SESSION["name"]."您好 | ".str_replace("<a href='login.php'><img href='login.php' src='image/login.jpg' width='85' height='44'/></a>","<a href='logout.php'><img href='logout.php' src='image/logout.jpg' width='85' height='44'/></a>",$str); //str_replace查詢字串做代替
	echo "<a href='update.php'> | 修改會員資料</a>";
	}
	else echo $str="<a href='login.php'><img href='login.php' src='image/login.jpg' width='85' height='44'/></a>";
?>
| <a href="board.php?page=1">留言</a>
</body>
</html>