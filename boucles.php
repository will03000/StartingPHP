<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div>
		<?php
		$i = 0;
		while ($i <= 10) {
			echo "$i </br>";
			$i ++;
		}
		?>
	</div>
	
	<div>
		<?php
		$var1 = 0;
		$var2 = 22;
		while ($var1 <= 20) {
			echo ($var1 * $var2);
			$var1 ++;
		}
		?>
	</div>
	
</body>
</html>