<!DOCTYPE html>
<html>
<head>
	<title>Vẽ bàn cờ</title>
	<style>
		table td{
			border: 1px solid black;
		}
		.black {
			height: 28px;
			width: 30px ;
			background-color: black;
		}
		.white {
			height: 28px;
			width: 30px ;
			background-color: white;
		}
	</style>
</head>
<body>
	<table>
		<?php
			for ($i = 1; $i <= 8 ; $i++) { 
				echo "<tr>";
				for ($j = 1; $j < 8; $j++) { 
					$box = $j + $i;
					if ($box % 2 == 0) {
						echo "<td class='black'></td>";
					}
					else {
						echo "<td class='white'></td>";
					}
				}
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>