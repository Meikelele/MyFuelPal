<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/Vehicle.php';
require_once __DIR__.'/../repository/VehicleRepository.php';

class VehicleController extends AppController
{
    private $vehicleRepository;

    public function __construct()
    {
        parent::__construct();
        $this->vehicleRepository = new VehicleRepository();
    }

    public function yourcars()
    {
        if (!$this->isSession())
        {
            header('Location: /index');
        }
        $this->getVehicles();
    }

    public function addVehicle()
    {
        if (!$this->isSession())
        {
            header('Location: /index');
        }

        if (!$this->isPost()) {
            return $this->render('dashboard');
        }

        $nickname = $_POST['nickname'];
        $course = $_POST['course'];
        $platenumber = $_POST['license_number'];
        $countryoforigin = $_POST['cof'];
        $fuel = $_POST['typeoffuel'];
        $note = $_POST['description'];
        $id_brand = $_POST['brand'];
        $id_model = $_POST['model'];

//        echo "Nickname: " . $nickname . "<br>";
//        echo "Course: " . $course . "<br>";
//        echo "License Number: " . $platenumber . "<br>";
//        echo "Country of Origin: " . $countryoforigin . "<br>";
//        echo "Fuel Type: " . $fuel . "<br>";
//        echo "Note: " . $note . "<br>";
//        echo "Brand ID: " . $id_brand . "<br>";
//        echo "Model ID: " . $id_model . "<br>";

        $vehicleRepository = new VehicleRepository();

        //walidacja

        if (!$nickname || !$countryoforigin || !$note || !$platenumber || !$id_brand || !$id_model || !$fuel)
        {
            //zgloszenie jakiegos bledu
            die("daje info ze formularz jest zly");
            return null;
        }

        $vehicle = new Vehicle(null, $_SESSION['User']->getId(), $id_brand, $id_model, $nickname,  $course, $platenumber, $countryoforigin, $fuel, $note);
//        var_dump($vehicle);
        $this->vehicleRepository->addVehicle($_SESSION['User'], $vehicle);

        header('Location: /dashboard');
    }

    private function getVehicles()
    {
        $vehicles = $this->vehicleRepository->getVehicles($_SESSION['User']);
        $this->render('your-cars', ['vehicles' => $vehicles]);
    }


}
