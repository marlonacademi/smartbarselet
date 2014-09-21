<?php 
	namespace controllers;
	use core\view,
	helpers\session as Session;

	class clientesPesquisar extends \core\controller {
		public function index(){
		View::rendertemplate('header',$data);
			View::render('clientes_pesquisar/view_clientes_pesquisar',$data);
			View::rendertemplate('footer',$data);
			
		}
	}
 ?>