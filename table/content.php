<html>
<body>

<?php
$numColonne = $_GET['num_colonne'];
$numRighe = $_GET['num_riga'];
$pagina = $_GET['colore'];
?>


<!-- http://localhost/tablecopy.php?colore=diagonale&num_riga=3&num_colonne=7 -->

<br><br>

<div class="table-responsive"> 
   <table class="table"> 
<thead>
    <tr>
    <th style="font-size: 30px">&#129315</th>
    <?php
for ($colonne = 1; $colonne <= $numColonne; $colonne++){
    ?>
    <th style="color: white; background-color: #960082; padding: 5px">Colonna <?=$colonne?></th>
<?php 
} ?>

</thead>
<tbody>

<?php

$contatore = 1;

for ($righe = 1; $righe <= $numRighe; $righe++){
    $isPrimaColonna = True;
?>
<tr>
<?php
for ($colonne=1; $colonne <= $numColonne; $colonne++){ ?>
    <?php if($isPrimaColonna){ ?>
        <td style="color: white; background-color: #960082; padding: 5px; font-weight: bold">Colonna <?=$contatore?></td>
        <?php  $isPrimaColonna = False; ?>
    <?php }?>

    <td style="color: #170E63; background-color: <?=getColoreCella($_GET['colore'], $righe, $colonne)?>">
    <?=moltiplicazione($righe, $colonne);?>
    </td>
<?php 
} 

?>

</tr> 
<?php
$contatore++;
} ?>

<?php 

function moltiplicazione($righe, $colonne){
return $righe * $colonne;
}

function getColoreCella($pagina, $moltiplicatore1, $moltiplicatore2){
if ($pagina == 'multipli'){
    return getColoreCellaMultipli($moltiplicatore1, $moltiplicatore2);
} elseif ($pagina == 'diagonale'){
    return getColoreCellaDiagonale($moltiplicatore1, $moltiplicatore2);
} else {
    return 'black';
}
}

function getColoreCellaMultipli($moltiplicatore1, $moltiplicatore2){
    $risultato = $moltiplicatore1 * $moltiplicatore2;
    if($risultato % 5 == 0){
        return 'blue';
    } elseif($risultato % 3 == 0){
        return 'green';
    } elseif($risultato % 2 == 0){
        return 'red';
    } else {
        return 'black';
     }
    }

    function getColoreCellaDiagonale($moltiplicatore1, $moltiplicatore2){
        return  ($moltiplicatore1 == $moltiplicatore2) ? '#7E53DB': '#FF384B';
        
    }



?>

</tbody>
</table>
</div>

<br>
<a href="/veronica_tedesco/programmazione-web/table/formtable.php"> Indietro</a>

</body>
</html>
