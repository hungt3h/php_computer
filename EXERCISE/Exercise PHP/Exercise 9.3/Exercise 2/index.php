<?php
	$arr = ["1", "2", "3", "4", "5", "6"];

	$lonnhat = max($arr);
	$nhonhat = min($arr);
	
	echo "Cho dãy số: 1, 2, 3, 4, 5, 6". "<br/>";
	echo "Giá trị lớn nhất: ". $lonnhat. "<br/>";
	echo "Giá trị nhỏ nhất: ". $nhonhat. "<br/>";
	echo "Và trung bình cộng của dãy số: ". array_sum($arr) / 6;
?>