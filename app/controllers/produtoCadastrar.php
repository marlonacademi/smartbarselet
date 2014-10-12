<?php 
	namespace controllers;
	use core\view,
	helpers\session as Session;

	class produtoCadastrar extends \core\controller {
		public function __construct(){
			parent::__construct();	
		}
		public function index(){
			View::rendertemplate('header',$data);
			View::render('produto/cadastrarProduto',$data);
			View::rendertemplate('footer',$data);
		}

	}
 ?>