<?php
if (isset($_GET['age'])){
	echo $_GET['age'];
}else{
	echo "ce parametre n'est pas dans l'url enculé";
}
?>