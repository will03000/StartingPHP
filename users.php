<?php
if (isset($_GET['nom']) && isset($_GET['age'])) :
?>
Bonjour, <?= $_GET['nom']; ?>

Tu as <?= $_GET['age'];?> ans.

<?php endif ?>

<?php
if (isset($_POST['nom']) && isset($_POST['age'])) :
	?>
Bonjour, <?= $_POST['nom']; ?>.
Tu as <?= $_POST['age']; ?> ans.
	<? endif; ?>