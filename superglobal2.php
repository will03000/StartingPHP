<?php
	
	session_start();
	echo $_SESSION['prenom'];
	echo $_SESSION['nom'];
	echo $_SESSION['age'];

?>
<?php
echo $_COOKIE['login'];
echo $_COOKIE['password'];
?>