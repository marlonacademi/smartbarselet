<?php 
	namespace controllers;
	use core\view,
	helpers\session as Session;

	class menu_clientes extends \core\controller {
		public function index(){
		View::rendertemplate('header',$data);
			View::render('menu_clientes/view_menu_clientes',$data);
			View::rendertemplate('footer',$data);
			
		}
	}
 ?>