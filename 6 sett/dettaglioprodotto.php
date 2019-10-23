<html>
<body>

<?php
include ("dbprodotti.php");

# var_dump($_GET);
$idProdotto = $_GET['id_prodotto'];
$prodotto = $prodotti[$idProdotto];

$riga= $prodotto [0];
$idPage= $_GET ['pagina'];

?>

Dettaglio del prodotto: <?=$riga?>
<br><br>
<a href="listaprodotti.php?page=<?=$idPage?>"> <-- Torna Indietro </a><br><br>

<?php

$lunghezza = count($prodotti);

for ($x = 0; $x < $lunghezza; $x++){
if($x == $_GET['id_prodotto']){
    print ("");
} else {
    ?>
    <a href="dettaglioprodotto.php?id_prodotto=<?=$x?>&pagina=<?=$idPage?>"> <?=$prodotti[$x][0]?></a><br>
    <?php
}
    }

?>

</html>
</body>