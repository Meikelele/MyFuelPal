<?php

class FuelNote
{
    private $id;
    private $id_user;
    private $price;
    private $liters;
    private $date;
    private $car;
    private $note;

    public function __construct($id, $id_user, $price, $liters, $date, $car, $note)
    {
        $this->id = $id;
        $this->id_user = $id_user;
        $this->price = $price;
        $this->liters = $liters;
        $this->date = $date;
        $this->car = $car;
        $this->note = $note;
    }


    public function getId()
    {
        return $this->id;
    }

    public function getIdUser()
    {
        return $this->id_user;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getLiters()
    {
        return $this->liters;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getCar()
    {
        return $this->car;
    }

    public function getNote()
    {
        return $this->note;
    }




}