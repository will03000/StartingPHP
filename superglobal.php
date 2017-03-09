<?php
	session_start();
	$_SESSION['prenom'] = 'Jean';
	$_SESSION['nom'] = 'Dupont';
	$_SESSION['age'] = 24;
	?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
	echo $_SERVER['HTTP_USER_AGENT'];
	echo $_SERVER["REMOTE_ADDR"];
	echo $_SERVER['SERVER_NAME'];
	?>

	passer var nom prénom age avec session
	
</body>
</html>