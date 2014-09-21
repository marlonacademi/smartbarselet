<?php 
	namespace controllers;
	use core\view,
	helpers\session as Session;

	class menu_sistema extends \core\controller {
		public function index(){
		View::rendertemplate('header',$data);
			View::render('menu_sistema/view_menu_sistema',$data);
			View::rendertemplate('footer',$data);
			
		}
	}
 ?>