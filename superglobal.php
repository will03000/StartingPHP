<?php
	session_start();
	$_SESSION['prenom'] = 'Jean';
	$_SESSION['nom'] = 'Dupont';
	$_SESSION['age'] = 24;
	?>
	<?php
	if (isset($_POST['login']) && isset($_POST['password'])) {
		setcookie('login',$_POST['login']);
		setcookie('password',$_POST['password']);
	}
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

	<form action="superglobal.php" method="post">
 <p>Votre login: <input type="text" name="login" /></p>
 <p>Votre password : <input type="text" name="password" /></p>
 <p><input type="submit" value="OK"></p>
</form>
	<?php

echo $_COOKIE['login'];
echo $_COOKIE['password'];
?>
</body>
</html>