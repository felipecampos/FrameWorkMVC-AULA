<?php

/*
* Vídeo Aula - FrameWork MVC com PHP e AngularJS
* Palestrante: Felipe Campos
* Canal: Dicas do Programador
*/


namespace App\Controllers;

use FrameworkAULA\Http\Controller;
use App\Models\ContactModel;

//controller
class IndexController extends BaseController{

	
	//action
	public function Index(){

		$model = new ContactModel();

		$dados["contacts"] = $model->read();

		$this->service->render('home/list.home.phtml',$dados);
	}



	public function cadContact(){


		$this->service->render('home/cad.home.phtml');
	}


	public function cadContactPost(){

		

		if(!IsNullOrEmpty($_POST["nome"]) && !IsNullOrEmpty($_POST["phone"]) && !IsNullOrEmpty($_POST["email"])){
			$model = new ContactModel();

			$dados = array('nome' => $_POST["nome"],"phone"=>$_POST["phone"],"email"=>$_POST["email"] );
			$result = $model->insert($dados);

			if($result){
				$this->response->redirect("/editContact/{$result}")->send();
			}else{
				$this->response->redirect("/erroCadastro")->send();
			}
		}else{
			$this->response->redirect("/cadastro")->send();
		}
	}
	
	public function erroCadastro(){

		echo "erro cadastro";
	}

	public function editContact(){

		$id = $this->request->id;
		$data_contact = array();

		echo $id;

		//$this->service->render('home/edit.home.phtml',$data_contact);
	}
}


