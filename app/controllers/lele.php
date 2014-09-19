<?php 
	namespace controllers;
	use core\view,
	helpers\session as Session;

	class lele extends \core\controller {
		public function index(){
		View::rendertemplate('header',$data);
			View::render('lele/lele',$data);
			View::rendertemplate('footer',$data);
			
		}
	}
 ?>