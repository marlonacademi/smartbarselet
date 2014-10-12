<?php 
	namespace controllers;
	use core\view,
	helpers\session as Session;

	class pedidoEditar extends \core\controller {
		public function __construct(){
			parent::__construct();	
		}
		public function index(){
			View::rendertemplate('header',$data);
			View::render('pedido/editarPedido',$data);
			View::rendertemplate('footer',$data);
		}

	}
 ?>