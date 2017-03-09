<?php
$date = date("d/m/Y").'</br>';
echo $date;
?>

<?php
$date = date('d/m/y').'</br>';
echo $date;
?>

<?php
setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
echo strftime("%A %d %B %G").'<br>'; 
?>

<?php 
echo time().'<br>';
echo mktime(15, 34, 12, 3, 2, 2016).'<br>';
$datetime1 = new DateTime('2016-05-16');
$datetime2 = new DateTime();
$interval = $datetime1->diff($datetime2);
echo $interval->format('%R%a jours');


 ?>
