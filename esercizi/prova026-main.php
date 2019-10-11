<?php
for ($start=0; $start<100; $start++){
    if ($start % 10 == 0) {
?>
    <br>
<?php
    }

    if ($_GET['operazione'] == "addizione") {
?>
    <a href="/prova026.php?numero1=<?=$start?>&numero2=<?=$start?>&operazione=addizione"> [<?=$start?>+<?=$start?>] </a>
<?php
    } else { 
?>
    <a href="/prova026.php?numero1=<?=$start?>&numero2=<?=$start?>&operazione=sottrazione"> [<?=$start?>-<?=$start?>] </a>
<?php
    }
    }
?>

<br>
<br>
<a href="http://localhost/prova026-link.php"><-- Torna Indietro</a>
