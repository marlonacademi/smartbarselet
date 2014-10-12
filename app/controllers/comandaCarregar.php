<?php 
	namespace controllers;
	use core\view,
	helpers\session as Session;

	class comandaCarregar extends \core\controller {
		public function __construct(){
			parent::__construct();	
		}
		public function index(){
			View::rendertemplate('header',$data);
			View::render('comanda/carregarComanda',$data);
			View::rendertemplate('footer',$data);
		}

	}
 ?>