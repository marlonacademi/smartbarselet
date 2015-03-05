<?php 
	namespace models;

	class Permission extends \core\model{

		public function __construct(){
			parent::__construct();
		}

		public function getPermission(){
			return $this->_db->select("SELECT * FROM permissions");
		}
	}
?>