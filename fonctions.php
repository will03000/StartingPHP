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

	<div>
	
		<?php
		function concat($var1,$var2){
			
			return $var1.$var2;
		}
		echo concat('bonjour ','moi');
		?>
	</div>

	<div>
	
		<?php
		function comparaison($int1,$int2){
			if ($int1 > $int2) {
				echo  $int1.' est plus grand';
			}
			if ($int1<$int2) {
				echo $int1.' est plus petit ';
			}
			if ($int1==$int2) {
				echo 'les deux nombres sont identiques';
			}
		}
		echo comparaison(12,24);
		?>
	</div>

	<div>
		<?php
		function mixte($nombre,$chaine){
			return $nombre.$chaine;
		}
		echo mixte(5,' euros');
		?>
	</div>

	<div>
		
		<?php
		function phrase($nom,$prenom,$age){
			return 'Bonjour '.$nom.' '.$prenom.' tu as '.$age.' ans.';
		}
		echo phrase('legal','william',22);
		?>
	</div>

</body>
</html>