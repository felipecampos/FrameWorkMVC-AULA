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

		$model = new ContactModel();

		if($model->checkVarsIsNotNull($_POST)){
			

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

	public function erroUpdate(){
		echo "erro update";
	}

	public function erroDelete(){
		echo "erro delete";
	}

	public function editContact(){
		$id = $this->request->id;

		$model = new ContactModel();

		$result = $model->read("*","id_contact={$id}");
		if( count($result) > 0){
			$dados["contact"] = $result[0];
			$this->service->render('home/edit.home.phtml',$dados);
		}else{
			$this->response->redirect("/")->send();
		}
		

	}

	public function editContactPost(){

		$id = $this->request->id;
		$model = new ContactModel();
		if($model->checkVarsIsNotNull($_POST)){
			

			$dados = array('nome' => $_POST["nome"],"phone"=>$_POST["phone"],"email"=>$_POST["email"] );
			$result = $model->update($dados,"id_contact={$id}");

			if($result > 0){
				$this->response->redirect("/")->send();
			}else{
				$this->response->redirect("/erroUpdate")->send();
			}
		}else{
			$this->response->redirect("/editContact/{$id}")->send();
		}

	

		
	}

	public function deleteContact(){
		$id = $this->request->id;
		$model = new ContactModel();

		$result = $model->delete("id_contact={$id}");

		if($result > 0){
				$this->response->redirect("/")->send();
		}else{
			$this->response->redirect("/erroDelete")->send();
		}
	}
}


