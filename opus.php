<?
$path = "../nalog";
$counter = "pinull";
include "$path/nalog.php";


  // IP주소 log - PiNull
  $p_date = sprintf(date("m/d(H:i:s)"));
  $p_ip = $_SERVER['REMOTE_ADDR'];
  $p_refer = $_SERVER['HTTP_REFERER']; // 접속경로

  $logname = date('Y');

  $fp = fopen("log2.txt","a");
  fwrite($fp,"$p_date : $p_ip [ $p_refer ]\n"); // 따옴표는 문자 표시
  fclose($fp);


   $_zb_url = "http://llun.com/zb41/";
   $_zb_path = "/home/hosting_users/pinull/www/zb41/";
   include $_zb_path."outlogin.php";

   // theme부분
   $last = '104';
   if ($op == '')
   {
	$op = $last;
   }
   $op_p = $op-1; //prev
   $op_n = $op+1; //next
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
	        font-family: 굴림, verdana;
	        font-size: 9pt;
	      }
            A:link {color:#333333;text-decoration:none;}
            A:visited {color:#333333;text-decoration:none;}
            A:active {color:#333333;text-decoration:none;}
            A:hover {color:gray;text-decoration:none;}
            .theme { color: #003300; font-size: 7pt; font-family: Verdana, Arial, Helvetica, sans-serif }
            .mini { color: #FFFFFF; font-size: 8pt; font-family: Verdana, Arial, Helvetica, sans-serif }
            .counter { color: #FFFFFF; font-size: 7pt; font-weight:bold; font-family: Verdana, Arial, Helvetica, sans-serif }
            .bg_l {background-image:url("images/bottom_l.gif"); Background-repeat:no-repeat}
            .bg {background-image:url("images/bottom.gif"); Background-repeat:no-repeat}
            .bg_r {background-image:url("images/bottom_r.gif"); Background-repeat:no-repeat}
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

<body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" oncontextmenu="return false">
<table width="1058" border="0" cellpadding="0" cellspacing="0" align="center">
    <tr>
        <td width="48" rowspan="2" background="images/sp.gif"></td>
        <td width="910" height="183"><img src="images/maintitle.jpg" width="910" height="183" border="0" alt="Off The Record : 비보도"></td>
        <td width="100" rowspan="2" valign="top" background="images/menu_bg.gif">
            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr><td width="100%" height="20"><img src="images/menu_top.gif" width="100" height="59" border="0"></td></tr>
<tr><td align="left"><a href="opus.php"><img src="images/menu1.gif" width="100" height="52" border="0"></a></td></tr>
<tr><td align="left"><a href="pinull.php"><img src="images/menu2.gif" width="100" height="54" border="0"></a></td></tr>
<tr><td align="left"><a href="http://llun.com/zb41/zboard.php?id=p_gallery"><img src="images/menu3.gif" width="100" height="54" border="0"></a></td></tr>
<tr><td align="left"><a href="http://llun.com/zb41/zboard.php?id=p_daily"><img src="images/menu4.gif" width="100" height="51" border="0"></a></td></tr>
<tr><td align="left"><a href="http://llun.com/zb41/zboard.php?id=p_lecture"><img src="images/menu5.gif" width="100" height="54" border="0"></a></td></tr>
<tr><td align="left"><a href="http://llun.com/zb41/zboard.php?id=p_log"><img src="images/menu6.gif" width="100" height="49" border="0"></a></td></tr>
<tr><td align="left"><a href="http://llun.com/zb41/zboard.php?id=p_mono"><img src="images/menu7.gif" width="100" height="53" border="0"></a></td></tr>
<tr><td align="left"><a href="http://llun.com/zb41/zboard.php?id=p_guest"><img src="images/menu8.gif" width="100" height="51" border="0"></a></td></tr>
<tr><td align="left"><a href="link.php"><img src="images/menu9.gif" width="100" height="52" border="0"></a></td></tr>
<!--//          <tr>
                    <td width="100%" align="center">
                        <a href=# target=_blank><img src="banner.jpg" border=0 width="90" height="30"></a> 
                    </td>
                </tr>
<tr><td height=5></td></tr>
//-->
                <tr>
                    <td width="100%" align="center">
			<br>
                        <table cellspacing="0" align="center" cellpadding="1">
                            <tr>
                                <td width="60" align="center" bgcolor="#777777">
                                   <p class="counter"><?=$today_text?> / <?=$total_text?></p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td bgcolor="#333333">
<!-- start -->
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr><td width="100%" align="center">
<br><? if ($op=='0') {echo"<a href='#' onfocus='this.blur()' onMouseOver='rollover(\"theme\",\"op/{$op}b.jpg\")' onMouseOut='rollover(\"theme\",\"op/$op.jpg\")'><img id='theme' src='op/$op.jpg' border='0' style='border-width:1; border-color:silver; filter:blendTrans(duration=2)' alt='하단 네비게이션을 이용해주세요 :)'></a>
";}
elseif ($op=='73') {echo"
<table border='0' cellpadding='0' cellspacing='0' style='border-width:1; border-color:silver; border-style:solid;' width='600' height='400'>
<tr><td>
<embed src='theme/$op.swf' play='true' loop='true' quality='high' width='600' height='400'></embed>
</td></tr></table>";}
else {echo"
<a href='opus.php?op=$op_p' onfocus='this.blur()' onMouseOver='rollover(\"theme\",\"op/{$op}b.jpg\")' onMouseOut='rollover(\"theme\",\"op/$op.jpg\")'><img id='theme' src='op/$op.jpg' border='0' style='border-width:1; border-color:silver; filter:blendTrans(duration=2)' alt='클릭하면 이전 테마로 넘어갑니다 :)'></a>
";} ?>
                        <p><table cellspacing=1 cellpadding=1 border=0>
<tr>
<? if ($op=='0') echo"<td class='counter' bgcolor=#777777 height='17' width='95' align='center'><a href='opus.php?op=$op_n'>Next &gt;</a></td>";
elseif ($op==$last) echo"<td class='counter' bgcolor=#777777 height='17' width='95' align='center'><a href='opus.php?op=$op_p'>&lt; Previous</a></td>";
else echo"
<td class='counter' bgcolor=#777777 height='17' width='95' align='center'><a href='opus.php?op=$op_p'>&lt; Previous</a></td>
<td class='counter' bgcolor=#777777 height='17' width='95' align='center'><a href='opus.php?op=$op_n'>Next &gt;</a></td>"; ?>
</tr>
</table>
<br>
<table border="0" cellspacing="0" cellpadding="3" width="800">
    <tr>
        <td width="100%" bgcolor="#00AA00">
            <div class="theme">
            <p class="theme"><b>Birthday: D<script language="JavaScript" src="dday.php?date=2008-3-6"></script></b>	    
	    <b><a href="opus.php?op=0">O</a></b>.
	    <b><a href="opus.php?op=1">I</a></b>.
            <b><a href="opus.php?op=2">II</a></b>.
            <b><a href="opus.php?op=3">III</a></b>.
            <b><a href="opus.php?op=4">IV</a></b>.
            <b><a href="opus.php?op=5">V</a></b>.
            <b><a href="opus.php?op=6">VI</a></b>.
            <b><a href="opus.php?op=7">VII</a></b>.
            <b><a href="opus.php?op=8">VIII</a></b>.
            <b><a href="opus.php?op=9">IX</a></b>.
            <b><a href="opus.php?op=10">X</a></b>.
            <b><a href="opus.php?op=11">XI</a></b>.
            <b><a href="opus.php?op=12">XII</a></b>.
            <b><a href="opus.php?op=13">XIII</a></b>.
            <b><a href="opus.php?op=14">XIV</a></b>.
            <b><a href="opus.php?op=15">X</a>+<a href="opus.php?op=15_2">V</a></b>.
            <b><a href="opus.php?op=16">XVI</a></b>.
            <b><a href="opus.php?op=17">XVII</a></b>.
            <b><a href="opus.php?op=18">XVIII</a></b>.
            <b><a href="opus.php?op=19">XIX</a></b>.
            <b><a href="opus.php?op=20">XX</a></b>.
            <b><a href="opus.php?op=21">XXI</a></b>.
            <b><a href="opus.php?op=22">XXII</a></b>.
            <b><a href="opus.php?op=23">XXIII</a></b>.
            <b><a href="opus.php?op=24">XXIV</a></b>.
            <b><a href="opus.php?op=25">XXV</a></b>.
            <b><a href="opus.php?op=26">XXVI</a></b>.
            <b><a href="#" onClick="MM_openBrWindow('theme_27.html','','scrollbars=no,width=520,height=395')">XXVII</a></b>.
            <b><a href="opus.php?op=28">XXVIII</a></b>.
            <b><a href="opus.php?op=29">XXIX</a></b>.
            <b><a href="#" onClick="MM_openBrWindow('theme_30.html','','scrollbars=no,width=820,height=420')">XXX</a></b>.
            <b><a href="opus.php?op=31">XXXI</a></b>.
            <b><a href="opus.php?op=32">XXXII</a></b>.
            <b><a href="opus.php?op=33">XXXIII</a></b>.
            <b><a href="opus.php?op=34">XXXIV</a></b>.
            <b><a href="opus.php?op=35">XXXV</a></b>.
            <b><a href="opus.php?op=36">XXXVI</a></b>.
            <b><a href="opus.php?op=37">XXXVII</a></b>.
            <b><a href="opus.php?op=38">XXXVIII</a></b>.
            <b><a href="opus.php?op=39">XXXIX</a></b>.
	    <b><a href="opus.php?op=40">XXXX</a></b>.
	    <b><a href="opus.php?op=41">XXXXI</a></b>.
	    <b><a href="opus.php?op=42">XXXXII</a></b>.
	    <b><a href="opus.php?op=43">XXXXIII</a></b>.
	    <b><a href="opus.php?op=44">XXXXIV</a></b>.
	    <b><a href="opus.php?op=45">XXXXV</a></b>.
	    <b><a href="opus.php?op=46">XXXXVI</a></b>.
	    <b><a href="opus.php?op=47">XXXXVII</a></b>.
	    <b><a href="opus.php?op=48">XXXXVIII</a></b>.
	    <b><a href="opus.php?op=49">XXXXIX</a></b>.
	    <b><a href="opus.php?op=50">XXXXX</a></b>.
	    <b><a href="opus.php?op=51">XXXXXI</a></b>.
	    <b><a href="opus.php?op=52">XXXXXII</a></b>.
	    <b><a href="opus.php?op=53">XXXXXIII</a></b>.
	    <b><a href="opus.php?op=54">XXXXXIV</a></b>.
	    <b><a href="opus.php?op=55">XXXXXV</a></b>.
	    <b><a href="opus.php?op=56">XXXXXVI</a></b>.
	    <b><a href="opus.php?op=57">XXXXXVII</a></b>.
	    <b><a href="opus.php?op=58">XXXXXVIII</a></b>.
	    <b><a href="opus.php?op=59">XXXXXIX</a></b>.
	    <b><a href="opus.php?op=60">XXXXXX</a></b>.
	    <b><a href="opus.php?op=61">XXXXXXI</a></b>.
	    <b><a href="opus.php?op=62">XXXXXXII</a></b>.
	    <b><a href="opus.php?op=63">XXXXXXIII</a></b>.
	    <b><a href="opus.php?op=64">XXXXXXIV</a></b>.
	    <b><a href="opus.php?op=65">XXXXXXV</a></b>.
	    <b><a href="opus.php?op=66">XXXXXXVI</a></b>.
	    <b><a href="opus.php?op=67">XXXXXXVII</a></b>.
	    <b><a href="opus.php?op=68">XXXXXXVIII</a></b>.
	    <b><a href="opus.php?op=69">XXXXXXIX</a></b>.
	    <b><a href="opus.php?op=70">XXXXXXX</a></b>.
	    <b><a href="opus.php?op=71">XXXXXXXI</a></b>.
	    <b><a href="opus.php?op=72">XXXXXXXII</a></b>.
	    <b><a href="opus.php?op=73">XXXXXXXIII</a></b>.
	    <b><a href="opus.php?op=74">XXXXXXXIV</a></b>.
	    <b><a href="opus.php?op=75">XXXXXXXV</a></b>.
	    <b><a href="opus.php?op=76">XXXXXXXVI</a></b>.
	    <b><a href="opus.php?op=77">XXXXXXXVII</a></b>.
	    <b><a href="opus.php?op=78">XXXXXXXVIII</a></b>.
	    <b><a href="opus.php?op=79">XXXXXXXIX</a></b>.
	    <b><a href="opus.php?op=80">XXXXXXXX</a></b>.
	    <b><a href="opus.php?op=81">XXXXXXXXI</a></b>.
	    <b><a href="opus.php?op=82">XXXXXXXXII</a></b>.
	    <b><a href="opus.php?op=83">XXXXXXXXIII</a></b>.
	    <b><a href="opus.php?op=84">XXXXXXXXIV</a></b>.
	    <b><a href="opus.php?op=85">XXXXXXXXV</a></b>.
	    <b><a href="opus.php?op=86">XXXXXXXXVI</a></b>.
	    <b><a href="opus.php?op=87">XXXXXXXXVII</a></b>.
	    <b><a href="opus.php?op=88">XXXXXXXXVIII</a></b>.
	    <b><a href="opus.php?op=89">XXXXXXXXIX</a></b>.
	    <b><a href="opus.php?op=90">XXXXXXXXX</a></b>.
	    <b><a href="opus.php?op=91">XXXXXXXXXI</a></b>.
	    <b><a href="opus.php?op=92">XXXXXXXXXII</a></b>.
	    <b><a href="opus.php?op=93">XXXXXXXXXIII</a></b>.
	    <b><a href="opus.php?op=94">XXXXXXXXXIV</a></b>.
	    <b><a href="opus.php?op=95">XXXXXXXXXV</a></b>.
	    <b><a href="opus.php?op=96">XXXXXXXXXVI</a></b>.
	    <b><a href="opus.php?op=97">XXXXXXXXXVII</a></b>.
	    <b><a href="opus.php?op=98">XXXXXXXXXVIII</a></b>.
	    <b><a href="opus.php?op=99">XXXXXXXXXIX</a></b>.
	    <b><a href="opus.php?op=100">XXXXXXXXXX</a></b>.
	    <b><a href="opus.php?op=101">CI</a></b>.
	    <b><a href="opus.php?op=102">CII</a></b>.
	    <b><a href="opus.php?op=103">CIII</a></b>.
	    <b><a href="opus.php?op=<?=$last?>"><font color=white>CIV</font></a></b>.
	    &amp; To be continued<!--discontinue-->..
	    <b>D<script language="JavaScript" src="dday.php?date=1985-3-6"></script></b></div>
        </td>
    </tr>
</table>

<br>

	</td>
    </tr>
</table>
<!-- end -->

<!--최근게시물-->
<table width="910" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#FFFFFF">
<tr><td width="450" rowspan="2" valign="top">
<? // "스킨이름", "타이틀", "게시판이름", 목록갯수, 글자제한
print_bbs("bbs", "Photo", "p_gallery", 7, 50) ?></td>
<td width="450"><? print_bbs("bbs", "사진강좌", "p_lecture", 3, 50) ?></td></tr>
<tr><td><? print_bbs("bbs", "Diary", "p_log", 3, 50) ?></td></tr>
<tr><td colspan="2"><? // "스킨이름", "타이틀", "게시판이름", 갯수, 가로크기, 세로크기, 가로갯수
print_gallery("gallery", "SnapShot", "p_daily", 8, 110, 90, 8) ?></td></tr></table>

        </td>
    </tr>
    <tr>
        <td class="bg_l">
	
	</td>
        <td class="bg" height="43" align="center">
            <p class="mini">Copyright ⓒ 2001~2007 <b>PiNull</b>. All rights reserved. 
            Contact nullⓐllun.com for more Information.
        </td>
        <td class="bg_r" height="43" align="center">
	    <a href="#"><img src="images/banner.gif" width="90" height="30" border="0" alt="▲ Top of Page"></a>
        </td>
    </tr>
</table>
</body>
</html>
