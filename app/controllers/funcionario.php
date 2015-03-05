<?php 
	namespace controllers;
	use core\view,
	helpers\session as Session,
	helpers\url as Url;

	class funcionario extends \core\controller {
		public function __construct(){
			parent::__construct();	
			$this->_funcionario = new \models\funcionario();
			$this->_permission  = new \models\permission();
		}
		public function index(){
			View::rendertemplate('header',$data);
			View::render('funcionario/cadastrar',$data);
			View::rendertemplate('footer',$data);
		}
		public function validateCadastro (){
			if ($_POST){

				$error = 0;

				foreach ($_POST as $key => $post) {
					
					if ($post == ""){
						$error++;
					}
				}

				if ($error == 0 ){
					$result = $this->_funcionario->insertFuncionario($_POST);
					if ($result){
						echo json_encode(array('menssagem' => 'Funcionario cadastrado com sucesso', 'error' => 0));
					} else {
						echo json_encode(array('menssagem' => 'Houve algum erro ao grvar no banco','error' => 1));
					}
				}

			} else {
				echo json_encode(array('menssagem' => 'O post nao veio para o metodo','error' => 0));
			}
		}


		public function listFuncionarios(){

			$data['title_page'] = 'Listar funcionarios';

			$data['title']      = 'Lista de funcionarios';

			$data['style'][]    = 'estilo.css';

			$funcionarios = $this->_funcionario->getFuncionarios();
			foreach ($funcionarios as $funcionario) {

				$data['funcionarios'][] = array(
						'nome'     => $funcionario->nomeFuncionario,
						'telefone' => $funcionario->telefoneFuncionario,
						'id' 	   => $funcionario->idFuncionario
					);

			}
			View::rendertemplate('header',$data);

			View::render('funcionario/funcionario_listar',$data);

			View::rendertemplate('footer',$data);
		}

		public function update($id){
			if (!is_numeric($id))
				Url::redirect('/listarfuncionarios');

			$funcionario 		= $this->_funcionario->getFuncionario($id);

			$permissions 		= $this->_permission->getPermission(); 

			$data['title_page'] = 'Editar funcionarios';

			$data['title']      = 'Lista de funcionarios';

			$data['style'][]    = 'estilo.css';

			$data['scripts'][]  = 'sistema/editaFuncionario.js';

			foreach ($permissions as $permission) {
				$data['permissions'][] = array(
							'nome' => $permission->nomePermission,
							'id'   => $permission->idPermission
					);
			}
			$data['funcionario'] = array(
					'id'   	   	=> $funcionario->idFuncionario,
					'nome' 	   	=> $funcionario->nomeFuncionario,
					'telefone' 	=> $funcionario->telefoneFuncionario,
					'endereco'	=> $funcionario->endFuncionario,
					'rg'	   	=> $funcionario->rgFuncionario,
					'cpf'	   	=> $funcionario->cpfFuncionario,
					'id'	   	=> $funcionario->idLogin,
					'login'    	=> $funcionario->login,
					'permissao'	=> $funcionario->permissao
				);
			View::rendertemplate('header',$data);
			View::render('funcionario/funcionario_editar',$data);
			View::rendertemplate('footer',$data);
		}
		
	}
 ?>