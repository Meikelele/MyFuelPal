<?php


require_once 'Repository.php';
require_once __DIR__.'/../models/FuelNote.php';

class FuelNoteRepository extends Repository
{

    public function getFuelnotes(User $user)
    {
        try {
            $stmt = $this->database->connect()->prepare('
            SELECT * FROM public."fuelnote" WHERE "id_user" = :id
        ');
            $stmt->bindParam(':id', $_SESSION['User']->getId(), PDO::PARAM_STR);
            $stmt->execute();

            $fuelnotes = $stmt->fetchAll();


            if (!$fuelnotes) {
                //wyrzucic jakis blad zeby wiadomo co nie gra
                return null;
            }
            $list = [];

            foreach ($fuelnotes as $fuelnote) {
                $fuelnote = new FuelNote(
                    $fuelnote['id'],
                    $fuelnote['id_user'],
                    $fuelnote['price'],
                    $fuelnote['liters'],
                    $fuelnote['date'],
                    $fuelnote['car'],
                    $fuelnote['note']);

                array_push($list, $fuelnote);
            }

            return $list;

        } catch (PDOException $e) {
            die("Błąd bazy danych (FuelNoteReposiotry): " . $e->getMessage());
        }

    }

    public function addFuelnote(FuelNote $fuelnote)
    {

        $stmt = $this->database->connect()->prepare('
            INSERT INTO public."fuelnote" (id_user, price, liters, date, car, note)
            VALUES (?, ?, ?, ?, ?, ?)
        ');

        $stmt->execute([
            $fuelnote -> getIduser(),
            $fuelnote -> getPrice(),
            $fuelnote -> getLiters(),
            $fuelnote -> getDate(),
            $fuelnote -> getCar(),
            $fuelnote -> getNote()
        ]);
    }

}