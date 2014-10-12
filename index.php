<?php
if(file_exists('vendor/autoload.php')){
	require 'vendor/autoload.php';
} else {
	echo "<h1>Please install via composer.json</h1>";
	echo "<p>Install Composer instructions: <a href='https://getcomposer.org/doc/00-intro.md#globally'>https://getcomposer.org/doc/00-intro.md#globally</a></p>";
	echo "<p>Once composer is installed navigate to the working directory in your terminal/command promt and enter 'composer install'</p>";
	exit;
}

/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 *
 * You can load different configurations depending on your
 * current environment. Setting the environment also influences
 * things like logging and error reporting.
 *
 * This can be set to anything, but default usage is:
 *
 *     development
 *     testing
 *     production
 *
 * NOTE: If you change these, also change the error_reporting() code below
 *
 */
	define('ENVIRONMENT', 'development');
/*
 *---------------------------------------------------------------
 * ERROR REPORTING
 *---------------------------------------------------------------
 *
 * Different environments will require different levels of error reporting.
 * By default development will show errors but testing and production will hide them.
 */

if (defined('ENVIRONMENT')){

	switch (ENVIRONMENT){
		case 'development':
			error_reporting(E_ALL);
		break;
	
		case 'testing':
		case 'production':
			error_reporting(0);
		break;

		default:
			exit('The application environment is not set correctly.');
	}

}

//create alias for Router
use \core\router as Router,
    \helpers\url as Url;

//define routes
Router::any('welcome', '\controllers\welcome@index');
Router::any('', '\controllers\login@index');
Router::any('login', '\controllers\login@validateLogin');
Router::any('index', '\controllers\index@index');
Router::any('flotCustomer', '\controllers\index@flotCustomer');
Router::any('cadastrarfuncionario', '\controllers\funcionario@index');
Router::any('cadastrarCliente', '\controllers\cliente@index');
Router::any('pesquisarCliente', '\controllers\clientePesquisar@index');
Router::any('associarComanda', '\controllers\comandaAssociar@index');
Router::any('carregarComanda', '\controllers\comandaCarregar@index');
Router::any('fecharComanda', '\controllers\comandaFechar@index');
Router::any('editarPedido', '\controllers\pedidoEditar@index');
Router::any('incluirPedido', '\controllers\pedidoIncluir@index');
Router::any('cadastrarProduto', '\controllers\produtoCadastrar@index');
Router::any('editarProduto', '\controllers\produtoEditar@index');
Router::any('listarProduto', '\controllers\produtoListar@index');
//if no route found
Router::error('\core\error@index');

//execute matched routes
Router::dispatch();
