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
<body onLoad="MM_preloadImages('image/bn_1_.png','image/about_.png','image/room_.png','image/news_.png','image/sing_.png','image/bn6_.png','image/logout_.png','image/board_.png')">
<?php require_once("db_connect.php"); ?>
<?php session_start();?>
<div class="gridContainer clearfix">
  <div id="LayoutDiv1"><!-- InstanceBeginEditable name="EditRegion3" -->
    <div class="btn">
      <div id="btn_a"><a href="index.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image5','','image/about_.png',1)"><img src="image/about.png" name="Image5" width="48" height="72" id="Image5"></a></div>
    <div id="btn_n"><a href="news.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image4','','image/news_.png',1)"><img src="image/news.png" name="Image4" width="48" height="72" id="Image4"></a></div>
    <div id="btn_r"><a href="rooms.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image2','','image/room_.png',1)"><img src="image/room.png" name="Image2" width="48" height="72" id="Image2"></a></div>
    <div id="btn_m"><a href="map.php"><img src="image/bn_t.png" name="Image6" width="46" height="100" id="Image6"></a
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
      <div class="content_map1"><h1>溪頭聖茂民宿</h1>
      <div class="con_map1">
      <p><img src="image/map_add.png"><br>
        <span class="txtsize14">558台灣南投縣鹿谷鄉興產路22-12號</span></p>
     <img src="image/line.png">
      <p><img src="image/map_car.png"><br>
        <span class="txtsize14">國道3號中二高→竹山交流道→右轉接台3號往鹿谷/溪頭/杉林溪方向→左轉接保甲路→左轉接151號縣道→溪頭聖茂民宿</span></p>
</div>
      </div>
      <div class="content_map2">
      
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.920778828324!2d120.791130314387!3d23.678790897426353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346ed12feeaa4f9f%3A0x92fd9d38595d7df7!2z5rqq6aCt6IGW6IyC5rCR5a6_!5e0!3m2!1szh-TW!2stw!4v1451915257678" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
  <!-- InstanceEndEditable --></div>
</div>
</body>
<!-- InstanceEnd --></html>
