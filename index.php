<?php
    require 'Routing.php';

    $path = trim($_SERVER['REQUEST_URI'], '/');
    $path = parse_url($path, PHP_URL_PATH);

    Routing::get('', 'DefaultController');
    Routing::get('index', 'DefaultController');
    //Routing::get('login', 'DefaultController');

    Routing::get('dashboard', 'DefaultController');
    Routing::get('yourcars', 'DefaultController');
    Routing::get('yourfuelpal', 'DefaultController');
    Routing::post('addfuelnote', 'DefaultController');
    Routing::post('addcar', 'DefaultController');
    Routing::post('addVehicle', 'VehicleController');
    Routing::post('yourcars', 'VehicleController');
    Routing::get('profile', 'DefaultController');
    Routing::get('settings', 'DefaultController');

    Routing::post('register', 'SecurityController');
    Routing::post('logout', 'SecurityController');
    Routing::post('login', 'SecurityController');

    Routing::post('addProject', 'ProjectController');

    Routing::run($path);
