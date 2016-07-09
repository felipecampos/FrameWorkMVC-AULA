<?php

/*
* Vídeo Aula - FrameWork MVC com PHP e AngularJS
* Palestrante: Felipe Campos
* Canal: Dicas do Programador
*/
require_once __DIR__.DIRECTORY_SEPARATOR."bootstrap".DIRECTORY_SEPARATOR."configuration.php";

/*Carregando autoload do composer*/
$start = require_once __DIR__.DS."bootstrap".DS."autoload.php";

//print_r($_SERVER);

$start->dispatch();


// //nosso namespace o qual estará gerenciando nossos dados GET/
// $start = new FrameworkAULA\System();

// //Execução do Método Run do System, o qual executará toda regra de negocio
// $start->run();



