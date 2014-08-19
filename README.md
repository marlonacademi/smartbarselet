
##instalação sistema

para instalação do sistema deve se rodar o sql na raiz futuroau_smartbraselete.sql
crie um banco  e rode o sql 

2) criar v-host no apache;
 vá na pasta do apache abra o httpd.conf no final do arquivo coloque.
<pre>
<VirtualHost smartbraselet.com.br:85>
    ServerAdmin marlon.academi@gmail.com
    DocumentRoot "E:/smartbraselet/"
    ServerName smartbraselet.com.br
    ErrorLog "E:/smartbraselet/error_log"
    CustomLog "E:/smartbraselet/access_log" combined
    <directory "E:/smartbraselet/">
        Options Indexes FollowSymLinks
        AllowOverride All
        Order allow,deny
        Allow from all
        Require all granted
    </directory>
</VirtualHost>
</pre>
linhas:
1° linha nome do virtual host caso for diferente troque tambem no config do app.
3° Lugar aonde vc baixou o sistema 
5° e 6° lugar aonde o apache vai criar um arquivo de log do sistema.
7° linha repita o mesmo lugar aonde esta o sistema

depois vá em  C:\WINDOWS\system32\drivers\etc\ e abara o host com blocos de notas em modo administrador caso contrario vcs não consiguiram alterar o arquivo.

na ultima linha acrescente 

127.0.0.1     smartbraselet.com.br

caso seu host seja outro nome troque pelo oque vc colocou 

reinicie o apache e ser der erro faça novamente os passos caso contrario de pulos de alegria rsrs.

Agora va dentro do sistema em app/core/config.php 

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
		define('DIR','http://smartbraselet.com.br:85');
		define('JS', DIR.'/app/templates/default/js/');
		define('CSS', DIR.'/app/templates/default/css/');
		define('FONT', DIR.'/app/templates/default/fonts/');


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


altere as variaveis do banco na variavel dir coloque o nome do host que vc colocou no arquivo de configuraçõ do apache no DIR 
E acho que é só.

Qualquer coisa estou a disposição.

Se vcs chegaram aqui eu presumo que vc tenha o git bash instalado caso ao contrario instalem.

Então abram o git bash terminal e escrevam git pull origin Marlon

isso ira atualizar seu sistema .

Caso vcs queiram fazer alguma alteração estudem um pouco o git e  criem uma brach nova no caso quando vcs baixam o o sistema ela vem com a brench Marlon para criar uma nova usa-se git checkout -b nome da branch então existe uma copia da branch na sua maquina apatir dai vcs podem fazer qualquer coisa no sistema. Depois de terem feito as mudanças e terem testadas todas me falem e me mandem o nome da branch e eu faço o merge da branch.