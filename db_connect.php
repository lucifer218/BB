<?php 
header("Content-Type:text/html; charset=utf-8");
$link = mysqli_connect('localhost','root','102052001','id1366880_testdb');
if(!$link){
	die('Could not connect MySQL: '.mysql_error());
}
/*if(!mysql_select_db('id1366880_testdb')) die("無此資料庫");
mysql_query("set names 'utf8'");*/

?>