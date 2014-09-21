<?php 
	namespace models;

	class Login extends \core\model{

		public function __construct(){
			parent::__construct();
		}

		public function validateLogin($login , $senha){
			return $this->_db->select("SELECT COUNT(*) as total, idFuncionario FROM login WHERE login=:login AND senha=:senha", array(":login" => $login, ":senha" => $senha));
		}
	}
 ?>