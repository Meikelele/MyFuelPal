<?php

require_once 'src/controllers/DefaultController.php';
require_once 'src/controllers/SecurityController.php';
require_once 'src/controllers/ProjectController.php';
require_once 'src/controllers/VehicleController.php';
require_once 'src/controllers/APIController.php';
require_once 'src/controllers/FuelNoteController.php';

class Routing {

    //bedzie przechowywac URL oraz sciezki kontrolera ktory zostanie otwarty
    public static $routes;

    //metoda ktora pozwoli wstawic odpowiedni kotroler do okreslonego URL
    public static function get($url, $controller){
        self::$routes[$url] = $controller;

    }

    public static function post($url, $controller)
    //dane z formualrza przekazujemy za pomoca POST
    {
        self::$routes[$url] = $controller;

    }

    //metoda pozwalaja uruchomic dany kontroler ktory zostal przypisany pod dany URL
    public static function run($url){
        $action = explode("/", $url)[0];


        if(!array_key_exists($action, self::$routes)){
            die("Wrong url!!!");
        }

        //TODO call controller method
        $controller = self::$routes[$action];

        //obiekty moga byc tworzone na podstawie stringa
        $object = new $controller;

        //otwarcie samego adresu localhost:8080
        $action = $action ?: 'index';
        $id = explode("/", $url)[1] ?? '';
        $object->$action($id);

    }


}