<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>CADASTRO - BARCOS</title>
</head>

<?php
    require("BarcoController.php");
    if(isset($_GET["id"])){
        $barcoController = new BarcoController();
        $barco = $barcoController->getBarco($_GET["id"]);
        $_POST["id"] = $_GET["id"];
    }
?>

<body>
    <div>
        <h1>Editar Barcos</h1>
        <fieldset center id="barcos">
            <legend>Barcos</legend>
            <form method="POST" action="updateBarco.php">
                <table border="1">
                    <tr>
                        <td><label for="nm">Id:</label></td>
                        <td><input value="<?=$barco->getId()?>" readonly type="text" name="id" id="nm"
                                placeholder="Id" /></td>
                    </tr>
                    <tr>
                        <td><label for="nm">Nome:</label></td>
                        <td><input value="<?=$barco->getNameBoats()?>" type="text" name="nome" id="nm"
                                placeholder="Digite o nome do barco" /></td>
                    </tr>
                    <tr>
                        <td><label for="prc">Preço:</label></td>
                        <td><input value="<?=$barco->getPrice()?>" type="number" name="preco" id="prc"
                                placeholder="Digite o preço" /></td>
                    </tr>
                    <tr>
                        <td><label for="cdd">Cidade:</label></td>
                        <td><input value="<?=$barco->getCidade()?>" type="text" name="cidade" id="cdd"
                                placeholder="Digite a cidade" /></td>
                    </tr>
                    <tr>
                        <td><label for="tam">Tamanho:</label></td>
                        <td><input value="<?=$barco->getBoatSize()?>" type="number" name="tamanho" id="tam"
                                placeholder="Digite o tamanho, em metros quadrados, do braco" /></td>
                    </tr>
                    <tr>
                        <td><label for="dscc">Descrição:</label></td>
                        <td><input value="<?=$barco->getBoatDescription()?>" type="text" name="descricao" id="dscc"
                                placeholder="Digite uma descrição do barco" />
                        </td>
                    </tr>
                    <td>
                    <td><input type="submit" value="Editar" /></td>
                    </td>
                </table>
            </form>
        </fieldset>
    </div>
</body>

</html>