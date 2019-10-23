<html>
<body>

<?php

include ("dbprodotti.php");
$lunghezza = count($prodotti);

# manipolazione del parametro: http://localhost/listaprodotti.php?page=1

if  (isset ($_GET['page'])) {
    $pagina = $_GET['page'];
} else {
 $pagina=1;
}

$passo = 10;
$inizioFor = ($pagina - 1) * $passo;
$fineFor = $inizioFor + $passo;

$lista = $lunghezza < $fineFor;

if ($lista){
    $fineFor=$lunghezza;
}


$NoPag = $inizioFor < $lunghezza;

if ($pagina > $NoPag){
    echo ('Non ci sono prodotti!');
}

for ($x = $inizioFor; $x < $fineFor; $x++){
 
?>
<a href="dettaglioprodotto.php?id_prodotto=<?=$x?>&pagina=<?=$pagina?>"> <?=$prodotti[$x][0]?></a><br>
<?php

}

echo "<br>";

$numpage = 1;

##ciclo corretto

/*$conteggio= $lunghezza / $passo;
for ($x = 0; $x < $conteggio; $x++){
    $numPagCorrente = $x + 1;
    if ($numPagCorrente == $_GET['page']){
        print ("pg $numPagCorrente");
    } else {
        ?>
<a href="listaprodotti.php?page=<?=$numPagCorrente?>"> pg <?=$numPagCorrente?> </a>
<?php
}
}
*/
## altro ciclo 
/*for ($x=0; $x < $lunghezza; $x++){
    if ($x % 10 == 0){
        
        ?>

<a href="listaprodotti.php?page=<?=$numpage?>"> pg <?=$numpage++?> </a>

<?php
if ($x + $passo < $lunghezza){
    print ("-");
}

}
}
 */

$conteggio= $lunghezza / $passo;

?>

<!--
<a href="listaprodotti.php?page=<?=1?>"> pg 1 </a>
<a href="listaprodotti.php?page=<?=$pagina -1?>"> pg <?=$pagina -1?> </a>
<b> pg <?=$pagina?> </b>
<a href="listaprodotti.php?page=<?=$pagina +1?>"> pg <?=$pagina +1?> </a>
<a href="listaprodotti.php?page=<?=$conteggio?>"> pg <?=$conteggio?> </a>
-->

<br><br>

<?php


    if ($pagina == 1){
     ?>
<a href="listaprodotti.php?page=<?=1?>"> pg 1 </a>
<a href="listaprodotti.php?page=<?=$pagina +1?>"> pg <?=$pagina +1?> </a>
<a href="listaprodotti.php?page=<?=$pagina +2?>"> pg <?=$pagina +2?> </a>
<a href="listaprodotti.php?page=<?=$conteggio?>"> pg <?=$conteggio?> </a>   
<?php

} elseif ($pagina == 2){
    ?>
<a href="listaprodotti.php?page=<?=1?>"> pg 1 </a>
<a href="listaprodotti.php?page=<?=$pagina +0?>"> pg <?=$pagina +0?> </a>
<a href="listaprodotti.php?page=<?=$pagina +1?>"> pg <?=$pagina +1?> </a>
<a href="listaprodotti.php?page=<?=$conteggio?>"> pg <?=$conteggio?> </a>   

<?php
} elseif ($pagina >= $conteggio){

?>
<a href="listaprodotti.php?page=<?=1?>"> pg 1 </a>
<a href="listaprodotti.php?page=<?=$pagina -2?>"> pg <?=$pagina -2?> </a>
<a href="listaprodotti.php?page=<?=$pagina -1?>"> pg <?=$pagina -1?> </a>
<a href="listaprodotti.php?page=<?=$conteggio?>"> pg <?=$conteggio?> </a>

<?php

} elseif ($pagina == $conteggio - 1){

?>
<a href="listaprodotti.php?page=<?=1?>"> pg 1 </a>
<a href="listaprodotti.php?page=<?=$pagina -1?>"> pg <?=$pagina -1?> </a>
<a href="listaprodotti.php?page=<?=$pagina -0?>"> pg <?=$pagina -0?> </a>
<a href="listaprodotti.php?page=<?=$conteggio?>"> pg <?=$conteggio?> </a>

<?php

} else { 
    ?>
    <a href="listaprodotti.php?page=<?=1?>"> pg 1 </a>
    <a href="listaprodotti.php?page=<?=$pagina -1?>"> pg <?=$pagina -1?> </a>
    <b> pg <?=$pagina?> </b>
    <a href="listaprodotti.php?page=<?=$pagina +1?>"> pg <?=$pagina +1?> </a>
    <a href="listaprodotti.php?page=<?=$conteggio?>"> pg <?=$conteggio?> </a>
    
    <?php
}

?>




    



</html>
</body>