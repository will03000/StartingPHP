<?php
	
	session_start();
	echo $_SESSION['prenom'];
	echo $_SESSION['nom'];
	echo $_SESSION['age'];

?>


<?php
if (isset($_POST['login']) && isset($_POST['password'])) {
		setcookie('login',$_POST['login']);
		setcookie('password',$_POST['password']);
	}
?>



	<?php
if (isset($_COOKIE['login']) && isset($_COOKIE['password'])) : ?>

	<form action="superglobal2.php" method="post">
		 <p>Votre login: <input type="text" name="login" value="<?= $_COOKIE['login'] ?>" /></p>
		 <p>Votre password : <input type="text" name="password"  value="<?= $_COOKIE['password'] ?>" /></p>
		 <p><input type="submit" value="OK"></p>
	</form>

<?php endif; ?>