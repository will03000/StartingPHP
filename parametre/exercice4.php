<?php
if (isset($_GET['langage'])){
	echo $_GET['langage'];
}else{
	echo "ça existe pas ça </br>";
}
if (isset($_GET['serveur'])){
	echo $_GET['serveur'];
}else{
	echo "ça existe pas ça </br>";
}
?>