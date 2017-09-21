<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<link href="css/text.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php require_once("db_connect.php"); ?>
<?php
session_start();
if(isset($_SESSION["name"])) $name=$_SESSION["name"];
else $name="";
if(isset($_SESSION["id"])) $id=$_SESSION["id"];
else $id="";

if(isset($_REQUEST["submitmsg"])){
	$name=$_REQUEST["txt_name"];
	$msg=$_REQUEST["txt_msg"];
	
}
?>
<form enctype="multipart/form-data"  action="board.php" method="POST">
姓名：
<input name="txt_name" type="text" value="<?php echo $name; ?>"/>
<br />
上傳檔案: <input name="fileToUpload" type="file" /> 
<br />
內容：<br />
<textarea name="txt_msg" cols="40" rows="6"></textarea>
<br />
<input name="submitmsg" type="submit" value="送出留言"/>
<input name="reset" type="reset" value="清除"/>
</form>
<?php
//記得www底下新增files的資料夾
if(isset($_REQUEST["submitmsg"])){
   $upload_dir = "files/"; // 自訂上傳資料夾
   $upload_file =$upload_dir.$_FILES["fileToUpload"]["name"]; // 檔案檔名
   $checkOk = 1; // 通過檢查標籤
   $imageFileType=$_FILES["fileToUpload"]["type"]; // 檔案格式
//如果出現錯誤則停止程式
   if($_FILES["fileToUpload"]["error"]>0){
 	 exit ("<script>alert('檔案上傳失敗!');</script>");
   }
//直接自動修改檔名避免重複命名
   $file=explode(".",$upload_file);
   $newupload_file=$file[0]."-".date('YmdHis').".".$file[1];   

// 檢查檔案大小
   if($_FILES["fileToUpload"]["size"] > 10000000){
   echo "<script>alert('檔案太大，無法上傳!');</script>";
   $checkOk = 0;
   }
// 檢查檔案格式
  if($imageFileType != "image/jpg" && $imageFileType != "image/png" && $imageFileType != "image/jpeg" && $imageFileType != "image/gif" ){
	  echo "<script>alert('只接受 JPG, JPEG, PNG & GIF 等圖片格');</script>";
	  $checkOk = 0;
  }

// if checkOk == 1 移動檔案
  if($checkOk == 1) {
	  if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], iconv("utf-8", "big5", $newupload_file))) {
		  echo "<script>alert('檔案 ". $_FILES["fileToUpload"]["name"]. " 已上傳成功!');</script>";
		  if($name!="" && $msg!="")
		  {
			  $sql="INSERT INTO board(name,img,message,datetime) VALUE('".$name."', '".$newupload_file."', '".$msg."', '".date('Y-m-d H:i:s',time()+(8*60*60))."')";
			  mysql_query($sql) or exit($sql);
			  $sqlnum="select num from board where name='$name'";
			  $result=mysql_query($sqlnum) or exit($sqlnum);
			  $msg="";
			  }
		  }else{
			  echo "上傳失敗!";
		  }
	  } // end checkOk
}// end submit check 
?>
<?php
$resultall=mysql_query("select * from board");
while($row=mysql_fetch_array($resultall)){
	echo '<div id="header">'.'No.'.$row['num'].' 留言人： <span class="white_text">'.$row['name'].'</span> 於'.$row['datetime'].'留言</div>';
	echo '<div id="content">'.nl2br($row['message']).'<a href="'.$row['img'].'"  target="_blank"><br/><img src="'.$row['img'].'" longdesc="'.$row['img'].'" width="100" height="100"/></a>'.'</div>';
}
mysql_free_result($resultall);
?>

</body>
</html>