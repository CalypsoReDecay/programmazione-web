<html>
<?php
$pagina = $_GET['colore'];
$numColonne = $_GET['num_colonne'];
$numRighe = $_GET['num_riga'];
?>

<!-- $_GET['colore'] -->
<a href="/github/programmazione-web/table/tablecopy.php?colore=black&num_riga=<?=$numRighe?>&num_colonne=<?=$numColonne?>">Bianco e Nero</a><br>
<a href="/github/programmazione-web/table/tablecopy.php?colore=multipli&num_riga=<?=$numRighe?>&num_colonne=<?=$numColonne?>">Multipli</a><br>
<a href="/github/programmazione-web/table/tablecopy.php?colore=diagonale&num_riga=<?=$numRighe?>&num_colonne=<?=$numColonne?>">Diagonale</a><br>
<br>

<!-- http://localhost/github/programmazione-web/table/tablecopy.php?colore=diagonale&num_riga=3&num_colonne=7 -->

<br><br>


   <table border=1> 
<thead>
    <tr>
    <th style="font-size: 30px">&#129315</th>
    <?php
for ($colonne = 1; $colonne <= $numColonne; $colonne++){
    ?>
    <th style="color: #3F292B; background-color: #988AAA; padding: 5px">Colonna <?=$colonne?></th>
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
        <td style="color: #3F292B; background-color: #988AAA; padding: 5px; font-weight: bold">Colonna <?=$contatore?></td>
        <?php  $isPrimaColonna = False; ?>
    <?php }?>

    <td style="color: #3F292B; background-color: <?=getColoreCella($_GET['colore'], $righe, $colonne)?>">
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
        return '#139099';
    } elseif($risultato % 3 == 0){
        return '#8FAD16';
    } elseif($risultato % 2 == 0){
        return '#C60337';
    } else {
        return '#684347';
     }
    }

    function getColoreCellaDiagonale($moltiplicatore1, $moltiplicatore2){
        return  ($moltiplicatore1 == $moltiplicatore2) ? '#9B6A6C': '#C0D1E5';
        
    }

/*
if(getColoreCella('bianconero', 2,4)== 'black'){}
if(getColoreCella('multipli', 2,4)== 'red'){}
if(getColoreCella('multipli', 2,3)== 'green'){}
if(getColoreCella('multipli', 2,5)== 'blue'){}
*/

?>

</tbody>
</table>

<br>
<a href="/github/programmazione-web/table/formtable.php"> <-- Indietro </a>


</html>

