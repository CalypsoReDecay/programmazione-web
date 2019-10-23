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


$numTabelline=1;
function getTabelline ($numero, $numeroFinale)
{
    $tabellina = array ();
    for ($i = 0; $i < $numeroFinale; $i++){
        //cod per calcolare tabellina
        $tabellina [$i] = $numero*($i+1);

        
    }
    return $tabellina;
    }
 


?>
<br><br>

<html>
    <head>
        <title>Tabelline</title>
</head>
<body>
    <h1>Tabelline</h1>
    <ul>
    <?php 
            foreach (getTabelline($numTabelline,$_GET['numeri']) as $tit) { ?>
             
    
    <li> 
        <h3><?=$tit ?></h3>
            <ul>
            
                    <?php
                    foreach (getTabelline($tit, $_GET['moltiplicatori']) as $numero ) { ?>
                    <li><?=$numero?></li>
                    <?php } ?>
                    </ul>
</li>
                <?php } ?>

</ul>





</body>
</html>


            
    









