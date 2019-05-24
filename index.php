<?php
require ('BarcoController.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>

<body>
    <h1>Hello World</h1>
    <a href="insert.html">Inserir</a>
    <?php
    $barcoController = new BarcoController();
    $barcos = $barcoController->getBarcos();
    foreach ($barcos as $barco) {
        echo $barco->getBoatDescription(), "\n";
        $id=$barco->getId();
        echo "<a href='update.php?id=$id'>Editar</a>";
        echo "<a href='delete.php?id=$id'>Delete</a>";
    }
?>
</body>

</html>