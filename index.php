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
"212.27", // ������ ����ȸ��?
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
"114.111.36.24", //���̹�
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
); // ���ٱ������


$user_ip = $_SERVER['REMOTE_ADDR'];

if(ipBlock($user_ip, $array)) echo "

[forbidden] The IPv4 address is not managed by KRNIC.<br>
<br>
(���͸��� ���͸��� ���� �ֽ��ϴ�..)<br>
<br>
�������� �湮���� �³���?<br>
<br>
�� ���� ������ �� �ִٸ� �°���..<br>
<br>
������ ���ƴٴϴ� ���� �κ��� ���Ը޽��� ������, �̷��� �����ϰԳ��� �ɷ������ϴ�.<br>
<br>
�� Ȩ�� ã���ֽ� ���̶�� ������ ��� ����� �˼��մϴ�.<br>
<br>
IP�� [�������� @ �������� �� ��]���� ���� �ֽø� ���� �뿪���� �����ϰڽ��ϴ�.<br>
<br>
<a href=http://llun.com/op2.php target=_top>:: �ӽ� ������ �����-_-; ::</a>
<br>
<!-- - ���� �ּ� : �������� �� �������� �� �� �Դϴ�.<br>
<br>
...�ؿ� �����Ǹ� �����մϴ�. -->";

else {
  // IP�ּ� log - PiNull
  $p_date = sprintf(date("m/d(H:i:s)"));
  $p_ip = $_SERVER['REMOTE_ADDR'];
  $p_refer = $_SERVER['HTTP_REFERER']; // ���Ӱ��

  $logname = date('Y');

  $fp = fopen("log$logname.txt","a");
  fwrite($fp,"$p_date : $p_ip [ $p_refer ]\n"); // ����ǥ�� ���� ǥ��
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