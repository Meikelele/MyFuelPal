<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';

class SecurityController extends AppController
{
    //przechwytywanie formularzy logowania
    public function login()
    {
//        $user = new User('jsnow@pk.edu.pl', 'admin', "John", "Snow");
        $userRepository = new UserRepository();

        if (!$this->isPost()){
            return $this->render('login');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $userRepository->getUser($email);

        if (!$user){

            return $this->render('login', ['messages' => ['User not exist!']]);
        }

        if ($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ['User with this email not exist!']]);
        }

        if ($user->getPassword() !== $password) {
            return $this->render('login', ['messages' => ['Wrong password!']]);
        }

        return $this->render('dashboard');

//        //NIE DO KONCA DZIALA XD
//        $url = "http://$_SERVER[HTTP_HOST]";
//        header("Location: {$url}/welcome" );
    }







}
