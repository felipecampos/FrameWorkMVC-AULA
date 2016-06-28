<?php
/*
* Vídeo Aula - FrameWork MVC com PHP e AngularJS
* Palestrante: Felipe Campos
* Canal: Dicas do Programador
*/



/*Carregando autoload do composer*/
require_once __DIR__."/bootstrap/autoload.php";


//nosso namespace o qual estará gerenciando nossos dados GET/
$start = new FrameworkAULA\System();

//Execução do Método Run do System, o qual executará toda regra de negocio
$start->run();