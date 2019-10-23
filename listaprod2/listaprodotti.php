<html>
<body>

<?php

include ("dbprodotti.php");
include ("funzioni.php");
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

/* Ciclo calcolando il numero dei prodotti - non efficace
for ($x = 0; $x < $lunghezza; $x++){
if ($x % 10 == 0){
    ?>
    <a href="/listaprodotti.php?page=<?=$numPage?>"> pg <?=$numPage++?> </a>  
    <?php
if ($x + $passo < $lunghezza){
    print ("-");
    }
}
} 
*/

/* Ciclo efficace, ciclando solo i numeri
$conteggio = $lunghezza / $passo;

for ($x = 0; $x < $conteggio; $x++){
    $numPageCorrente = $x + 1;
    if ($numPageCorrente == $_GET['page']){
    print ("pg $numPageCorrente"); 
    } else {
    ?>
    <a href="/listaprodotti.php?page=<?=$numPageCorrente?>"> pg <?=$numPageCorrente?> </a>  
    <?php
 }
} 
*/

# Includendo la funzione esterna funzioni.php
$conteggio = $lunghezza / $passo;
$pagine = getPagine($pagina, $conteggio);
for($x = 0; $x < count($pagine) ; $x++){
    $numero = $pagine[$x];
        ?>
        <a href="/listaprodotti.php?page=<?=$numero?>"> pg <?=$numero?> </a>
        <?php
}


/* Scrivendo mille link SENZA la funzione!
if($pagina == 1){
        ?>
        <a href="/listaprodotti.php?page=<?=1?>"> pg 1 </a>
            <a href="/listaprodotti.php?page=<?=$pagina + 1?>"> pg <?=$pagina + 1?> </a>
                <a href="/listaprodotti.php?page=<?=$pagina + 2?>"> pg <?=$pagina + 2?> </a>
                    <a href="/listaprodotti.php?page=<?=$conteggio?>"> pg <?=$conteggio?> </a>
                        <?php
} elseif ($pagina == 2){
    ?>
    <a href="/listaprodotti.php?page=<?=1?>"> pg 1 </a>
        <a href="/listaprodotti.php?page=<?=$pagina + 0?>"> pg <?=$pagina + 0?> </a>
            <a href="/listaprodotti.php?page=<?=$pagina + 1?>"> pg <?=$pagina + 1?> </a>
                <a href="/listaprodotti.php?page=<?=$conteggio?>"> pg <?=$conteggio?> </a>
                    <?php
} elseif ($pagina == $conteggio - 1){
    ?>
    <a href="/listaprodotti.php?page=<?=1?>"> pg 1 </a>
        <a href="/listaprodotti.php?page=<?=$pagina - 1?>"> pg <?=$pagina - 1?> </a>
            <a href="/listaprodotti.php?page=<?=$pagina - 0?>"> pg <?=$pagina - 0?> </a>
                <a href="/listaprodotti.php?page=<?=$conteggio?>"> pg <?=$conteggio?> </a>
                    <?php
} elseif($pagina >= $conteggio){
    ?>
    <a href="/listaprodotti.php?page=<?=1?>"> pg 1 </a>
        <a href="/listaprodotti.php?page=<?=$pagina - 2?>"> pg <?=$pagina - 2?> </a>
            <a href="/listaprodotti.php?page=<?=$pagina - 1?>"> pg <?=$pagina - 1?> </a>
                <a href="/listaprodotti.php?page=<?=$conteggio?>"> pg <?=$conteggio?> </a>
                    <?php
} else {
    ?>
    <a href="/listaprodotti.php?page=<?=1?>"> pg 1 </a>
        <a href="/listaprodotti.php?page=<?=$pagina - 1?>"> pg <?=$pagina - 1?> </a>
            <b> pg <?=$pagina?> </b>
                <a href="/listaprodotti.php?page=<?=$pagina + 1?>"> pg <?=$pagina + 1?> </a>
                    <a href="/listaprodotti.php?page=<?=$conteggio?>"> pg <?=$conteggio?> </a>
                        <?php
}

*/

/*
function paginazione(num_pagina 10){
    return array (1,9,10,11,100)
}
*/


?>

</html>
</body>