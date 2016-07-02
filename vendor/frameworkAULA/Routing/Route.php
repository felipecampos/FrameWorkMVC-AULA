<?php

/*
* Vídeo Aula - FrameWork MVC com PHP e AngularJS
* Palestrante: Felipe Campos
* Canal: Dicas do Programador
*/

namespace FrameworkAULA\Routing;

use \Klein\Klein as Klein;


//Class de roteamento que herda toda nossa biblioteca Klein
class Route extends Klein{


	/**
	* @param [String,String | Call]
	* [Aqui estaremos passando como parametro nossa $route, e nossa $call = 'ControllerName@ActionName']
	*/
	public function get($route,$call){

		if(is_string($call)){

			$explode = explode("@", $call);
			$controller = "App\\".NAMESPACE_CONTROLLERS."\\".$explode[0]."Controller";
			$action = $explode[1];
			

			$this->respond("GET",$route,function($request, $response, $service, $app) use ($controller,$action){
				$class = new $controller();
				$class->__loadVars($request, $response, $app);
				return $class->$action();
			});


		}else{
			$this->respond("GET",$route,$call);
		}
	}

	public function post(){

	}
}