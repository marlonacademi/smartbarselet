<?php 
	namespace controllers;
	use core\view,
	helpers\session as Session;

	class sucesso extends \core\controller {
		public function index(){
		View::rendertemplate('header',$data);
			View::render('menu_clientes/sucesso',$data);
			View::rendertemplate('footer',$data);
			
		}
	}
 ?>