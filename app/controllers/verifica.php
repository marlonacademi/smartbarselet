<?php 
	namespace controllers;
	use core\view,
	helpers\session as Session;

	class verifica extends \core\controller {
		public function index(){
		View::rendertemplate('header',$data);
			View::render('menu_clientes/verifica',$data);
			View::rendertemplate('footer',$data);
			
		}
	}
 ?>