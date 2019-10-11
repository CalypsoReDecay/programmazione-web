<?php

# Script per popolare array prodotti

print ("\$prodotti = [");
for ($x = 0; $x < 100; $x++){
    print ("['prodotto$x', 'descrizione$x', $x, $x],");
    print ("<br>");
}
print ("]");


?>