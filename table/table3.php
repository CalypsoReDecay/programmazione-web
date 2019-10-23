<!doctype html>
<html lang="it">
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Bianco e nero</title>
    </head>
    <body>

<?php
$numColonne = $_GET['num_colonne'];
$numRighe = $_GET['num_riga'];
$pagina = $_GET['colore'];
?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <h1>Bianco e nero</h1>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-8">
                    <?php include ('content.php'); ?>
                </div>
                <div class="col-4"> 
                    <?php include ('sidebar.php'); ?>
                </div>

            </div>

        </div>
    </body>
</html>