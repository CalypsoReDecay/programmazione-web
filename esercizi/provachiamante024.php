<html>
<body>

<h1>Titolo</h1>
<p>Testo 1 </p>
<p>Testo 2 </p>

<?php 

include 'provafunzione024.php';

$timestamp = mktime (10,23,0,11,23,1990);
$time = doTimeStamp ($timestamp);

echo "La data con 23 minuti prima è " . date ("d/m/Y h:i:sa", $time) . "<br><br>";

?>


</body>
</html>