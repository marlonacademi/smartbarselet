<?php 
	namespace controllers;
	use core\view,
	helpers\session as Session;

	class incluir_pedidos extends \core\controller {
		public function index(){
		View::rendertemplate('header',$data);
			View::render('incluir_pedidos/view_incluir_pedidos',$data);
			View::rendertemplate('footer',$data);
			
		}
	}
 ?>