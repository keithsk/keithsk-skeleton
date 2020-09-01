<?php

/**
 * ###########################################
 * ##### Bootstrapping
 * ###########################################
 */

autoload_app_classes( __DIR__ . '/..' );

set_time_limit(60);

if(get_config('app.debug') === true) {

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

}




/**
 * ###########################################
 * ##### API Routes
 * ###########################################
 */
use Keithsk\Route;

// Http Controllers
use App\Http\Main;

$route = new Route();


$route->get('', function($request) {
    response()->json([
        'status' => 'OK',
        'info' => $request,
    ]);
});


$route->get('test1', function($request) {
    Main::test1($request);
});

$route->get('test2', function($request) {
    $main = new Main();
    $main->test2($request);
});



// Return error as method and uri not found
response()->json([
    'status' => 'error',
    'message' => 'Page not found',
], 404);
