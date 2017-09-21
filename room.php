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
      <div id="btn_a"><a href="index.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image5','','image/about_.png',1)"><img id="Image5" src="image/about.png" width="48" height="72"></a></div>
    <div id="btn_n"><a href="news.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image4','','image/news_.png',1)"><img src="image/news.png" name="Image4" width="48" height="72" id="Image4"></a></div>
    <div id="btn_r"><a href="rooms.php"><img src="image/bn_r.png" width="46" height="100"></a></div>
    <div id="btn_m"><a href="map.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image6','','image/map_.png',1)"><img src="image/map.png" name="Image6" width="48" height="72" id="Image6"></a
    ></div>
    <div id="btn_b"><a href="board.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image7','','image/board_.png',1)"><img id="Image7" src="image/board.png" width="48" height="72"></a></div>
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
      <div class="content_left">

      <?php
if(isset($_REQUEST["submit"])){
	$ordername=$_REQUEST["ordername"];
	$chickin=$_REQUEST["chickin"];
	$day=$_REQUEST["day"];
	$sb=$_REQUEST["sb"];
	$sq=$_REQUEST["sq"];
	$cq=$_REQUEST["cq"];
	$nowtime=date('Y-m-d H:i:s',time()+(8*60*60));
	if($ordername=="") {echo "<script>alert('請輸入訂房者姓名');</script>";}
else if($chickin=="") {echo "<script>alert('請選擇入住日期');</script>";}
else if($nowtime>$chickin) {echo "<script>alert('選擇日期為無效日期');</script>";}
else if($day=="") {echo "<script>alert('請選擇住房天數');</script>";}

else if($sb==0 && $sq==0 && $cq==0){ echo "<script>alert('請選擇房型!');</script>";}
	else {
		$_SESSION["ordername"]=$ordername;
		$_SESSION["day"]=$day;
		$_SESSION["chickin"]=$chickin;
		$_SESSION["sb"]=$sb;
		$_SESSION["sq"]=$sq;
		$_SESSION["cq"]=$cq;
		$_SESSION["nowtime"]=$nowtime; 
		header("Location:order.php"); 
}
}
?>

<form action="room.php" method="post">
訂房者姓名：　
<input name="ordername" type="text" class="input_text" />
<br />
住房日期：　　
<label for="bookdate"> </label>
<input name="chickin" type="date" class="input_text" id="chickin" placeholder="2016-01-05" >
<br />
住房天數：　　
<select name="day" id="day">
  <option value="1" selected="selected">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
</select>
<br />
<br />
木屋二人房：　&nbsp;&nbsp;&nbsp;&nbsp; 　　
 &nbsp; 
 <select name="sb" id="sb">
  <option value="0" selected="selected">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
</select>
&nbsp; 間
<br />
舒適四人房：　　　&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;
<select name="sq" id="sq">
  <option value="0" selected="selected">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
</select>
&nbsp; 間<br />
樓中樓小木屋六人房：　
<select name="cq" id="cq">
  <option value="0" selected="selected">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
</select>  
&nbsp; 間
<br />
<input name="submit" type="submit" value="送出"/>
<input name="reset" type="reset" value="重設"/>
</form>
      </div>
      
    </div>
  <!-- InstanceEndEditable --></div>
</div>
</body>
<!-- InstanceEnd --></html>
