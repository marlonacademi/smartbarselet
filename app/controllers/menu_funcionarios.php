<?php 
	namespace controllers;
	use core\view,
	helpers\session as Session;

	class menu_funcionarios extends \core\controller {
		public function index(){
		View::rendertemplate('header',$data);
			View::render('menu_funcionarios/view_menu_funcionarios',$data);
			View::rendertemplate('footer',$data);
			
		}
	}
 ?>