<?php 
	namespace controllers;
	use core\view,
	helpers\session as Session;

	class carregar_comandas extends \core\controller {
		public function index(){
		View::rendertemplate('header',$data);
			View::render('carregar_comandas/view_carregar_comandas',$data);
			View::rendertemplate('footer',$data);
			
		}
	}
 ?>