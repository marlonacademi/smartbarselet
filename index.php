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
Router::any('', '\controllers\login@index');
Router::any('login', '\controllers\login@validateLogin');
Router::any('index', '\controllers\index@index');
Router::any('lele', '\controllers\lele@index');
Router::any('teste', '\controllers\teste@index');

//Add por Leticia:
//MENU CLIENTES
Router::any('menu_clientes', '\controllers\menu_clientes@index');
	Router::any('clientes_cadastrar', '\controllers\clientesCadastrar@index');
	Router::any('clientes_pesquisar', '\controllers\clientesPesquisar@index');
//MENU COMANDAS
Router::any('menu_comandas', '\controllers\menu_comandas@index');
//MENU PEDIDOS
Router::any('menu_pedidos', '\controllers\menu_pedidos@index');
//MENU PRODUTOS
Router::any('menu_produtos', '\controllers\menu_produtos@index');
//MENU FUNCIONARIOS
Router::any('menu_funcionarios', '\controllers\menu_funcionarios@index');
//MENU SISTEMA
Router::any('menu_sistema', '\controllers\menu_sistema@index');

	
//if no route found
Router::error('\core\error@index');

//execute matched routes
Router::dispatch();
