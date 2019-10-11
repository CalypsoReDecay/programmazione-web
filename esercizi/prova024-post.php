<html>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Nome: <input type="text" name="nome">
<input type="submit">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_REQUEST['nome'];
    if (empty($nome)) {
        echo "Nome è vuoto";
    } else {
        echo $nome;
    }
}

?>

</body>
</html>