<?php

require_once 'AppController.php';

class DefaultController extends AppController {


    public function index() {
        //TODO display login.html
        $this->render('welcome');
    }

    public function login() {
        //TODO display projects.html
        $this->render('login');
    }

    public function dashboard() {
        //TODO display projects.html
        $this->render('dashboard');
    }

    public function singup() {
        //TODO display projects.html
        $this->render('singup');
    }
}