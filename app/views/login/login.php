<!DOCTYPE html>
<!--
Autor: Marlon Oliveira Barbosa
Descrição: Sistema de gerenceimento de casa noturna com integramento NFC. Feito para trabalho de graduação da instituição fatec carapicuiba
-->
<html>
    <head>
        <meta charset="ISO-8859-1">
        <title><?php echo $data['title'].' - '.SITETITLE; //SITETITLE defined in index.php?></title>
        <script src="<?php echo JS; ?>jquery-1.11.0.min.js"></script>
        <script src="<?php echo JS; ?>jquery-ui.js"></script>
        <script src="<?php echo JS; ?>apprise-v2.js" type="text/javascript"></script>
        <script src="<?php echo JS; ?>js-login.js"></script>
        <link href="<?php echo CSS; ?>bootstrap.css" rel="stylesheet"/>
        <link href="<?php echo CSS; ?>bootstrap-theme.css" rel="stylesheet"/>
        <link href="<?php echo CSS; ?>css.css" rel="stylesheet"/>
        <link rel="stylesheet" href="<?php echo CSS; ?>apprise-v2.css" type="text/css" media="all" />
    </head>
    <body>
        <div id="wrapper">
            <div id="login" class="img-rounded box-shadow">
                <div id="retorno" class="img-rounded">
                    
                </div>
                <form name="form" class="form">
                    <div class="form-group">
                        <label for="Login">Login</label>
                        <input type="email" name="login" class="form-control" id="Login" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" class="form-control" id="senha" placeholder="Password">
                    </div>
                    <button type="button" class="btn btn-default logar">Logar</button>
					
                </form>
            </div>
        </div>
    </body>
</html>
