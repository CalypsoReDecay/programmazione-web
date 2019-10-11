<?php

$title = "Titolo";

?>

<html>
    <body>

<?php

for($x = 1; $x < 7; $x++){
    $tag = "h" . $x;
    if($x % 2 == 0){
        $colore = 'Red';
    } else {
        $colore = 'Black';
    }
    ?>
 <<?=$tag?> style="color: <?=$colore?>">

<?=$title?>
</<?=$tag?>>

<?php
}

/* Semplice tabellina
function tabellina ($num_righe, $tab){
    for($i = 1; $i < $num_righe+1; $i++){
        $tabellina = ($tab * $i);
    } 
}

# echo "$tab x $i = <b> $tabellina</b>";
*/

$numTab = 1;

function getTabellina($numero, $numFinale){
    $tabellina = array();
    // codice per calcolare la tabellina
    for($i = 0; $i < $numFinale; $i++){
        $tabellina[$i] = $numero * ($i + 1);
    }
    return $tabellina;
}

?>
<br><br>

<!-- http://localhost/htmlsuphp.php/?sezioni=10&moltiplicatori=10 -->

<h1>Tabellina</h1>
<ul>

<?php
        foreach(getTabellina($numTab, $_GET['sezioni']) as $titolo){ ?>
    <li>
        <h3><?=$titolo?></h3>
            <ul>
                <?php
                foreach(getTabellina($titolo, $_GET['moltiplicatori']) as $numero){ ?>
                <li><?=$numero?></li>
                <?php } ?>
            </ul>
    </li>
<?php } ?>
</ul>

    </body>
</html>