<?php 
	namespace controllers;
	use core\view,
	helpers\session as Session;

	class produtoListar extends \core\controller {
		public function __construct(){
			parent::__construct();	
		}
		public function index(){
			View::rendertemplate('header',$data);
			View::render('produto/listarProduto',$data);
			View::rendertemplate('footer',$data);
		}

	}
 ?>