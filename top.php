<?
   $_zb_url = "http://llun.com/zb41/";
   $_zb_path = "/home1/llun/public_html/zb41/";
   include $_zb_path."outlogin.php";
?>
<head>
<title>PiNull, Verse2 : Off The Record</title>
<meta name="author" content="PiNull, null@llun.com">
<meta http-equiv="content-type" content="text/html; charset=euc-kr">
<meta http-equiv="imagetoolbar" content="no">
<link rel=StyleSheet type=text/css href=http://llun.com/v2/pinull.css>
          <style type="text/css">
          <!--
            A:link {color:#000000;text-decoration:none;font-size: 8pt;}
            A:visited {color:#000000;text-decoration:none;font-size: 8pt;}
            A:active {color:#000000;text-decoration:none;font-size: 8pt;}
            A:hover {color:gray;text-decoration:none;font-size: 8pt;}

            A.me:link {color:#000000;text-decoration:none;font-size: 8pt; font-weight:bold;font-family: Verdana, Arial, Helvetica, sans-serif}
            A.me:visited {color:#000000;text-decoration:none;font-size: 8pt; font-weight:bold;font-family: Verdana, Arial, Helvetica, sans-serif}
            A.me:active {color:#000000;text-decoration:none;font-size: 8pt; font-weight:bold;font-family: Verdana, Arial, Helvetica, sans-serif}
            A.me:hover {color:silver;text-decoration:none;font-size: 8pt; font-weight:bold;font-family: Verdana, Arial, Helvetica, sans-serif}
           -->
          </style>
</head>

<body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" oncontextmenu="return false">
<table width="968" border="0" cellpadding="0" cellspacing="0" align="center">
    <tr>
        <td width="48" rowspan="2" background="http://llun.com/v2/images/sp.gif"></td>
        <td width="910" height="60">
                <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="290" rowspan="4"><a href="http://llun.com/v2/top.php"><img src="http://llun.com/v2/images/title.gif" width="290" height="90" border="0" alt="Off The Record : 비보도"></a></td>
                    <td width="85" rowspan="3" valign="top"><img src="http://llun.com/v2/images/b1.gif" width="78" height="29" border="0"></td>
                        <td width="70"><a href="http://llun.com/zb41/zboard.php?id=p_photo" class="me">&nbsp;<img src="http://llun.com/v2/images/b1_icon.gif" width="10" height="5" border="0">Gallery</a></td>
                    <td width="85" valign="top" rowspan="3"><img src="http://llun.com/v2/images/b2.gif" width="78" height="29" border="0"></td>
                        <td width="70"><a href="http://llun.com/zb41/zboard.php?id=p_mono" class="me">&nbsp;<img src="http://llun.com/v2/images/b2_icon.gif" width="10" height="5" border="0">Mono</a></td>
                    <td width="85" valign="top" rowspan="3"><img src="http://llun.com/v2/images/b3.gif" width="78" height="29" border="0"></td>
                        <td width="70"><a href="http://llun.com/zb41/zboard.php?id=p_lecture" class="me">&nbsp;<img src="http://llun.com/v2/images/b3_icon.gif" width="10" height="5" border="0">Lecture</a></td>
                    <td width="85" valign="top" rowspan="3"><img src="http://llun.com/v2/images/b4.gif" width="78" height="29" border="0"></td>
                        <td width="70"><a href="http://llun.com/v2/pinull.php" class="me">&nbsp;<img src="http://llun.com/v2/images/b4_icon.gif" width="10" height="5" border="0">Profile</a></td>
                </tr>
                    <tr>
                        <td width="70"><a href="http://llun.com/zb41/zboard.php?id=p_daily" class="me">&nbsp;<img src="http://llun.com/v2/images/b1_icon.gif" width="10" height="5" border="0">Snap</a></td>
                        <td width="70"><a href="http://llun.com/zb41/zboard.php?id=p_log" class="me">&nbsp;<img src="http://llun.com/v2/images/b2_icon.gif" width="10" height="5" border="0">Diary</a></td>
                        <td width="70"><a href="http://llun.com/v2/link.php" class="me">&nbsp;<img src="http://llun.com/v2/images/b3_icon.gif" width="10" height="5" border="0">Link</a></td>
                        <td width="70"><a href="http://llun.com/zb41/zboard.php?id=p_guest" class="me">&nbsp;<img src="http://llun.com/v2/images/b4_icon.gif" width="10" height="5" border="0">Guest</a></td>
                    </tr>
                    <tr>
                        <td width="70"><a href="http://llun.com/zb41/zboard.php?id=p_gallery" class="me">&nbsp;<img src="http://llun.com/v2/images/b1_icon.gif" width="10" height="5" border="0">Archive</a></td>
                        <td width="70">&nbsp;</td>
                        <td width="70">&nbsp;</td>
                        <td width="70">&nbsp;</td>
                    </tr>
                <tr>
                    <td width="620" colspan="8">
    <TABLE cellSpacing=1 width=100% bgColor=#dddddd border=0>
        <TR><TD align="right" bgColor=#ededed><?print_outlogin("simple","3","10");?></TD></TR>
    </TABLE>
					</td>
                </tr>
                </table>
        </td>
        <td width="10" rowspan="2" background="http://llun.com/v2/images/menu_bg.gif">
    </tr>
    <tr>
        <td>
<!--최근게시물-->
<table width="910" border="0" cellpadding="0" cellspacing="0" align="center">
<tr><td colspan="2"><? // "스킨이름", "타이틀", "게시판이름", 갯수, 가로크기, 세로크기, 가로갯수
print_dq("dq", "Today's Photo", "p_photo", 8, 100, 200, 8) ?></td></tr>
<tr><td width="570"  align="right" valign="top">
<? print_bbs("notice", "공지사항", "p_notice", 1, 50) ?><br>
<? print_bbs("mono", "monolog", "p_mono", 3, 50) ?><br>
<a href="http://llun.com/zb41/zboard.php?id=p_mono">+ more <b>monolog...</b></a><br></td>
<td width="330"  valign="top">
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr><td><? print_bbs("bbs", "지난 공지사항", "p_notice", 7, 40) ?><br></td></tr>
	<tr><td>
	<? // "스킨이름", "타이틀", "게시판이름", 목록갯수, 글자제한
	print_bbs("bbs", "Photo Archives", "p_gallery", 10, 40) ?><br></td></tr>
	<tr><td><? print_bbs("bbs", "사진강좌", "p_lecture", 5, 40) ?><br></td></tr>
<!--	<tr><td><? print_bbs("bbs", "Diary", "p_log", 7, 40) ?><br></td></tr>-->
	<tr><td><? print_gallery("gallery", "SnapShot", "p_daily", 6, 100, 90, 3) ?></td></tr></table>
</td></tr></table>
<!--최근게시물 끝-->

        </td>
    </tr>
    <tr>
        <td class="bg_l" bgcolor="#009900">
	
	</td>
        <td class="bg" height="43" align="center" bgcolor="#009900">
            <a href="#"><span style="COLOR: #FFFFFF">Copyright ⓒ 2001~2007 <b>PiNull</b>. All rights reserved. 
            Contact nullⓐllun.com for more Information.</span></a>
        </td>
        <td width="10" class="bg_r"></td>
    </tr>
</table>
</body>
</html>
