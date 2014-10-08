<?php 
	namespace models;
	class index extends \core\model{
		public function __construct(){
			parent::__construct();
		}
		public function getBestEmployees(){
			$sql = "SELECT * FROM funcionario f LEFT JOIN pedido p ON (f.idFuncionario = p.idFuncionario) ORDER BY nomeFuncionario";
			return $this->_db->select($sql);
		}
	}
 ?>