<?php
include ('dbprodotti.php');
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

/*
for ($x = $inizioFor; $x < $fineFor; $x++){
 
?>
<a href="dettaglioprodotto.php?id_prodotto=<?=$x?>&pagina=<?=$pagina?>"> <?=$prodotti[$x][0]?></a><br>
<?php

}
*/

echo "<br>";

$numpage = 1;

$conteggio = $lunghezza / $passo;
$pagine = getPagine($pagina, $conteggio);

?>

<!doctype html>
<html lang="it">

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Lista prodotti</title>

</head>

<body>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col text-center">
        <h1>Lista prodotti</h1>
      </div>
    </div>


      
        <?php
        for($x=0; $x < 12; $x++){
          if($x % 3 == 0){
      ?> <div class="row justify-content-center">
  <?php } ?>

          <div class="col">
    <?php  $prodotto = $prodotti[$x];
            include ('card.php');
    ?>      </div>
  <?php
          if(($x + 1) % 3 == 0){
      ?>    </div>
  <?php } ?>

    <?php } ?>

    </div>

  </div>

  </div>

<div style="text-align: center">
<?php
  for($x = 0; $x < count($pagine) ; $x++){
    $numero = $pagine[$x];
        ?>
        <a href="/github/programmazione-web/listaprod2/listaprod2.php?page=<?=$numero?>"> pg <?=$numero?> </a>
        <?php
}
?>
</div>
<br><br><br>
</body>

</html>