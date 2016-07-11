<?php

/*
* Vídeo Aula - FrameWork MVC com PHP e AngularJS
* Palestrante: Felipe Campos
* Canal: Dicas do Programador
*/


namespace App\Models;

use FrameworkAULA\Data\Model;

//controller
class ContactModel extends Model{

	protected $table = "contact";


	public function checkVarsIsNotNull(array $array){

		if(!IsNullOrEmpty($array["nome"]) && !IsNullOrEmpty($array["phone"]) && !IsNullOrEmpty($array["email"]))
			return true;

		return false;
	}

}
