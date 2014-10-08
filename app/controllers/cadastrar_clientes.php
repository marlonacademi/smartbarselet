<?php 
	namespace controllers;
	use core\view,
	helpers\session as Session;

	class cadastrar_clientes extends \core\controller {
		
		public function index(){
		View::rendertemplate('header',$data);
			View::render('menu_clientes/view_cadastrar_clientes',$data);
			View::rendertemplate('footer',$data);
		}
		public function __construct(){
			parent::__construct();
			$this->_client = new \models\client();
		}

	}
 ?>