<?

$path = "nalog";
$counter = "pinull";
include "$path/nalog.php";


// IP주소 log - PiNull
  $p_date = sprintf(date("m/d(H:i:s)"));
  $p_ip = $_SERVER['REMOTE_ADDR'];
  $p_refer = $_SERVER['HTTP_REFERER']; // 접속경로

if ($p_ip <> "114.111.36.24") { // bot 차단
  $fp = fopen("log2.txt","a");
  fwrite($fp,"$p_date : $p_ip [ $p_refer ]\n"); // 따옴표는 문자 표시
  fclose($fp);
} // bot 차단

// theme부분
   $last = '173';
   if ($op=='') {
	$op = $last;
   }
   $op_p = $op-1; //prev
   $op_n = $op+1; //next


// 1:짙은배경, 2:연한배경, 3:밝은글씨
$colorset = rand(1,7);
 switch($colorset){
  case 7:
   $color1 = '#333333';
   $color2 = '#666666';
   $color3 = '#CCCCCC';
      break;
  case 6: //보라
   $color1 = '#660099';
   $color2 = '#9900CC';
   $color3 = '#9900FF'; 
      break;
  case 5: //초록
   $color1 = '#006600';
   $color2 = '#009900';
   $color3 = '#00CC33'; 
      break;
  case 4: //빨강
   $color1 = '#990000';
   $color2 = '#CC3300';
   $color3 = '#FF6600'; 
      break;
  case 3: //파랑
   $color1 = '#000099';
   $color2 = '#0033CC';
   $color3 = '#0066FF';
      break;
  case 2: //노랑
   $color1 = '#CC9900';
   $color2 = '#FFCC00';
   $color3 = '#FFFF00'; 
      break;
  default: //흑백
   $color1 = '#333333';
   $color2 = '#666666';
   $color3 = '#CCCCCC';
      break;
 }

//echo arabic2roman(1234) . "<br>\n";
//echo roman2arabic('MCCXXXIV') . "<br>\n";

$RomanNum = Array(
 "num" => Array(1,5,10,50,100,500,1000),
 "chr" => Array('I','V','X','L','C','D','M') );

function arabic2roman($num) {
 global $RomanNum;
 $szOut = "";
 
 for($pos=6; $pos>=0; $pos-=2) {
  $seed = $RomanNum['num'][$pos];
  $nDiv = (int)($num / $seed);
  $num %= $seed;
  
  if ($pos==6 || $nDiv <= 3) {
   $szOut .= str_pad("", $nDiv, $RomanNum['chr'][$pos]);
  } else if($nDiv <= 8) {
   $szOut .= str_pad("", 5 - $nDiv, $RomanNum['chr'][$pos]);
   $szOut .= $RomanNum['chr'][$pos+1];
   $szOut .= str_pad("", $nDiv - 5, $RomanNum['chr'][$pos]);
  } else {
   $szOut .= $RomanNum['chr'][$pos] . $RomanNum['chr'][$pos+2];
  }
 }
 
 return $szOut;
}

function roman2arabic($str) {
 global $RomanNum;
 $retVal = 0;
 
 for($i=0; $i<strlen($str); $i++) {
  $p = array_search($str[$i], $RomanNum['chr']);
  $n = $RomanNum['num'][$p];
  $retVal += $n;
  if ($i > 0 && $n > $x) $retVal -= (2 * $x);
  $x = $n;
 }
 
 return $retVal;
}
?>
<html>
<head>
<title>PiNull, Op.</title>
<meta name="author" content="PiNull, null@llun.com">
<meta http-equiv="content-type" content="text/html; charset=euc-kr">
<meta http-equiv="imagetoolbar" content="no">
          <style type="text/css">
          <!--
          	BODY, table, tr, td, input, textarea, select {
	        font-family: Tahoma, 굴림;
	        font-size: 8pt;
	      }
            A:link {color:white;text-decoration:none;}
            A:visited {color:white;text-decoration:none;}
            A:active {color:silver;text-decoration:none;}
            A:hover {color:silver;text-decoration:none;}

            A.title:link {font-family:Verdana;font-size:36;color:<?=$color2?>;text-decoration:none;}
            A.title:visited {font-family:Verdana;font-size:36;color:<?=$color2?>;text-decoration:none;}
            A.title:active {font-family:Verdana;font-size:36;color:<?=$color3?>;text-decoration:none;}
            A.title:hover {font-family:Verdana;font-size:36;color:<?=$color3?>;text-decoration:none;}

            .theme { color: <?=$color3?>; font-size: 7pt; font-family: Verdana, Arial, Helvetica, sans-serif }
            .mini { color: #FFFFFF; font-size: 7pt; font-family: Verdana, Arial, Helvetica, sans-serif }
            .counter { color: #FFFFFF; font-size: 9pt; font-weight:bold; font-family: Verdana, Arial}
            .bg {background-image:url("http://llun.com/v2/images/tran.gif"); Background-repeat:no-repeat}
           -->
          </style>
<script language=JavaScript>
function rollover(id,after) {
     eval(id+'.filters.blendTrans.stop();');
     eval(id+'.filters.blendTrans.Apply();');
     eval(id+'.src="'+after+'";');
     eval(id+'.filters.blendTrans.Play();');
}

<!--//
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
</head>

<body bgcolor="#666666" text="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" oncontextmenu="return false">
<div align=center>

<!-- start -->
<table width="900" border="0" cellspacing="0" cellpadding="0" bgcolor="black">
    <tr><td bgcolor="white" align="right" colspan="2">
            <a href="http://pinull.tistory.com/" class="title"><b>LLU</b><img src="/v2/images/logo2.gif" width="32" height="52" border="0">.com</a>
    </td></tr>
    <tr>
        <td height="2" bgcolor="<?=$color2?>" colspan="2">
        </td>
    </tr>
    <tr>
        <td width="765">&nbsp;</td>
        <td class="bg" width="135" height="18" align="center" bgcolor="<?=$color2?>">
          <a href="http://pinull.tistory.com/"><strong>▲ enter my blog</strong></a>
        </td>
    </tr>
    <tr><td width="100%" align="center" colspan="2">
<br><? if ($op=='0') {echo"<a href='#' onfocus='this.blur()' onMouseOver='rollover(\"theme\",\"theme/{$op}b.jpg\")' onMouseOut='rollover(\"theme\",\"theme/$op.jpg\")'><img id='theme' src='theme/$op.jpg' border='0' style='border-width:1; border-color:silver; filter:blendTrans(duration=2)' alt='하단 네비게이션을 이용해주세요 :)'></a>
";}
elseif ($op=='73' or $op=='105' or $op=='107') {echo"
<table border='0' cellpadding='0' cellspacing='0' style='border-width:1; border-color:silver; border-style:solid;' width='600' height='400'>
<tr><td>
<embed src='theme/$op.swf' play='true' loop='true' quality='high' width='600' height='400'></embed>
</td></tr></table>";}
else {echo"
<a href='$PHP_SELF?op=$op_p' onfocus='this.blur()' onMouseOver='rollover(\"theme\",\"theme/{$op}b.jpg\")' onMouseOut='rollover(\"theme\",\"theme/$op.jpg\")'><img id='theme' src='theme/$op.jpg' border='0' style='border-width:1; border-color:silver; filter:blendTrans(duration=2)' alt='클릭하면 이전 테마로 넘어갑니다 :)'></a>
";} ?>
<p>
    <tr>
        <td align="center" bgcolor="<?=$color1?>" colspan="2">
            <table cellspacing=0 cellpadding=0 border=0 bgcolor="<?=$color2?>">
		<tr>
		<? if ($op=='0') echo"<td class='counter' onMouseOver=this.style.backgroundColor='$color1' onMouseOut=this.style.backgroundColor='' height='30' width='600' align='center' onclick=location.href='$PHP_SELF?op=$op_n'>Next &gt;&gt;</td>";
		elseif ($op==$last) echo"<td class='counter' onMouseOver=this.style.backgroundColor='$color1' onMouseOut=this.style.backgroundColor='' height='30' width='600' align='center' onclick=location.href='$PHP_SELF?op=$op_p'>&lt;&lt; Previous</td>";
		else echo"
		<td class='counter' height='30' width='300' align='center' onMouseOver=this.style.backgroundColor='$color1' onMouseOut=this.style.backgroundColor='' onclick=location.href='$PHP_SELF?op=$op_p'>&lt;&lt; Previous</td>
		<td class='counter' height='30' width='300' align='center' onMouseOver=this.style.backgroundColor='$color1' onMouseOut=this.style.backgroundColor='' onclick=location.href='$PHP_SELF?op=$op_n'>Next &gt;&gt;</td>"; ?>
		</tr>
		</table>
<table width="600" cellspacing="0" border="1" bordercolordark="<?=$color3?>" bordercolorlight="<?=$color1?>" bgcolor="<?=$color2?>">
    <tr>
<?
   $wid=10;
   $etc=$last%$wid+1;

    for($n=$last;$n>=0;$n--){ 
    echo("<td width=60 align=center>"); 
     if($n == $op){ 
      echo("<b><font color=black>" . arabic2roman(${n}) . "</font></b>.");
     }else{ 
      echo("<b><a href=$PHP_SELF?op=$n>" . arabic2roman(${n}) . "</a></b>."); 
     } 
    echo("</td>");
//       if($n%$wid==$etc||$n%$wid==0){
       if($n%$wid==$etc){
       echo("</tr><tr>\n"); 
       }
    }

    for(;$etc<$wid;$etc++){
    echo("<td>&nbsp;</td>");
    }
?> 
    </tr>
</table>

        </td>
    </tr><tr><td height=40 align="right" valign="top" colspan="2">
            <div class="theme">
<!--	    <b><a href="$PHP_SELF?op=0">O</a></b>.
            <b><a href="$PHP_SELF?op=15">X</a>+<a href="$PHP_SELF?op=15_2">V</a></b>.
            <b><a href="#" onClick="MM_openBrWindow('theme_27.html','','scrollbars=no,width=520,height=395')">XXVII</a></b>.
            <b><a href="#" onClick="MM_openBrWindow('theme_30.html','','scrollbars=no,width=820,height=420')">XXX</a></b>.
-->
	    &amp; To be continued<!--discontinue-->..
            <b>Birthday: D<script language="JavaScript" src="dday.php?date=2016-3-6"></script></b>,	    
	    <b>D<script language="JavaScript" src="dday.php?date=1985-3-6"></script></b> ::
	    <b>D<script language="JavaScript" src="dday.php?date=2014-8-8"></script></b>
            <br>(<?=$today_text?> / <?=$total_text?>)</div>
        </td>
    </tr>

	</td>
    </tr>
</table>
<!-- end -->
</div>
</body>
</html>
