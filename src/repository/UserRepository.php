<?php


require_once 'Repository.php';
require_once __DIR__.'/../models/User.php';

class UserRepository extends Repository
{
    public function getUser(string $email): ?User
    {
        try {
            $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.user WHERE "email" = :email
        ');
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$user) {
                //wyrzucic jakis blad zeby wiadomo co nie gra
                return null;
            }

            return new User(
                $user['id'],
                $user['name'],
                $user['surname'],
                $user['email'],
                $user['password']
            );
        } catch (PDOException $e) {
            die("Błąd bazy danych: " . $e->getMessage());
        }

    }

    public function addUser(User $user)
    {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO public.user (name, surname, email, password)
            VALUES (?, ?, ?, ?)
        ');

        $stmt->execute([
            $user->getName(),
            $user->getSurname(),
            $user->getEmail(),
            $user->getPassword(),
        ]);
    }

    public function isEmailUnique($email): bool
    {
        $stmt = $this->database->connect()->prepare('
        SELECT email FROM public.user
    ');

        $stmt->execute();

        $existingEmails = $stmt->fetchAll(PDO::FETCH_COLUMN);

        // Convert all emails to lowercase for case-insensitive comparison
        $lowercaseExistingEmails = array_map('strtolower', $existingEmails);
        $lowercaseEmail = strtolower($email);

        // Check if the provided email is unique
        return !in_array($lowercaseEmail, $lowercaseExistingEmails);
    }
}

