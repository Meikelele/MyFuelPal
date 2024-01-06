<?php

require_once 'AppController.php';

class DefaultController extends AppController {


    public function index() {
        $this->render('welcome');
    }

    public function login() {
        $this->render('login');
    }

    public function singup() {
        $this->render('singup');
    }

    public function dashboard() {
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

    public function profile() {
        $this->render('profile');
    }
    public function settings() {
        $this->render('settings');
    }


//    public function addProject() {
//        $this->render('test-upload');
//    }
}