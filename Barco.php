<?php


class Barco
{
    private $id;
    private $nameBoats;
    private $price;
    private $cidade;
    private $boatSize;
    private $boatDescription;

    /**
     * Barco constructor.
     */
    public function __construct()
    {
        $this->id = 0;
        $this->nameBoats = '';
        $this->price = '';
        $this->cidade = 0;
        $this->boatSize = '';
        $this->boatDescription = '';
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNameBoats()
    {
        return $this->nameBoats;
    }

    /**
     * @param mixed $nome
     */
    public function setNameBoats($nameBoats)
    {
        $this->nameBoats = $nameBoats;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $descricao
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @param mixed $idade
     */
    public function setCidade($cidade): void
    {
        $this->cidade = $cidade;
    }

    /**
     * @return mixed
     */
    public function getBoatSize()
    {
        return $this->boatSize;
    }

    /**
     * @param mixed $idade
     */
    public function setBoatSize($boatSize): void
    {
        $this->boatSize = $boatSize;
    }

    /**
     * @return mixed
     */
    public function getBoatDescription()
    {
        return $this->boatDescription;
    }

    /**
     * @param mixed $idade
     */
    public function setBoatDescription($boatDescription): void
    {
        $this->boatDescription = $boatDescription;
    }
}