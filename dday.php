<?php

	// 현재 날짜 저장
	$today=time();
	
	// 지정한 날짜 변환
	list($year,$month,$day)=split("-",$date);
	$d_day=mktime(0,0,0,$month,$day,$year);
	
	// 날짜 차이를 일수로 변환
	$daycount=intval(($today-$d_day) / 24 / 60 / 60);
            // 에러 수정용 -.PiNull
            $p_fix=intval($today-$d_day);


            if ($p_fix > 0 & $p_fix <= 86400)
	{
		$daycount='-day';
	}
	elseif ($daycount <= 0)
	{
		$daycount=$daycount - 1;
	}
            else
	{
		$daycount='+' . $daycount;
	}


	// 화면 출력
	echo "
	document.write('$daycount');
	";
	exit;
?>