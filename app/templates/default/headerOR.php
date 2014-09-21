<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $data['title'].' - '.SITETITLE; //SITETITLE defined in index.php?></title>
		<script src="<?php echo JS; ?>jquery-1.11.0.min.js"></script>
        <script src="<?php echo JS; ?>jquery-ui.js"></script>
        <script src="<?php echo JS; ?>bootstrap.js"></script>
        <script src="<?php echo JS; ?>inicio-sistema.js"></script> 
        <?php if ($data['script']){ 
        			foreach ($data['script'] as  $value) {
        				echo '<script src="'.JS.$value.'"></script> ';
        			}
        		}
		?>
        <link href="<?php echo CSS; ?>bootstrap.css" rel="stylesheet"/>
        <link href="<?php echo CSS; ?>bootstrap-theme.css" rel="stylesheet"/>
        <link href='http://fonts.googleapis.com/css?family=Duru+Sans' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="<?php echo CSS; ?>css.css"/>
        <?php 
        		if ($data['style']){
        			foreach ($data['style'] as $value) {
        				echo '<link href="'.CSS.$value.'" rel="stylesheet"/>';
        			}
        		}
         ?>
</head>
<body>
<div class="tagid"><?php echo $data['idFuncionario']?></div>
        <div id="wrapper" class="inicia">
            <header>
                <div class="logo">
                    <a href="/index"><img src="<?php echo IMG; ?>MinilogoSB.png"/></a>
                </div>
                <div class="logoff">
                    Divi logof
                </div>
                <nav>
                    <ul class="list-unstyled">
                        
							<li><div><a href="/index"><img src="<?php echo IMG; ?>icone_home.png"/></a></div></li>
							<li><div><a href="/index"><img src="<?php echo IMG; ?>icone_conf.png"/><a></div></li>
							<li><div><a href="/index"><img src="<?php echo IMG; ?>icone_info.png"/></a></div></li>
							<li><div><a href="/"><img src="<?php echo IMG; ?>icone_sair.png"/></a></div></li>
							
						
                            <!--<li class="last"><div></div></li> 
							<li><div><a href="http://localhost/projects/TG/Desenvolvimento/View/my_account">My account</a></div></li> -->

                    </ul>
                </nav>
            </header>
            <div class="conteudo"> 

