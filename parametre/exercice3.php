<?php
if (isset($_GET['dateDebut'])){
	echo $_GET['dateDebut'];
}else{
	echo "ça existe pas ça </br>";
}
if (isset($_GET['dateFin'])){
	echo $_GET['dateFin'];
}else{
	echo "ça existe pas du tout </br>";
}

?>