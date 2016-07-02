<?php

/*
* Vídeo Aula - FrameWork MVC com PHP e AngularJS
* Palestrante: Felipe Campos
* Canal: Dicas do Programador
*/


namespace App\Controllers;

use FrameworkAULA\Http\Controller;

//controller
class IndexController extends BaseController{

	
	//action
	public function Index(){

		$this->service->render('home/list.home.phtml');
	}



	public function cadContact(){
		$this->service->render('home/cad.home.phtml');
	}


	public function editContact(){

		$id = $this->request->id;
		$data_contact = array();

		$this->service->render('home/edit.home.phtml',$data_contact);
	}
}