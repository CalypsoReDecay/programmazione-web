<html>
<body>

<?php
include ("dbprodotti.php");
include ("funzioni.php");

/*
count($prodotti) --> righe
count($prodotti[0]) --> colonne
*/


if (isset ($_GET['id_prodotto']) AND is_numeric ($_GET ['id_prodotto'])){
    $idProdotto = $_GET['id_prodotto'];
} else {
    $idProdotto = 1;
}

# var_dump($_GET);
# $idProdotto = $_GET['id_prodotto'];
$prodotto = $prodotti[$idProdotto];

# $idPage = $_GET['pagina'];


if (isset ($_GET['pagina'])){
    $idPage = $_GET['pagina'];
} else {
    $idPage = 1;
}

?>

Dettaglio del prodotto: <br><br>
Nome: <?=$prodotto[0]?> <br>
Descrizione: <?=$prodotto[1]?> <br>
Peso: <?=$prodotto[2]?> <br>
Importo: <?=$prodotto[3]?> <br>
<br><br>

<a href="/listaprodotti.php?page=<?=$idPage?>"> <-- Torna Indietro </a>
<br><br>

<?php
$prodottiCorrelati = getProdottiCorrelati($prodotti);
$lunghezza = count($prodottiCorrelati);

for ($x = 0; $x < $lunghezza; $x++){
    ?>
    <a href="/dettaglioprodotto.php?id_prodotto=<?=$prodottiCorrelati[$x][4]?>&pagina=<?=$idPage?>"> <?=$prodottiCorrelati[$x][0]?></a><br>
    <?php
}

?>

</html>
</body>