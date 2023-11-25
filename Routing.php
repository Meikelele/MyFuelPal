<?php

require_once 'src/controllers/DefaultController.php';

class Routing {

    //bedzie przechowywac URL oraz sciezki kontrolera ktory zostanie otwarty
    public static $routes;

    //metoda ktora pozwoli wstawic odpowiedni kotroler do okreslonego URL
    public static function get($url, $controller){
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

        $object->$action();

    }


}