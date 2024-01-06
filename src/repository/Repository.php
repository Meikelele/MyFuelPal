<?php

require_once __DIR__.'/../../Database.php';

class Repository
//wzorzec projektowy - singleton, aby ta instcja byla jedyna w calym programie
{
    protected $database;

    public function __construct()
    {
        $this->database = new Database();
    }
}