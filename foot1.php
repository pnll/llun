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
	    <a href="#"><img src="http://llun.com/v2/images/banner.gif" width="90" height="30" border="0" alt="▲ Top of Page"></a>
        </td>
    </tr>
</table>
</body>
</html>