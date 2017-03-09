<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div>
		<?php

		$age = 22;

		if ($age >= 18) {
			echo "vous êtes majeur ! </br>";
		}else{
			echo "vous êtes mineur ! </br>";
		}

		?>
</div>

<div>
		<?php
		$iseasy = true;
		if ($iseasy == true) {
			echo "c'est vrai </br>";
		}else{
			echo "c'est difficile </br>";
		}
		?>
</div>

<div>
	<?php
	$age2;
	$genre = 'homme';
	
	if ($age2<= 18 && $genre =='homme') {
		echo "vous etes un homme mineur";
	}elseif ($age2 >= 18 && $genre == 'homme') {
		echo "vous etes un homme majeur";
	}elseif ($age2 <= 18 && $genre == 'femme') {
		echo "vous etes une femme  mineur";
	}elseif ($age2 >= 18 && $genre == 'femme') {
		echo "vous etes un femme majeur";
	}
	
	?>
</div>	

<div>
	<?php
	$magnitude;
	switch($magnitude){

		case "0":
			echo "Micro-séisme impossible à ressentir.";
			break;
		case "1":
			echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres";
			break;
		case "2":
			echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
			break;
		case "3":
			echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
			break;
		case "4":
			echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
			break;
		case "5":
			echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
			break;
		case "6":
			echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
			break;
		case "7":
			echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
			break;
		case "8":
			echo "Séisme capable de tout détruire sur une très vaste zone.";
			break;								

	}
	?>
</div>	

<div>
	<?php
	if ($maVariable2 != 'Homme') {
		echo "'C\'est une développeuse !!!' ";
	}else{
		
		echo "'C\'est un développeur !!!'";
	}
	?>
</div>

<div>	
<?php
	if ($maVariable == false) {
		echo 'c\'est pas bon !!!' ;
	}else{
		echo 'c\'est ok !!';
	}
?>

</div>

<div>
	<?php
	if ($monAge >= 18) {
		echo 'Tu es majeur';
	}else{
		echo  'Tu n\'es pas majeur';
	}
	?>
</div>

<div>
	<?php
	
	?>
</div>
</body>
</html>