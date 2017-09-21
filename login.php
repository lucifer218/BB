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
<body onLoad="MM_preloadImages('image/bn_1_.png','image/about_.png','image/room_.png','image/news_.png','image/sing_.png','image/bn6_.png','image/logout_.png','image/map_.png')">
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
    <div id="btn_b"><a href="board.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image7','','image/board_.png',1)"><img id="Image7" src="image/board.png"></a></div>
    <div id="btn_s"><a href="login.php"><img src="image/bn_s.png" width="46" height="100"></a></div>
    </div>
    <div class="bg">
      <div id="content_login"><div id="login">
  <?php
  if(isset($_REQUEST["submit"])){
	  $u=$_REQUEST["username"];
	  $p=$_REQUEST["password"];
	  $flag=1;
	  if($_REQUEST["username"]=="") {echo "帳號未填"; $flag=0;}
	  if($_REQUEST["password"]=="") {echo "密碼未填"; $flag=0;}
	  if($flag==1){
		  $sql="select id,name,password,ex,birthday,email
		  from members
		  where id='".$u."' AND password='".$p."'";
		  $result=mysqli_query($link,$sql) or exit($sql);
		  $row=mysqli_num_rows($result);
		  if($row!=1) {echo "帳號密碼錯誤";}
		  else {
			  $row=mysqli_fetch_row($result);
			  //header('Location: http://www.example.com/');
			  echo '<meta http-equiv="REFRESH" CONTENT=0;url=welcome.php>';
			  $_SESSION["id"]=$row[0];
			  $_SESSION["password"]=$row[1];
			  $_SESSION["name"]=$row[2];
			  $_SESSION["ex"]=$row[3];
			  $_SESSION["birthday"]=$row[4];
			  $_SESSION["email"]=$row[5];
			  $_SESSION["address"]=$row[6];
			  echo $_SESSION["id"]." ";
			  echo $_SESSION["name"]." ";
			  echo $row[1]; 
			  }
	  }
  }
  ?>

<form id="form1" name="login" method="post" action="login.php" >
帳號： <input name="username" class="input_text" type="text" />
<br />
密碼： <input name="password" class="input_text" type="password" />
<br>
 　　　　　
 <input name="submit" type="submit" value="登入"/>
<input name="reset" type="reset" value="清除"/>
<br /> 
　　　　　
<input name="button" type="button" value="註冊會員" onclick="window.location='signUp.php'"/>
</form>
</div></div>
    </div>
  <!-- InstanceEndEditable --></div>
</div>
</body>
<!-- InstanceEnd --></html>
