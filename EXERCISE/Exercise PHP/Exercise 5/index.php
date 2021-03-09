<?php
	$sodien = 245;
	$muc1 = 450;
	$muc2 = 600;
	$muc3 = 750;
	$muc4 = 900;
	$muc5 = 1000;
	$muc6 = 1200;

	echo "Số điện tiêu thụ: ". $sodien. "KWh". "<br/>";
	if ($sodien <= 0) {
		echo "Số điện không hợp lệ!!";
	// Số điện <100
	}elseif ($sodien <= 100) {
		$sotien = $sodien * $muc1;
		echo "Số tiền cần trả: ". $sotien. "Đ";
	// Từ số 101 đến 200
	}elseif ($sodien <= 200) {
		$sotien = (100 * 450) + ($sodien - 100) * 600;
		echo "Số tiền cần trả: ". $sotien. "Đ";
	// Từ số 201 đến 300
	}elseif ($sodien <= 300) {
		$sotien = (100 * 450) + (100 * 600) + ($sodien - 200) * 750;
		echo "Số tiền cần trả: ". $sotien. "Đ";
	// Từ số 301 đến 500
	}elseif ($sodien <= 500) {
		$sotien = (100 * 450) + (100 * 600) + (100 * 750) + ($sodien - 300) * 900;
		echo "Số tiền cần trả: ". $sotien. "Đ";
	// Từ số 501 đến 1000
	}elseif ($sodien <= 1000) {
		$sotien = (100 * 450) + (100 * 600) + (100 * 750) + (200 * 900) + ($sodien - 500) * 1000;
		echo "Số tiền cần trả: ". $sotien. "Đ";
	// Số điện >1000
	}elseif ($sodien > 1000) {
		$sotien = (100 * 450) + (100 * 600) + (100 * 750) + (200 * 900) + (500 * 1000) + ($sodien - 1000) * 1200;
		echo "Số tiền cần trả: ". $sotien. "Đ";
	}

?>