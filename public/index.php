<?php


error_reporting(E_ALL);
use Phalcon\Mvc\Application;
use Phalcon\Config\Adapter\Ini as ConfigIni;


try {


    define('APP_PATH', realpath('..') . '/');

    /**
     * Read the configuration
     */
    $config = new ConfigIni(APP_PATH . 'app/config/config.ini');

    /**
     * Auto-loader configuration
     */
    require APP_PATH . 'app/config/loader.php';


/**
     * Load application services
     */
    require APP_PATH . 'app/config/services.php';


    // // This will take the routes directly from the controllers in the annotations (comments)
    // $di['router'] = function() {

    //     //Use the annotations router
    //     $router = new \Phalcon\Mvc\Router\Annotations(false);

    //     //Read the annotations from ApiController if the uri starts with /api
    //     $router->addResource('Api', '/api');
    //     $router->addResource('Obj', '/api/obj');
    //     $router->addResource('Raker', '/rest/raker');

    //     return $router;
    // };    


    //Handle the request
    $application = new \Phalcon\Mvc\Application($di);

    echo $application->handle()->getContent();

} catch(\Phalcon\Exception $e) {
     echo "PhalconException: ", $e->getMessage();
}