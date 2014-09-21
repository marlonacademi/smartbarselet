<?php 
	namespace controllers;
	use core\view,
	helpers\session as Session;

	class pesquisar_clientes extends \core\controller {
		public function index(){
			View::rendertemplate('header',$data);
			View::render('pesquisar_clientes/view_pesquisar_clientes',$data);
			View::rendertemplate('footer',$data);
			
		}
	}
 ?>

