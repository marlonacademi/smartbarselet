<?php 
	namespace controllers;
	use core\view,
	helpers\session as Session;

	class editar_pedidos extends \core\controller {
		public function index(){
		View::rendertemplate('header',$data);
			View::render('menu_pedidos/view_editar_pedidos',$data);
			View::rendertemplate('footer',$data);
			
		}
	}
 ?>