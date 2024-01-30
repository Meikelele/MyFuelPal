<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/FuelNote.php';
require_once __DIR__.'/../repository/FuelNoteRepository.php';

class FuelNoteController extends AppController
{
    private $fuelnoteRepository;

    public function __construct()
    {
        parent::__construct();
        $this->fuelnoteRepository = new FuelNoteRepository();
    }

    public function yourfuelpal()
    {
        if (!$this->isSession())
        {
            header('Location: /index');
        }
        $this->getFuelnotes();
    }

    public function addFuelnote()
    {
        if (!$this->isSession())
        {
            header('Location: /index');
        }

        if ($this->isGet()) {
            return $this->render('add-fuel-note');
        }
        if (!$this->isPost()) {
            return $this->render('dashboard');
        }

        $price = $_POST['price'];
        $liters = $_POST['liters'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $car = $_POST['car'];
        $note = $_POST['description'];

        $date = $date." ".$time.":00";





        $fuelnoteRepository = new FuelNoteRepository();

        //walidacja

        if (!$price || !$liters || !$note || !$date || !$car)
        {
            //zgloszenie jakiegos bledu
            die("daje info ze formularz jest zly");
            return null;
        }

        $fuelnote = new FuelNote(null, $_SESSION['User']->getId(), $price, $liters, $date, $car, $note);
//        var_dump($vehicle);
        $this->fuelnoteRepository->addFuelnote($fuelnote);

        header('Location: /dashboard');
    }

    private function getFuelnotes()
    {
        $fuelnotes = $this->fuelnoteRepository->getFuelnotes($_SESSION['User']);
        $this->render('your-fuelpal', ['fuelnotes' => $fuelnotes]);
    }



}