<?php

/*
* Vídeo Aula - FrameWork MVC com PHP e AngularJS
* Palestrante: Felipe Campos
* Canal: Dicas do Programador
*/


namespace App\Controllers;

use FrameworkAULA\Http\Controller;

//controller
class BaseController extends Controller{

	
	public function __loadVars($request, $response,  $app){


		parent::__loadVars($request, $response,  $app);

		$this->service->layout(VIEWS.'/layouts/default.phtml');
	}	

}