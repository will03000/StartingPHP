<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style/css/style.css">
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
		 $int2 = (int)NULL;
		 echo "$int2 </br>";
		 $int2 = 5467;
		 echo "$int2 </br>";
		 ?>
	</div>

	<div id="exo6">
		<?php
		$nom2 = 'george';
		echo "Bonjour " .$nom2. " comment vas tu ?";
		?>
	</div>	

	<div id="exo7">
		
		<?php
		$nom3 = 'gogo';
		$prenom3 = 'bertrand';
		$age3 = 47;
		echo "Bonjour ".$nom3."\n".$prenom3." tu as ".$age3.".";
		?>

	</div>

	<div>
		
	<?php
	$ope = (3+4);
	echo "$ope </br>"; 

	$ope2 = (5 * 20);
	echo "$ope2 </br>";

	$ope3 = (45 / 5);
	echo "$ope3 </br>";

	?>
	</div>

</body>
</html>
