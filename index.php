<?php
	$z = mktime(0,0,0,1,1,2019);
	$month = ['01' => 'январь','02' => 'feburary', '03' => 'march','04' => 'april','05' => 'may','06' => 'june','07'=>'july','08'=>'august', '09'=>'septemper','10'=>'october','11'=>'nowebmer','12'=>'december'];
	
	for($i = 1; $i < 366; $i++){
		$str = '';
		$str .= $month[date('m',$z)].' '.date('j',$z);
		$z = mktime(0,0,0,date('m',$z),date('j',$z)+1,2019);
		$dir = 'new/'.$str;
		mkdir($dir);
        
	}