<?php 
	namespace controllers;
	use core\view,
	helpers\session as Session;

	class editar_produtos extends \core\controller {
		public function index(){
		View::rendertemplate('header',$data);
			View::render('menu_produtos/view_editar_produtos',$data);
			View::rendertemplate('footer',$data);
			
		}
	}
 ?>