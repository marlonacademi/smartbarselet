<?php 
	namespace controllers;
	use core\view,
	helpers\session as Session;

	class cadastrar_clientes extends \core\controller {
		
		public function index(){
		View::rendertemplate('header',$data);
			View::render('cadastrar_clientes/view_cadastrar_clientes',$data);
			View::rendertemplate('footer',$data);
		}
		public function __construct(){
			parent::__construct();
			$this->_client = new \models\client();
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