<?php 
	namespace controllers;
	use core\view,
	helpers\session as Session;

	class clientesCadastrar extends \core\controller {

		public function __construct(){
			parent::__construct();
			$this->_client = new \models\client();
		}

		public function index(){
			View::rendertemplate('header');
			View::render('menu_clientes/view_cadastrar_clientes');
			View::rendertemplate('footer');
			
		}
		public function cpf(){
			$cpf = $_POST['cpf'];
			echo "alguma coisa";
			$client = $this->_client->getClientbyCpf($cpf);
			if (count($client) > 0){
				echo json_encode($client);
			}else{
				echo null;
			}
		}
	}
 ?>