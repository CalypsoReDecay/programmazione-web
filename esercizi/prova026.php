<?php

function Operazione ($num1, $num2){
    if ($_GET ['operazione'] == "addizione") {
        echo ("Somma: ");
    return $num1 + $num2;
    } else {
        echo ("Sottrazione: ");
        return $num1 - $num2;
    }
}

echo (Operazione($_GET['numero1'],$_GET['numero2']));

# http://localhost/prova026.php?numero1=2&numero2=3

?>

<br>
<br>
<a href="http://localhost/prova026-link.php"><-- Ricomincia</a> <br>

<?php
if ($_GET ['operazione'] == "addizione") {
?>
<a href="http://localhost/prova026-main.php?operazione=addizione"><-- Torna Indietro</a> <br>
<?
} else {
?>
<a href="http://localhost/prova026-main.php?operazione=sottrazione"><-- Torna Indietro</a> <br>
<?
}
?>