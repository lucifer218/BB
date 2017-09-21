<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class=""><!-- InstanceBegin template="/Templates/t.dwt.php" codeOutsideHTMLIsLocked="false" -->
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- InstanceBeginEditable name="doctitle" -->
<title>Chalet</title>
<!-- InstanceEndEditable -->
<link href="css/boilerplate.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/div.css" rel="stylesheet" type="text/css" />
<link href="css/text.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-image: url(image/paper.jpg);
}
</style>
<!-- 
若要深入了解檔案頂端 html 標籤周圍的條件式註解:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/

如果您使用自訂的 Modernizr 組建 (http://www.modernizr.com/)，請執行下列動作:
* 在這裡將連結插入您的 js
* 將下列連結移至 html5shiv
* 將「no-js」類別新增至頂端的 html 標籤
* 如果您在 Modernizr 組建中包含 MQ Polyfill，也可以將連結移至 respond.min.js 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="js/respond.min.js"></script>
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>
<body onLoad="MM_preloadImages('image/bn_1_.png','image/about_.png','image/room_.png','image/news_.png','image/board_.png','image/sing_.png','image/bn6_.png','image/logout_.png','image/map_.png')">
<?php require_once("db_connect.php"); ?>
<?php session_start();?>
<div class="gridContainer clearfix">
  <div id="LayoutDiv1"><!-- InstanceBeginEditable name="EditRegion3" -->
    <div class="btn">
    <div id="btn_a"><a href="index.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image5','','image/about_.png',1)"><img src="image/about.png" name="Image5" width="48" height="72" id="Image5"></a></div>
    <div id="btn_n"><a href="news.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image4','','image/news_.png',1)"><img src="image/news.png" name="Image4" width="48" height="72" id="Image4"></a></div>
    <div id="btn_r"><a href="rooms.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image2','','image/room_.png',1)"><img src="image/room.png" name="Image2" width="48" height="72" id="Image2"></a></div>
    <div id="btn_m"><a href="map.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image6','','image/map_.png',1)"><img src="image/map.png" name="Image6" width="48" height="72" id="Image6"></a
    ></div>
    <div id="btn_b"><a href="board.php"><img src="image/bn_b.png" name="Image3" width="46" height="100" id="Image3"></a></a></div>
    <div id="btn_s">
	<?php
	$str="<a href='login.php'><img href='login.php' src='image/login.png' width='48' height='72'/></a>";
	if(isset($_SESSION["id"])) {
	echo str_replace("<a href='login.php'><img href='login.php' src='image/login.png' width='48' height='72'/></a>","<a href='logout.php'><img href='logout.php' src='image/logout.png' width='48' height='72'/></a>",$str);
	//str_replace查詢字串做代替
	}
	else echo $str="<a href='login.php'><img href='login.php' src='image/login.png' width='48' height='72'/></a>";
	?></div>
    </div>
    <div class="bg">
<?php
if(isset($_SESSION["name"])) $name=$_SESSION["name"];
else $name="";
if(isset($_SESSION["id"])) $id=$_SESSION["id"];
else $id="";

if(isset($_REQUEST["submitmsg"])){
	$name=$_REQUEST["txt_name"];
	$msg=$_REQUEST["txt_msg"];
}
?>
<div class="content_left">
<form enctype="multipart/form-data"  action="board.php" method="POST">
姓名： 
<input name="txt_name" type="text" class="input_text" value="<?php echo $name; ?>"/>
<br />
上傳檔案: <input name="fileToUpload" type="file"/> 
<br />
內容：<br />
<textarea name="txt_msg" cols="38" rows="3" class="input_board"></textarea>

<br>
<input name="submitmsg" type="submit" value="送出留言"/>
<input name="reset" type="reset" value="清除"/>
</form>
</div>


<?php
if(isset($_REQUEST["submitmsg"])){
   $upload_dir = "files/"; // 自訂上傳資料夾
   $upload_file =$upload_dir.$_FILES["fileToUpload"]["name"]; // 檔案檔名
   $checkOk = 1; // 通過檢查標籤
   $imageFileType=$_FILES["fileToUpload"]["type"]; // 檔案格式
//如果出現錯誤則停止程式
   if($_FILES["fileToUpload"]["error"]>0){
	 echo "<script>alert('檔案上傳失敗!');</script>";
	 $checkOk = 0;
	   }else{
//直接自動修改檔名避免重複命名
	 $file=explode(".",$upload_file);
	 $newupload_file=$file[0]."-".date('YmdHis').".".$file[1];   
  
// 檢查檔案大小
	 if($_FILES["fileToUpload"]["size"] > 10000000){
	 echo "<script>alert('檔案太大，無法上傳!');</script>";
	 $checkOk = 0;	
	 }else{
// 檢查檔案格式
	if($imageFileType != "image/jpg" && $imageFileType != "image/png" && $imageFileType != "image/jpeg" && $imageFileType != "image/gif" ){
		echo "<script>alert('只接受 JPG, JPEG, PNG & GIF 等圖片格');</script>";
		$checkOk = 0;
	}}}
  
// if checkOk == 1 移動檔案
	if($checkOk == 1) {
		if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], iconv("utf-8", "big5", $newupload_file)) && $name!="" && $msg!="") {
			$sql="INSERT INTO board(name,img,message,datetime) VALUE('".$name."', '".$newupload_file."', '".$msg."', '".date('Y-m-d H:i:s',time()+(8*60*60))."')";
			mysqli_query($link,$sql) or exit($sql);
			$sqlnum="select num from board where name='$name'";
			$result=mysqli_query($link,$sqlnum) or exit($sqlnum);
			$msg="";
			echo "<script>alert('檔案 ". $_FILES["fileToUpload"]["name"]. " 已上傳成功!');</script>";
			}else{
				echo "<script>alert('姓名及內容不可為空、檔案上傳失敗!');</script>";
			}
		} // end checkOk.
	   
}// end submit check 
?>


<?php
//一頁幾筆
  $pagenum=1;
//計算總頁數

  $sq1page="select * from board";
  $rowspage=mysqli_query($link,$sq1page);
  $numpage=mysqli_num_rows($rowspage);//總筆數
  $pages=ceil($numpage/$pagenum); //總頁數
  
  if(isset($_GET['page'])){
	  $nowpage=$_GET['page'];//接受地址传过来的变量，$pagen表示翻页的页数，表示用户浏览的页数
  }
  else{$nowpage=1;}
  $low=1*($nowpage-1);//$low这个变量是决定数据表从第几条数据开始查起，这个公式是这样得来的，假设我们的数据表i中有30条记录，每页设定显示10条记录，第一页的$low就必须为0，这样它才可以查询1~10条的记录，第2页要查询11~20条记录，那么$low必须为10，那么我们通过传过来的$pagen的值，利用这个公式，便能改变$low的值，从而显示不同的数据
    
  $resultmsg = mysqli_query($link,"select * from board order by num desc limit $low,1");
  if($numpage){ //如果$numpage数据不为空，存在就会进行以下判断
  echo '<div id="page">';
	  if($nowpage!=1) echo '<a href="board.php?page=1">首頁 | </a>';
	  	else echo '首頁 | ';
	  if($nowpage>1) echo '<a href="board.php?page='.($nowpage-1).'">上頁 | </a>';
	  	else echo '上頁 | ';
	  if($nowpage<$pages) echo '<a href="board.php?page='.($nowpage+1).'">下頁 | </a>';
		else echo '下頁 | ';
	  if($nowpage<$pages) echo '<a href="board.php?page='.$pages.'">尾頁</a>';
	  	else echo '尾頁 ';
		echo '目前在 '.$nowpage.' / '.$pages.' 頁，共 '.$numpage.' 筆留言';
	echo '</div>';
	}
	while($row=mysqli_fetch_array($resultmsg)){
		echo '<div class="content_right">';
		echo "";
		echo '
		發表者：'.$row['name'].'</br>
		發表日期：'.$row['datetime'].'</br>
		說：'.nl2br($row['message']).'<a href="'.$row['img'].'"  target="_blank"><br/><img src="'.$row['img'].'" longdesc="'.$row['img'].'" width="200" height="200"/></a>'.'</div>';
}
mysqli_free_result($resultmsg);
?>
</div></div>
  <!-- InstanceEndEditable --></div>
</div>
</body>
<!-- InstanceEnd --></html>
