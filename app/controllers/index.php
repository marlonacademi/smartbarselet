<?php 
	namespace controllers;
	use core\view;

	class index extends \core\controller {
		public function index(){
			View::rendertemplate('header',$data);
			View::render('common/home',$data);
			View::rendertemplate('footer',$data);
		}
	}
 ?>