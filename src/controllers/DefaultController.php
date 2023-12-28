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

//    public function addProject() {
//        $this->render('test-upload');
//    }
}