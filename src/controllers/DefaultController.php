<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    protected function checkIfLoggedIn()
    {
        // Sprawdzenie, czy użytkownik jest zalogowany (czy ciasteczko istnieje)
        if (!isset($_COOKIE['user_email'])) {

            // Przekierowanie użytkownika na stronę logowania (lub inną, jeśli to bardziej odpowiednie)
            $url = "http://$_SERVER[HTTP_HOST]";
            header("Location: {$url}/login");
            exit; // Zakończ proces, aby nie wykonywać dalszych działań
        }
    }
    public function index() {
        if($this->isSession())
        {
            header('Location: /dashboard');
        }
        $this->render('welcome');
    }

    public function dashboard() {
        if(!$this->isSession())
        {
            header('Location: /index');
        }

        $this->render('dashboard');
    }

    public function yourcars() {
        $this->render('your-cars');
    }

    public function yourfuelpal() {
        $this->render('your-fuelpal');
    }

    public function addfuelnote() {
        $this->render('add-fuel-note');
    }
    public function addcar() {
        $this->render('addcar');
    }

    public function profile() {
        if(!$this->isSession())
        {
            header('Location: /index');
        }

        $this->render('profile');
    }
    public function settings() {
        $this->render('settings');
    }


//    public function addProject() {
//        $this->render('test-upload');
//    }
}