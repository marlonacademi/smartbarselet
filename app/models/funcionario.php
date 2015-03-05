<?php 
	namespace models;

	class Funcionario extends \core\model{

		public function __construct(){
			parent::__construct();
		}
		public function validateLogin($login , $senha){
			return $this->_db->select("SELECT COUNT(*) as total, idFuncionario FROM login WHERE login=:login AND senha=:senha", array(":login" => $login, ":senha" => $senha));
		}
		public function insertFuncionario($data){
			try{
			$funcionario = array(
					'nomeFuncionario' => $data['Nome'],
					'telefoneFuncionario' => $data['Telefone'],
					'endFuncionario' => $data['Endereco'],
					'rgFuncionario'  => $data['Rg'],
					'cpfFuncionario' => $data['Cpf']
				);

				$this->_db->insert('funcionario',$funcionario);

				$login = array(
					'login' => $data['login'],
					'senha' => md5($data['senha']),
					'data_login' => date("Y-m-d H:i:s"),
					'idFuncionario' => $this->_db->lastInsertId('idLogin')
				); 

				$this->_db->insert('login',$login);
				return 1;

			}
			catch(Exception $e){
				return 0;
			}

		}

		public function getFuncionarios(){
			return $this->_db->select("SELECT * FROM funcionario");
		}
		public function getFuncionario($id){
			return $this->_db->select("SELECT * FROM funcionario f LEFT JOIN login l ON (f.idFuncionario = l.idFuncionario) WHERE f.idFuncionario = '" . $id . "'")[0];
		}
	}
 ?>