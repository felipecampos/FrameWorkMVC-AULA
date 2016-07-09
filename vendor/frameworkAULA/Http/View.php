<?php

/*
* Vídeo Aula - FrameWork MVC com PHP e AngularJS
* Palestrante: Felipe Campos
* Canal: Dicas do Programador
*/

namespace FrameworkAULA\Http;

use Klein\ServiceProvider;

//Class responsável por redenrizar nossas visualizações
class View extends ServiceProvider{


	/**
	* @param [File.phtml| dados=array()]
	*/

	public function render($view, array $data = array()){
		parent::render(VIEWS.DS.$view,$data);
	}

}