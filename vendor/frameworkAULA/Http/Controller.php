<?php
/*
* Vídeo Aula - FrameWork MVC com PHP e AngularJS
* Palestrante: Felipe Campos
* Canal: Dicas do Programador
*/

namespace FrameworkAULA\Http;

abstract class Controller{

	protected $request;
	protected $response;
	protected $service;
	protected $app;


	/**
	* @param [Request data, Response Data, Application Klein]
	*/
	public function __loadVars($request, $response,  $app){
			$this->request = $request;
			$this->response = $response;
			$this->service = new View($request,$response);
			$this->app = $app;
	}

}