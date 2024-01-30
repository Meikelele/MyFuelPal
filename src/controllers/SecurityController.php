<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';

class SecurityController extends AppController
{
    //przechwytywanie formularzy logowania

    private $userRepository;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
    }

    public function login()
    {
        if($this->isSession())
        {
            header('Location: /index');
        }

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


        session_start();
        $_SESSION['User'] = $user;
        header('Location: /dashboard');

    }

    public function register()
    {
        if($this->isSession())
        {
            header('Location: /index');
        }

        if (!$this->isPost()) {
            return $this->render('register');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmedPassword = $_POST['confirmedPassword'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];

        // Check email uniqueness
        $userRepository = new UserRepository();
        if ($userRepository->isEmailUnique($email)) {
            // Perform other checks if email is unique
            if (
                !filter_var($email, FILTER_VALIDATE_EMAIL) ||
                strlen($password) < 8 ||
                $password !== $confirmedPassword ||
                empty(trim($name)) ||
                empty(trim($surname))
            ) {
                return $this->render('register', ['messages' => ['Please provide valid data']]);
            }

            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            $user = new User($name, $surname, $email, $password);

            $this->userRepository->addUser($user);

            return $this->render('login', ['messages' => ['You\'ve been successfully registered!']]);
        } else {
            return $this->render('register', ['messages' => ['Email address is already in use.']]);
        }
    }

    public function logout()
    {
        session_start();
        session_unset();
        header('Location: /index');
    }









}
