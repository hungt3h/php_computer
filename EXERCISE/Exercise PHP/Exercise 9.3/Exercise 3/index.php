<?php
	$tong = 0;
	$chiahet = 20;
	
	for($i = 1; $i<=100; $i++){
    	$tong += $i;
	}
	echo "Tổng của 100 số nguyên đầu tiên: ". $tong. "<br/>";

	echo "Các số chia hết cho 3 trong khoảng thừ 20-50:". "<br/>";
	while ($chiahet <= 50) {
		if ($chiahet % 3 == 0) {
			echo $chiahet. "<br/>";	
		}
		$chiahet++;
	}
?>