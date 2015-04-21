<?php



// normal way to add routes  (not in the annotations)
// $router = new \Phalcon\Mvc\Router();

// *** Verified to work concurrently both Annotations and normal way
// For normal routes that uses :params need to be added here.
// Annotations routes can be added when specific parameters names are needed
// if similar routes are added in Annotations and normal mode, Normal
// takes priority

// This enables to add routes directly in Controller's Annotations
$router = new \Phalcon\Mvc\Router\Annotations(false);

// Add the use the ObjController when /obj is matched
$router->addResource('Index', '/index');

// // This way to add a "GET" method as routes
// $router->addGet("/api/model/{id}", array(       
//     "controller" => "Api",
//     "action"     => "getEndpoint"
// ));


// // This is the default route
$router->add("/:controller/:action/:params", array(        
        "controller" => 1,
        "action"     => 2,
        "params"     => 3,
));


// This is to add normal routes in this file,  
// $router->add("/myCtrlr/:action/:params", array(        
//     "controller" => "myCtrlr",
//     "action"     => 1,
//     "params"     => 2,
// ));



return $router;
