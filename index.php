<?

function ipBlock($ip, $ipList) {
  for($i=0; $i<count($ipList); $i++) {
    $pos = strpos($ip, $ipList[$i]);
    if($pos===0) return true;
    else continue;
    }
return false;
}

$array = array(
"125.200.200.200",
"201.222",
"201.236",
"201.239",
"201.241",
"201.246",
"202.108",
"202.109",
"202.165.255",
"203.89.147",
"204",
"205.236.189",
"207.216",
"209",
"212.27", // 프랑스 광고회사?
"212.69.225",
"216",
"217.158.156",
"218.16",
"218.27",
"218.58",
"218.84",
//"220.162", // china
//"12", // AT&T
"24.86",
"38.116",
"64.76",
"64.116",
"64.117",
"64.186",
"64.210.196", // Cable & Wireless
"64.246", // Compass Communications
"65.198",
"66.77",
"66.96",
"66.147",
"66.194.6", // Websense
"66.196", // inktomi.com
"66.199.235.58", //domainsdb.net
"67.15",
"67.68",
"69",
"80", 
"81", 
"88", 
"89", 
"114.111.36.24", //네이버
"129",
"142.173", // xoduszero.biz
"146.83",
"146.155",
"152.74",
"154.5.203", // adult
"158",
"163.247",
"164.77", // ENTEL CHILE
"165.182",
"167.28",
"170",
"190",
"195",
"199"
); // 접근금지목록


$user_ip = $_SERVER['REMOTE_ADDR'];

if(ipBlock($user_ip, $array)) echo "

[forbidden] The IPv4 address is not managed by KRNIC.<br>
<br>
(필터링이 엉터리일 수도 있습니다..)<br>
<br>
정상적인 방문객이 맞나요?<br>
<br>
이 글을 읽으실 수 있다면 맞겠죠..<br>
<br>
무한정 돌아다니는 각종 로봇과 스팸메시지 때문에, 이렇게 엉성하게나마 걸러내봅니다.<br>
<br>
제 홈을 찾아주신 분이라면 불편을 드려 대단히 죄송합니다.<br>
<br>
IP를 [엔유엘엘 @ 엘엘유엔 닷 컴]으로 메일 주시면 차단 대역에서 제외하겠습니다.<br>
<br>
<a href=http://llun.com/op2.php target=_top>:: 임시 접속은 여기로-_-; ::</a>
<br>
<!-- - 메일 주소 : 엔유엘엘 앳 엘엘유엔 닷 컴 입니다.<br>
<br>
...해외 아이피를 차단합니다. -->";

else {
  // IP주소 log - PiNull
  $p_date = sprintf(date("m/d(H:i:s)"));
  $p_ip = $_SERVER['REMOTE_ADDR'];
  $p_refer = $_SERVER['HTTP_REFERER']; // 접속경로

  $logname = date('Y');

  $fp = fopen("log$logname.txt","a");
  fwrite($fp,"$p_date : $p_ip [ $p_refer ]\n"); // 따옴표는 문자 표시
  fclose($fp);

// nalog5
//$path = "nalog";
//$counter = "pinull";
//include "$path/nalog.php";

echo "
<html>
<head>
<title>PiNull, LLUN.com</title>
<meta http-equiv='content-type' content='text/html; charset=euc-kr'>
<meta name='author' content='PiNull, null@llun.com'>
</head>

<frameset rows='0, 1*' border='0'>
    <frame src='blank.html' scrolling='no' noresize>
    <frame src='op2.php'>
    <noframes>
    <p>not yet.</p>
    </noframes>
</frameset>
</html>";
}

?>