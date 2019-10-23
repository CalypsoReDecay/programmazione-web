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

for ($x=0; $x < $lunghezza; $x++){
    if ($x % 10 == 0){
        
        ?>

<a href="listaprodotti.php?page=<?=$numpage?>"> pg <?=$numpage++?> </a>

<?php
if ($x + $passo < $lunghezza){
    print ("-");
}

}
}

?>


</html>
</body>