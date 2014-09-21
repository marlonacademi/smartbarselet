<?php 
	namespace controllers;
	use core\view,
	helpers\session as Session;

	class clientesCadastrar extends \core\controller {

		public function __construct(){
			parent::__construct();
			$this->_client = new \models\client();
		}

		public function index(){
			View::rendertemplate('header');
			View::render('menu_clientes/view_cadastrar_clientes');
			View::rendertemplate('footer');
			
		}
	}
 ?>