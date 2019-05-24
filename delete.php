<?php

require('BarcoController.php');

    if(isset($_GET["id"])){
        $barcoController = new BarcoController();
        $barcoController->deleteBarco($_GET["id"]);
        header('location:index.php');
    }