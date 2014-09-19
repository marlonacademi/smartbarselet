<?php 
	namespace controllers;
	use core\view,
	helpers\session as Session;

	class menu_pedidos extends \core\controller {
		public function index(){
		View::rendertemplate('header',$data);
			View::render('menu_pedidos/view_menu_pedidos',$data);
			View::rendertemplate('footer',$data);
			
		}
	}
 ?>