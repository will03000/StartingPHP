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
	
	<div>
		<?php
		$var3 = 100;
		$var4 = 50;
		while ( $var3 >= 10) {
			echo ($var3 * $var4);
			$var3--;
		}
		?>
	</div>


	<div>
		<?php
		$var5 = 1;
		while ( $var5 <= 10) {
			echo $var5;
			$var5 += $var5 / 2;
		}

		?>
	</div>

	<div>
		<?php
		for ($i=0; $i < 15; $i++) { 
			echo "on y arrive presque </br>";
		}
		?>
	</div>

	<div>
	
		<?php
		for ($i=20; $i > 0; $i--) { 
			echo "c'est presque bon </br>";
		}
		?>
	</div>

</body>
</html>