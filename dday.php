<?php

	// ���� ��¥ ����
	$today=time();
	
	// ������ ��¥ ��ȯ
	list($year,$month,$day)=split("-",$date);
	$d_day=mktime(0,0,0,$month,$day,$year);
	
	// ��¥ ���̸� �ϼ��� ��ȯ
	$daycount=intval(($today-$d_day) / 24 / 60 / 60);
            // ���� ������ -.PiNull
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


	// ȭ�� ���
	echo "
	document.write('$daycount');
	";
	exit;
?>