<?php
if (isset($_GET['batiment'])){
	echo $_GET['batiment'];
}else{
	echo "ça existe pas ça </br>";
}
if (isset($_GET['salle'])){
	echo $_GET['salle'];
}else{
	echo "ça existe pas ça </br>";
}
?>