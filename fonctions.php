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
		function boom($caca){
			return $caca;
		}
		echo boom('boom');
		?>
	</div>

</body>
</html>