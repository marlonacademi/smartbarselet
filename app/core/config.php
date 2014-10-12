<?php namespace core;
/*
 * config - setup system wide settings
 *
 * @author David Carr - dave@daveismyname.com - http://www.daveismyname.com
 * @version 2.1
 * @date June 27, 2014
 */
class Config {

	public function __construct(){

		//turn on output buffering
		ob_start();

		//site address
		define('DIR','http://smartbraselet.com.br');
		define('JS', DIR.'/app/templates/default/js/');
		define('CSS', DIR.'/app/templates/default/css/');
		define('FONT', DIR.'/app/templates/default/fonts/');
		define('IMG', DIR.'/app/templates/default/img/');

		//database details ONLY NEEDED IF USING A DATABASE
		define('DB_TYPE','mysql');
		define('DB_HOST','localhost');
		define('DB_NAME','futuroau_smartbraselete');
		define('DB_USER','root');
		define('DB_PASS','');
		define('PREFIX','');
		//set prefix for sessions
		define('SESSION_PREFIX','');

		//optionall create a constant for the name of the site
		define('SITETITLE','smart bracelet');

		//turn on custom error handling
		set_exception_handler('core\logger::exception_handler');
		set_error_handler('core\logger::error_handler');

		//set timezone
		date_default_timezone_set('America/Sao_Paulo');

		//start sessions
		\helpers\session::init();

		//set the default template
		\helpers\session::set('template','default');
		
	}

}
