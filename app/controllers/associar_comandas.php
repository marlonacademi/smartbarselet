<?php 
	namespace controllers;
	use core\view,
	helpers\session as Session;

	class associar_comandas extends \core\controller {
		public function index(){
		View::rendertemplate('header',$data);
			View::render('menu_comandas/view_associar_comandas',$data);
			View::rendertemplate('footer',$data);
			
		}
	}
 ?>