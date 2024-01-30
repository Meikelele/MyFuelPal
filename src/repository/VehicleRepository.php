<?php


require_once 'Repository.php';
require_once __DIR__.'/../models/Vehicle.php';

class VehicleRepository extends Repository
{
    public function getVehicles(User $user)
    {
        try {
            $stmt = $this->database->connect()->prepare('
            SELECT * FROM public."vehicle" WHERE "id_user" = :id
        ');
            $stmt->bindParam(':id', $_SESSION['User']->getId(), PDO::PARAM_STR);
            $stmt->execute();

            $vehicles = $stmt->fetchAll();

            if (!$vehicles) {
                //wyrzucic jakis blad zeby wiadomo co nie gra
                return null;
            }
            $list = [];

            foreach ($vehicles as $vehicle) {
                $vehicle = new Vehicle(
                    $vehicle['id'],
                    $vehicle['id_user'],
                    $vehicle['id_brand'],
                    $vehicle['id_model'],
                    $vehicle['nickname'],
                    $vehicle['course'],
                    $vehicle['platenumber'],
                    $vehicle['countryoforigin'],
                    $vehicle['fuel'],
                    $vehicle['note']);

                array_push($list, $vehicle);
            }

            return $list;

        } catch (PDOException $e) {
            die("Błąd bazy danych (VehicleReposiotry): " . $e->getMessage());
        }

    }

    public function addVehicle(User $user, Vehicle $vehicle)
    {

        $stmt = $this->database->connect()->prepare('
            INSERT INTO public."vehicle" (id_user, id_brand, id_model, nickname, course, platenumber, countryoforigin, fuel, note)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)
        ');

        $stmt->execute([
            $vehicle -> getIduser(),
            $vehicle -> getBrand(),
            $vehicle -> getModel(),
            $vehicle -> getNickname(),
            $vehicle -> getCourse(),
            $vehicle -> getPlatenumber(),
            $vehicle -> getCountryoforigin(),
            $vehicle -> getFuel(),
            $vehicle -> getNote()
        ]);
    }

}

