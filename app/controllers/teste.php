<?php 
	namespace controllers;
	use core\view,
	helpers\session as Session;
	class teste extends \core\controller {
		public function index(){
		
			View::render('teste/cadastro',$data);
		
			
		}
	}
 ?>