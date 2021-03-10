<?php
	$arr = ["1", "2", "3", "4", "5", "6"];

	$lonnhat = max($arr);
	$nhonhat = min($arr);
	$tbc = ($arr[0] + $arr[1] + $arr[2] + $arr[3] + $arr[4] + $arr[5]) / 6;

	echo "Cho dãy số: 1, 2, 3, 4, 5, 6". "<br/>";
	echo "Giá trị lớn nhất: ". $lonnhat. "<br/>";
	echo "Giá trị nhỏ nhất: ". $nhonhat. "<br/>";
	echo "Và trung bình cộng của dãy số: ". $tbc;
?>