<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div id="exo1">
		<?php
		$nom = 'william';
		echo "$nom </br>";
		?>
	</div>


	<div id="exo2">
		<?php
		$nom = 'legal';
		$prenom = 'william';
		$age = 22;
		echo "$nom </br> $prenom </br> $age </br>";
		?>
	</div>

	<div id="exo3">
		<?php 
		$kilometre = 1;
		echo " $kilometre </br>";
		$kilometre = 3;
		echo "$kilometre </br>";
		$kilometre= 125;
		echo "$kilometre </br>";
		 ?>
	</div>

	<div id="exo4">
		 <?php
		 $string = 'boubou';
		 $int = 22;
		 $float = 3.2345;
		 $boolean = true;
		 echo "$string </br> $int </br> $float </br> $boolean </br>";
		 ?>
	</div>

	<div id="exo5">
		 <?php
		 $int2 = null;
		 echo $int2;
		 $int2 = 5467;
		 echo "$int2 </br>";
		 ?>
	</div>	
	 
</body>
</html>
