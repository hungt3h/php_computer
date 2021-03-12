<?php
	$tong = 0;
	$chia_het = 20;
	
	for($i = 1; $i<=100; $i++){
    	$tong += $i;
	}
	echo "Tổng của 100 số nguyên đầu tiên: ". $tong. "<br/>";

	echo "Các số chia hết cho 3 trong khoảng thừ 20-50:". "<br/>";
	while ($chia_het <= 50) {
		if ($chia_het % 3 == 0) {
			echo $chia_het. "<br/>";	
		}
		$chia_het++;
	}
?>