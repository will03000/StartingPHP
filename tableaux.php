<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div>

	<?php
	$tab = array('janvier','février','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','décembre');
	print_r($tab);
	?>
</div>

<div>
	<?php
	$tab = array('janvier','février','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','décembre');
	echo $tab[2];
	?>
</div>

<div>
	<?php
	$tab = array('janvier','février','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','décembre');
	echo $tab[5];
	?>
</div>

<div>
	<?php
	$tab = array('janvier','février','mars','avril','mai','juin','juillet','aôut','septembre','octobre','novembre','décembre');
	$tab[3]= 'julien';
	echo $tab[3];
	?>
</div>

<div>
	<?php
	$tabdep = array(
		59 => 'Nord',
		02=>'Aisne',
		80=>'Somme',
		60=>'Oise',
		62=>'Pas-de-Calais',
		);
	?>
</div>

<div>
	<?php
	$tabdep = array(
		59 => 'Nord',
		02=>'Aisne',
		80=>'Somme',
		60=>'Oise',
		62=>'Pas-de-Calais',
		);
	echo $tabdep[59];
	?>
</div>

<div>
	<?php
	
$tabdep = array(
		59 => 'Nord',
		02=>'Aisne',
		80=>'Somme',
		60=>'Oise',
		62=>'Pas-de-Calais',
		);
	$tabdep[51]= 'Marne';
	print_r($tabdep);
	?>
</div>

</body>
</html>