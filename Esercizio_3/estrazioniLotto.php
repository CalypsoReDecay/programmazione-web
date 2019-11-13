<html>
<body>

<?php

function estrazione(){
    for($x = 1; $x <= 90; $x++){
        return rand(1, 90) . "<br>";

    }
}

$ruota = array (
    "Bari" => estrazione(),
    "Cagliari" => estrazione(),
    "Firenze" => estrazione(),
    "Genova" => estrazione(),
    "Milano" => estrazione(),
    "Napoli" => estrazione(),
    "Palermo" => estrazione(),
    "Roma" => estrazione(),
    "Torino" => estrazione(),
    "Venezia" => estrazione(),
    "Nazionale" => estrazione(),
);

foreach ($ruota as $key => $value){
    print ($key);
    print_r ($value);
}


?>

</body>
</html>