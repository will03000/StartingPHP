<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div>
		<?php
		function caca(){
			return true;
		}
		echo caca();
		?>
	</div>

	<div>
		<?php
		function boom($caca='boom'){
			return $caca;
		}
		echo boom();
		?>
	</div>

</body>
</html>