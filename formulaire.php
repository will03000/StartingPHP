<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php
if (isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['civilité']) && isset($_GET['fichier'])) :
?>
Bonjour, <?= $_GET['civilité'];?> <?= $_GET['nom']; ?> <?= $_GET['prenom']; ?>
<?php
$fichier = explode('.',$_GET['fichier']);
if ($fichier[1] == 'pdf') {
	echo $_GET['fichier'];
}?>


<?php else : ?>
	<form action="users.php" method="get">
 <p>Votre nom : <input type="text" name="nom" /></p>
 <p>Votre âge : <input type="text" name="age" /></p>
 <p><input type="submit" value="OK"></p>
</form>

<form action="users.php" method="post">
 <p>Votre nom : <input type="text" name="nom2" /></p>
 <p>Votre âge : <input type="text" name="age2" /></p>
 <p><input type="submit" value="OK"></p>
</form>

<form action="formulaire.php" enctype="multipart/form-data" method="get">
  <select name="civilité" size="1">
 	<option>Monsieur</option>
 	<option>Madame</option>
 </select>
 <p>Votre nom : <input type="text" name="nom" /></p>
 <p>Votre prénom : <input type="text" name="prenom" /></p>
	<input type="file" name="fichier"/>
 <p><input type="submit" value="OK"></p>
</form>
<? endif; ?>
</body>
</html>