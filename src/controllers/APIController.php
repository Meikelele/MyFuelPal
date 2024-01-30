<?php

require_once 'AppController.php';
require_once __DIR__.'/../../Database.php';
class APIController extends AppController
{
    private $database;


    public function __construct()
    {
        $this->database = new Database();
    }

    public function API($uri)
    {
        if (method_exists($this, $uri))
        {
            $this->$uri();
        }
        else
        {
            echo "blad api uri";
        }
    }

    private function getBrands()
    {
        try {
            $stmt = $this->database->connect()->prepare('
            SELECT * FROM public."brand"
        ');

            $stmt->execute();

            $brands = $stmt->fetchAll();

            if (!$brands) {
                //wyrzucic jakis blad zeby wiadomo co nie gra
                return null;
            }

            echo json_encode($brands);
        } catch (PDOException $e) {
            die("Błąd bazy danych (APIController): " . $e->getMessage());
        }
    }

    private function getModels()
    {
        try {
            $stmt = $this->database->connect()->prepare('
            SELECT * FROM public."model" WHERE id_brand = :id_brand
        ');

            $stmt->bindParam(':id_brand', $_GET['id_brand'], PDO::PARAM_STR);
            $stmt->execute();

            $models = $stmt->fetchAll();

            if (!$models) {
                //wyrzucic jakis blad zeby wiadomo co nie gra
                return null;
            }

            echo json_encode($models);
        } catch (PDOException $e) {
            die("Błąd bazy danych (APIController): " . $e->getMessage());
        }
    }

    public function getFuels()
    {
        try {
            $stmt = $this->database->connect()->prepare('
            SELECT * FROM public."fuel"
        ');

            $stmt->execute();

            $fuels = $stmt->fetchAll();

            if (!$fuels) {
                //wyrzucic jakis blad zeby wiadomo co nie gra
                return null;
            }

            echo json_encode($fuels);
        } catch (PDOException $e) {
            die("Błąd bazy danych (APIController_getFuel()): " . $e->getMessage());
        }
    }
    
    public function getVehicles(){
        try {
            $stmt = $this->database->connect()->prepare('
            SELECT * FROM public."vehicle"
        ');

            $stmt->execute();

            $vehicles = $stmt->fetchAll();

            if (!$vehicles) {
                //wyrzucic jakis blad zeby wiadomo co nie gra
                return null;
            }

            echo json_encode($vehicles);
        } catch (PDOException $e) {
            die("Błąd bazy danych (APIController_getVehicles()): " . $e->getMessage());
        }
        
        
    }

    public function getCars()
    {
        try {
            $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.user_vehicles WHERE "id" = :id_user
        ');
            session_start();
            $stmt->bindParam(':id_user', $_SESSION['User']->getId(), PDO::PARAM_STR);
            $stmt->execute();


            $vehicles = $stmt->fetchAll();

            if (!$vehicles) {
                //wyrzucic jakis blad zeby wiadomo co nie gra
                return null;
            }

            echo json_encode($vehicles);
        } catch (PDOException $e) {
            die("Błąd bazy danych (APIController_getVehicles()): " . $e->getMessage());
        }
    }

    public function getFuelnotes()
    {
        try {
            $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.fuelnote_extended WHERE "id_user" = :id_user
        ');
            session_start();
            $stmt->bindParam(':id_user', $_SESSION['User']->getId(), PDO::PARAM_STR);
            $stmt->execute();


            $vehicles = $stmt->fetchAll();

            if (!$vehicles) {
                //wyrzucic jakis blad zeby wiadomo co nie gra
                return null;
            }

            echo json_encode($vehicles);
        } catch (PDOException $e) {
            die("Błąd bazy danych (APIController_getFuelnote()): " . $e->getMessage());
        }
    }





















}