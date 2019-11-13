<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<?php

function estrazione(){
    $estrazione = [];
    for($x = 1; $x <= 5; $x++){
        $estrazione[$x] = rand(1, 90);
    }
    return $estrazione;
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

?>

<div class="container">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Città</th>
      <th scope="col" colspan="4">Numeri Estratti</th>
    </tr>
  </thead>
  <tbody>
  <?php
        foreach ($ruota as $key => $value){
        ?>
    <tr>
      <th scope="row"><?=$key?></th>
      <?php
      foreach ($value as $numero){
        ?>
      <td><?=$numero?></td>
      <?php } ?>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>