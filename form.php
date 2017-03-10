<?php
require_once'objet.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php
	$form = new Formulaire('boulot');
	$form->debut('objet.php');
	$form->inputText('pseudo','$login');
	$form->inputText('prenom');
	$form->inputText('nom');

	?>











</body>
</html>