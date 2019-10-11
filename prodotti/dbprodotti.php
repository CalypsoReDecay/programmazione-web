<?php

# ARRAY DA INCLUDERE NEL DATABASE
# prodotto (ID) - nome - descrizione - peso - importo

/* Array manuale
$prodotti = [
    ["prodotto0", "descrizione", 30.0, 20.0],
    ["prodotto1", "descrizione", 36.0, 27.0],
    ["prodotto2", "descrizione", 50.0, 20.0],
    ["prodotto3", "descrizione", 20.0, 19.0],
    ["prodotto4", "descrizione", 47.0, 38.0],
    ["prodotto5", "descrizione", 28.0, 75.0],
    ["prodotto6", "descrizione", 54.0, 63.0],
    ["prodotto7", "descrizione", 70.0, 95.0],
    ["prodotto8", "descrizione", 72.0, 29.0],
    ["prodotto9", "descrizione", 48.0, 93.0],
    ["prodotto10", "descrizione", 85.0, 62.0],
    ["prodotto11", "descrizione", 92.0, 57.0],
    ["prodotto12", "descrizione", 82.0, 26.0],
    ["prodotto13", "descrizione", 42.0, 85.0],
    ["prodotto14", "descrizione", 43.0, 47.0],

];
*/

/* Script per popolare array prodotti - metodo 1

print ("$prodotti = [");
for ($x = 0; $x < 1000; $x++){
    print ("['prodotto$x', 'descrizione$x', $x, $x],");
    print ("<br>");
}
print ("]");
*/

# Script per popolare array prodotti - metodo 2
$prodotti = [];
for ($x = 0; $x < 1000; $x++){
    $riga = [];
    $riga[0] = 'nome prodotto' . $x;
    $riga[1] = 'descrizione' . $x;
    $riga[2] = $x;
    $riga[3] = $x;
    $prodotti[$x] = $riga;
}



?>