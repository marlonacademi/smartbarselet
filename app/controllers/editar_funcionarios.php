<?php 
	namespace controllers;
	use core\view,
	helpers\session as Session;

	class editar_funcionarios extends \core\controller {
		public function index(){
		View::rendertemplate('header',$data);
			View::render('menu_funcionarios/view_editar_funcionarios',$data);
			View::rendertemplate('footer',$data);
			
		}
	}
 ?>