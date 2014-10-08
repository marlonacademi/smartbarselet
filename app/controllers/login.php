<?php 
	namespace controllers;
	use core\view as View,
	helpers\session as Session,
	helpers\url as Url;
	class login extends \core\controller{
		private $_login;

		public function __construct(){
			parent::__construct();
			$this->_login = new \models\login();
		}

		public function index(){
			if (Session::get('idFuncionario')){
				Url::redirect('index');
			}
			$data['title'] = 'Login sistema';
			View::render('login/login',$data);

		}

		public function validateLogin(){
			if (isset($_POST)){
				$senha = md5($_POST['senha']);
				$return =  $this->_login->validateLogin($_POST['login'],$senha);
				if ($return[0]->total > 0){
					Session::set('idFuncionario',$return[0]->idFuncionario);
				}
				echo json_encode($return);
			}
		}
	}
 ?>