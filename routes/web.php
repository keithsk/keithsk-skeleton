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
use Websoft\Route;

// Http Controllers
use App\Http\Main;

$route = new Route();


$route->get('', function($request) {

    response()->json([
        'status' => 'OK',
        'info' => $request,
    ]);
    
});



// Return error as method and uri not found
response()->json([
    'status' => 'error',
    'errorDescription' => 'Page not found',
], 404);
