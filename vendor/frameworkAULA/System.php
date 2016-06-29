<?php
/*
* Vídeo Aula - FrameWork MVC com PHP e AngularJS
* Palestrante: Felipe Campos
* Canal: Dicas do Programador
*/

namespace FrameworkAULA;

/*Gerenciar nosso $_GET url*/
class System{
	/**
	* @Array
	* @private
	* Esta varíavel guardará informação de dados GET/ na requisição do usuário
	*/
	private $_url;
	/**
	* @String
	* @private
	* Esta varíavel guardará informação de controle  requisitado pelo usuário
	*/
	private $_controller;
	/**
	* @String
	* @private
	* Esta varíavel guardará informação de ação do controle requisitado pelo usuário
	*/
	private $_action;
	/**
	* @Void
	* @public
	* Contrutor => public System()
	*/
	public function __construct(){
		$this->setUrl($_GET);
		$this->setController();
		$this->setAction();
	}
	/**
	* @Void
	* @param [$url=>String]
	*/
	public function setUrl($url){
		$this->_url = $url;
	}
	/**
	* @Array => $url
	* @param []
	*/
	public function getUrl(){
		return $this->_url;	
	}
	/**
	* @Void
	* @param []
	*/
	public function setController(){
		$this->_controller = empty($this->_url["controller"]) ? "Index" : $this->_url["controller"];
	}
	/**
	* @String => $controller
	* @param []
	*/
	public function getController(){
		return $controller;
	}
	/**
	* @Void
	* @param []
	*/
	public function setAction(){
		$this->_action = empty($this->_url["action"]) ? "Index" : $this->_url["action"];
	}
	/**
	* @String => $action
	* @param []
	*/
	public function getAction(){
		return $action;
	}
	/**
	* @Void
	* Execução das regras de negocio
	*/
	public function run(){
		$controller = "App\\Controllers\\".$this->_controller."Controller";
		$action = $this->_action;
		$instance = new $controller();
		$instance->$action();
	}
}