<?php 
	namespace controllers;
	use core\view,
	helpers\session as Session;

	class index extends \core\controller {
		public function index(){
			$data['idFuncionario'] = Session::get('idFuncionario');
			$data['script'] 	   = array('apprise-v2.js','verificaTag.js');
			$data['style']		   = array('apprise-v2.css');
			View::rendertemplate('header',$data);
			//View::render('common/home',$data);
			View::render('index/view_home',$data);
			View::rendertemplate('footer',$data);
		}
	}
 ?>