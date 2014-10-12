<?php namespace controllers;
	use core\view as View;//,
	//helpers\session as Session;

	class welcome extends \core\controller{
		
			private $_posts;

		public function __construct(){
			parent::__construct();
			$this->_posts = new \models\posts();
		}
		public function index(){

			echo '<pre>';
			print_r($this->_posts->get_posts());
			echo '</pre>';

			$data['title'] = 'Welcome';
			//$data['idFuncionario'] = Session::get('idFuncionario');
			//$data['script'] 	   = array('apprise-v2.js','verificaTag.js');
			//$data['style']		   = array('apprise-v2.css');
			View::rendertemplate('header',$data);
			View::render('welcome/welcome',$data);
			View::rendertemplate('footer',$data);
		}

		//public function flotCustomer(){
		//	$employes =  $this->_index->getBestEmployees();
			
			// echo json_encode($employes);
		//}
	}
 ?>