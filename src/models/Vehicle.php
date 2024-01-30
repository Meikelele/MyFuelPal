<?php

class Vehicle{
    private $id;
    private string $brand;
    private string $model;
    private string $nickname;
    private string $course;
    private string $platenumber;
    private string $countryoforigin;
    private string $fuel;
    private string $note;
    private int $id_user;


    public function __construct($id, int $id_user, string $brand, string $model, string $nickname, string $course, string $platenumber, string $countryoforigin, string $fuel, string $note)
    {
        $this->brand = $brand;
        $this->id = $id;
        $this->id_user = $id_user;
        $this->model = $model;
        $this->nickname = $nickname;
        $this->course = $course;
        $this->platenumber = $platenumber;
        $this->countryoforigin = $countryoforigin;
        $this->fuel = $fuel;
        $this->note = $note;
    }
    public function getId(): int
    {
        return $this->id;
    }
    public function getIduser(): int
    {
        return $this->id_user;
    }


    public function getBrand(): string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    public function getNickname(): string
    {
        return $this->nickname;
    }

    public function setNickname(string $nickname): void
    {
        $this->nickname = $nickname;
    }

    public function getCourse(): string
    {
        return $this->course;
    }

    public function setCourse(string $course): void
    {
        $this->course = $course;
    }

    public function getPlatenumber(): string
    {
        return $this->platenumber;
    }

    public function setPlatenumber(string $platenumber): void
    {
        $this->platenumber = $platenumber;
    }

    public function getCountryoforigin(): string
    {
        return $this->countryoforigin;
    }

    public function setCountryoforigin(string $countryoforigin): void
    {
        $this->countryoforigin = $countryoforigin;
    }

    public function getFuel(): string
    {
        return $this->fuel;
    }

    public function setFuel(string $fuel): void
    {
        $this->fuel = $fuel;
    }

    public function getNote(): string
    {
        return $this->note;
    }

    public function setNote(string $note): void
    {
        $this->note = $note;
    }






}