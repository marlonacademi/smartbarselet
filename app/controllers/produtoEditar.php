<?php 
	namespace controllers;
	use core\view,
	helpers\session as Session;

	class produtoEditar extends \core\controller {
		public function __construct(){
			parent::__construct();	
		}
		public function index(){
			View::rendertemplate('header',$data);
			View::render('produto/editarProduto',$data);
			View::rendertemplate('footer',$data);
		}

	}
 ?>