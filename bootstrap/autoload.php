<?php

/*
* Vídeo Aula - FrameWork MVC com PHP e AngularJS
* Palestrante: Felipe Campos
* Canal: Dicas do Programador
*/

require_once __DIR__."/../vendor/autoload.php";

$base  = dirname($_SERVER['PHP_SELF']);

// Update request when we have a subdirectory    
if(ltrim($base, '/')){ 

    $_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], strlen($base));
}


$route = new FrameworkAULA\Routing\Route();

require_once __DIR__."/../app/routes.php";

$route->dispatch();

