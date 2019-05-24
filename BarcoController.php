<?php
require ('Database.php');
require('Barco.php');

class BarcoController
{
    private $conn;

    /**
     * barcoController constructor.
     * @param $conn
     */
    public function __construct()
    {
        $this->conn = Database::getConnection();
    }

    function inserirBarco($barco){
        $this->conn = Database::getConnection();  
        
        $nome = $barco->getNameBoats();
        $preco = $barco->getPrice();
        $cidade = $barco->getCidade();
        $tamanho = $barco->getBoatSize();
        $descricao = $barco->getBoatDescription();

        $sql = "INSERT INTO boats(nameBoats, price, cidade, boatSize, boatDescription)
        VALUES('$nome','$preco','$cidade','$tamanho','$descricao')";
        $res = $this->conn->query($sql);//enviar sql para o banco de dados
        Database::close();//fechar banco de dados
    }

    public function getBarcos(){
        $this->conn = Database::getConnection();
        $barcos = [];
        $res = $this->conn->query("SELECT * FROM boats");
        while($row = $res->fetch_assoc()){
            $barco = new Barco();
            $barco->setId($row['id']);
            $barco->setNameBoats($row['nameBoats']);
            $barco->setPrice($row['price']);
            $barco->setCidade($row['cidade']);
            $barco->setBoatSize($row['boatSize']);
            $barco->setBoatDescription($row['boatDescription']);
            $barcos[] = $barco;
        }
        Database::close();
        return $barcos;
    }

    public function getBarco($id){
        $this->conn = Database::getConnection();
        $res = $this->conn->query("SELECT * FROM boats WHERE id=$id");
        $row = $res->fetch_assoc();
        $barco = new Barco();
        $barco->setId($row['id']);
        $barco->setNameBoats($row['nameBoats']);
        $barco->setPrice($row['price']);
        $barco->setCidade($row['cidade']);
        $barco->setBoatSize($row['boatSize']);
        $barco->setBoatDescription($row['boatDescription']);
        Database::close();
        return $barco;
    }

    public function updateBarco($barco){
        $this->conn = Database::getConnection();  
        
        $id = $barco->getId();
        $nome = $barco->getNameBoats();
        $preco = $barco->getPrice();
        $cidade = $barco->getCidade();
        $tamanho = $barco->getBoatSize();
        $descricao = $barco->getBoatDescription();

        $sql = "UPDATE boats set nameBoats='$nome' , price=$preco, cidade='$cidade', boatSize=$tamanho, boatDescription='$descricao' WHERE id =$id";
        $res = $this->conn->query($sql);//enviar sql para o banco de dados
        Database::close();//fechar banco de dados

    }

    public function deleteBarco($id){
        $this->conn = Database::getConnection();
        $sql = "DELETE from boats where id=$id";
        $r = $this->conn->query($sql);
        Database::close();//fechar banco de dados
    }
}