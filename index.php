<?php
include_once("./config/autoload.php");

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)).DS."\\");

// Contrôleur par défaut
define ('DEFAULT_CONTROLLER', 'Accueil');
define ('DEFAULT_FUNCTION', 'DefaultAction');

// Contrôleur en cas d'erreur
define ('ERROR_CONTROLLER', 'Error');
define ('ERROR_FUNCTION', 'Index');
 
define ('DIR_CLASS', __DIR__.'/application/controllers/');
define ('DIR_MODEL', __DIR__.'/application/models/');
define ('DIR_VIEW',  __DIR__.'/application/views/');


/* ROUTING */
$_routing = Routing::getInstance();
$_routing->route();
//
