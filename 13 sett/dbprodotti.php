<?php

# ARRAY DA INCLUDERE NEL DATABASE
## nome prodotto, id prodotto, descrizione, peso, importo 

/**$prodotti =  [
    ["prodotto0", "descrizione", 25.0, 50.0],
    ["prodotto1", "descrizione", 15.0, 30.0 ],
    ["prodotto2", "descrizione", 20.00, 14.00],
    ["prodotto3", "descrizione", 12.0, 36.0],
    ["prodotto4", "descrizione", 58.0, 45.0],
    ["prodotto5", "descrizione", 10.0, 36.0],
    ["prodotto6", "descrizione", 41.0, 69.0],
    ["prodotto7", "descrizione", 63.0, 12.0],
    ["prodotto8", "descrizione", 28.0, 11.0],
    ["prodotto9", "descrizione", 13.0, 40.0],
    ["prodotto10", "descrizione", 10.0, 9.0],
    ["prodotto11", "descrizione",4.0, 15.0],
    ["prodotto12", "descrizione", 10.0, 100.0],
    ["prodotto13", "descrizione", 28.0, 45.0],
    ["prodotto14", "descrizione", 58.0, 100.0],
    ["prodotto15", "descrizione",78.0, 150.0],
] */

$prodotti = [];
for ($x = 0; $x < 1000; $x++){
    $riga = [];
    $riga[0] = 'nome' . $x;
    $riga[1] = 'descrizione' . $x;
    $riga[2] = $x;
    $riga[3] = $x;
    $prodotti [$x] = $riga;
}

?>