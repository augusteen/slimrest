<?php
// use \Psr\Http\Message\ServerRequestInterface as Request;
// use \Psr\Http\Message\ResponseInterface as Response;

require  __DIR__ . '/vendor/autoload.php';

// $app = new \Slim\App;
// $app->get('/hello/{name}', function (Request $request, Response $response) {
//     $name = $request->getAttribute('name');
//     $response->getBody()->write("Hello, $name");

//     return $response;
// });
// $app->run();


// Prepare app
$settings = require __DIR__ . '/app/settings.php';

$app = new \Slim\App($settings);

// Register dependencies with the DIC
require __DIR__ . '/app/dependencies.php';

spl_autoload_register(function ($classname) {
    require ("app/classes/" . $classname . ".php");
});

// Register middleware
//require __DIR__ . '/../app/src/middleware.php';

// Register routes
require __DIR__ . '/app/routes.php';
// Run app

$app->run();