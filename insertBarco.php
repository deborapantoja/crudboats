<?php

require('BarcoController.php');
require_once('Barco.php');

    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $cidade = $_POST["cidade"];
    $tamanho = $_POST["tamanho"];
    $descricao = $_POST["descricao"];

    $barcoController = new BarcoController();//instanciar a classe BarcoController
    $barco = new Barco();//instanciar a classe Barco

    $barco -> setNameBoats($nome);
    $barco -> setPrice($preco);
    $barco -> setCidade($cidade);
    $barco -> setBoatSize($tamanho);
    $barco -> setBoatDescription($descricao);

    $barcoController -> inserirBarco($barco);
    header("location:index.php");
    