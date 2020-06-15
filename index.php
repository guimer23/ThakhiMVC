<?php
// Errores de PHP a Try/Catch
function exception_error_handler($severidad, $mensaje, $fichero, $línea) {
    if (!(error_reporting() & $severidad)) {
        // Este código de error no está incluido en error_reporting
        return;
    }
    throw new ErrorException($mensaje, 0, $severidad, $fichero, $línea);
}

set_error_handler("exception_error_handler");

// Composer
require_once 'vendor/autoload.php';

// path
define('_VIEW_PATH_', 'app/views/');

// Router

// <a href="?c=home&a=crud" class="pull-right btn btn-primary">
$c = sprintf( 'App\Controllers\%sController', $_GET['c'] ?? 'Login' );
$a = $_GET['a'] ?? 'index';

//http://localhost/THAKHIMVC/?c=home&a=crud
//$e = sprintf( 'App\Controllers\%sController', $_GET['e'] ?? 'Cliente' );
//$e = $_GET['e'] ?? 'App\Controllers\Cliente\agregar';
//$e = $_GET['e'] ?? 'clientes/agregar';

//<a href="?c=home&a=crud" class="pull-right btn btn-primary">
//http://localhost/THAKHIMVC/?c=home&a=crud
$c = trim(ucfirst($c));
$a = trim(strtolower($a));


//$router->controller('/Cliente', 'App\\Controllers\\UsuarioController');

$controller = new $c;
$controller->$a();

