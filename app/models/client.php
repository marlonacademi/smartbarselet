<?php 
	namespace models;

	class Client extends \core\model{

		public function __construct(){
			parent::__construct();
		}

		public function getClientbyCpf($cpf){
			return $this->_db->select("SELECT * FROM cliente WHERE cpfCliente=:cpf", array(":cpf" => $cpf));
		}
	}
 ?>