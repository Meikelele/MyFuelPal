<?php
    require 'Routing.php';

    $path = trim($_SERVER['REQUEST_URI'], '/');
    $path = parse_url($path, PHP_URL_PATH);

    Routing::get('', 'DefaultController');
    Routing::get('index', 'DefaultController');

    Routing::get('dashboard', 'DefaultController');
    Routing::get('yourfuelpal', 'FuelNoteController');
    Routing::post('addfuelnote', 'FuelNoteController');
    Routing::post('addcar', 'DefaultController');
    Routing::post('addVehicle', 'VehicleController');
    Routing::post('yourcars', 'VehicleController');
//    Routing::post('dashboard', 'VehicleController');
    Routing::get('profile', 'DefaultController');
    Routing::get('settings', 'DefaultController');
    Routing::get('API', 'APIController');
    Routing::get('adminpanel', 'DefaultController');

    Routing::post('register', 'SecurityController');
    Routing::post('logout', 'SecurityController');
    Routing::post('login', 'SecurityController');

    Routing::post('addProject', 'ProjectController');

    Routing::run($path);
