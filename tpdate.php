<?php

if(isset($_GET["mois"], $_GET["annee"])){
        $mois = (int) $_GET["mois"];
        $annee = (int) $_GET["annee"];
    }else{
        $mois = date('m');
        $annee = date(' Y');
    }
    $calendrier = new DateTime($annee .'-' .$mois .'-1');
    $nombreDeJours = cal_days_in_month(CAL_GREGORIAN, $mois, $annee);
$numtour=0;

switch ($calendrier->format('l')){
    case 'Monday':
        $index=0;
        break;
    case 'Tuesday':
        $index=1;
        break;
    case 'Wednesday':
        $index=2;
        break;
    case 'Thursday':
        $index=3;
        break;
    case 'Friday':
        $index=4;
        break;
    case 'Saturday':
        $index=5;
        break;
    case 'Sunday':
        $index=6;
        break;
}

$numerosdumois = array();
for ($i=0; $i < $index ; $i++) { 
    array_push($numerosdumois, ' ');
}
for ($numerojours=1; $numerojours <= $nombreDeJours ; $numerojours++) { 
    array_push($numerosdumois, $numerojours);
}
for ($i=0; $i < 6-$index ; $i++) { 
    array_push($numerosdumois, ' ');
}


?>


<table style="border:1px solid red">
    <tr>
        <td colspan="7"><?=$calendrier->format('m-Y'); ?></td>
    </tr>    
    <tr>
        <td>Lu</td>
        <td>Ma</td>
        <td>Me</td>
        <td>Je</td>
        <td>Ve</td>
        <td>Sa</td>
        <td>Di</td>
    </tr>

    <?php 
    for ($semaine=0; $semaine <= 4; $semaine++) { 
        echo '<tr>';
        for ($jour=0; $jour <= 6; $jour++) { 
            echo '<td>'.$numerosdumois[$numtour].'</td>';
            $numtour++;
        }
        echo '</tr>';    
    }    ?>

</table>

<form action="" method="get">
	
	<select name="mois">

		<option value="1">janvier</option>
		<option value="2">février</option>
		<option value="3">mars</option>
		<option value="4">avril</option>
		<option value="5">mai</option>
		<option value="6">juin</option>
		<option value="7">juillet</option>
		<option value="8">aout</option>
		<option value="9">septembre</option>
		<option value="10">octobre</option>
		<option value="11">novembre</option>
		<option value="12">décembre</option>

	</select>

	<select name="annee">

		<?php
			for ($i=2000; $i <= 2100; $i++) { 
				echo '<option value="'.$i.'">'.$i.'</option>';
			}
		?>

	</select>
	<button type="submit">ok</button>

</form>