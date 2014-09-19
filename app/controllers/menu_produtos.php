<?php 
	namespace controllers;
	use core\view,
	helpers\session as Session;

	class menu_produtos extends \core\controller {
		public function index(){
		View::rendertemplate('header',$data);
			View::render('menu_produtos/view_menu_produtos',$data);
			View::rendertemplate('footer',$data);
			
		}
	}
 ?>