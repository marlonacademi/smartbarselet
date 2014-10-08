<?php 
	namespace controllers;
	use core\view,
	helpers\session as Session;

	class cadastrar_funcionarios extends \core\controller {
		public function index(){
		View::rendertemplate('header',$data);
			View::render('menu_funcionarios/view_cadastrar_funcionarios',$data);
			View::rendertemplate('footer',$data);
			
		}
	}
 ?>