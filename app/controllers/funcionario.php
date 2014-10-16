<?php 
	namespace controllers;
	use core\view,
	helpers\session as Session;

	class funcionario extends \core\controller {
		public function __construct(){
			parent::__construct();	
			$this->_funcionario = new \models\funcionario();
		}
		public function index(){
			View::rendertemplate('header',$data);
			View::render('funcionario/cadastrar',$data);
			View::rendertemplate('footer',$data);
		}
		public function validateCadastro (){
			if ($_POST){

				$error = 0;

				foreach ($_POST as $key => $post) {
					
					if ($post == ""){
						$error++;
					}
				}

				if ($error == 0 ){
					$result = $this->_funcionario->insertFuncionario($_POST);
					if ($result){
						echo json_encode(array('menssagem' => 'Funcionario cadastrado com sucesso', 'error' => 0));
					} else {
						echo json_encode(array('menssagem' => 'Houve algum erro ao grvar no banco','error' => 1));
					}
				}

			} else {
				echo json_encode(array('menssagem' => 'O post nao veio para o metodo','error' => 0));
			}
		}
	}
 ?>