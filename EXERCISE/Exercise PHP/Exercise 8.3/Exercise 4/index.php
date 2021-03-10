<?php
	$a = "EV2009";
	$b = "Tấm hợp kim nhôm ngoài trời EV2009";
	$c = 500;
	$d = 160000;
	$e = 0.05;
	$truoc = $c * $d;
	$sau = $c * $d * $e;
	echo "Mã sản phẩm: ". $a. "<br/>";
	echo "Tên sản phẩm: ". $b. "<br/>";
	echo "Số lượng: ". $c. "<br/>";
	echo "Đơn giá: ". $d. "<br/>";
	echo "VAT: ". $e. "<br/>";
	echo "Thông tin sản phẩm trước khi trừ thuế = ". $truoc. "<br/>";
	echo "Thông tin sản phẩm sau khi trừ thuế = ". $sau;
?>