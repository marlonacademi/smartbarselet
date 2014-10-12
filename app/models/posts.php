<?php namespace models;

class posts extends \core\model {
	public function __construct(){
		parent::__construct();
	}
	public function get_posts(){
		return $this->_db->select("SELECT * FROM ".PREFIX."posts");
	}
}