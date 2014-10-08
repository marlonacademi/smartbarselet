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
        <div id="wrapper" class="inicia">
    <!-- TOPO -->
    <header>
     <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
       <p class="inf"> System version: 1.3 </p>
    <div class="container">
        <div class='logo'>
            <a href="/index"><img src="<?php echo IMG; ?>MinilogoSB.png"/></a>
        </div>
    </div>
    <!-- /.MENU DROPOWN -->
      
    <ul class="menu">
            <li class="fonteMenuSup"><a href="/index">Home</a></li>
            <li class="fonteMenuSup"><a href="/index">Clientes</a>
                <ul class="sub-item">
                        <li class="fonteMenuSup"><a href="/cadastrar_clientes">Cadastrar</a></li>
                        <li class="fonteMenuSup"><a href="/pesquisar_clientes">Pesquisar</a></li>
                </ul>
            </li>
            <li class="fonteMenuSup"><a href="/index">Comandas</a>
                <ul class="sub-item">
                        <li class="fonteMenuSup"><a href="/associar_comandas">Associar Comanda</a></li>
                        <li class="fonteMenuSup"><a href="/carregar_comandas">Carregar Comanda pré-paga</a></li>                   
                </ul>
            </li>
            <li class="fonteMenuSup"><a href="/index">Pedido</a>
                <ul>
                        <li class="fonteMenuSup"><a href="/incluir_pedidos">Incluir Pedido</a></li>
                        <li class="fonteMenuSup"><a href="/editar_pedidos">Editar Pedido</a></li>                  
                </ul>
            </li>
            <li class="fonteMenuSup"><a href="/index">Produto</a>
                <ul>
                        <li class="fonteMenuSup"><a href="/cadastrar_produtos">Cadastrar Produto</a></li>
                        <li class="fonteMenuSup"><a href="/editar_produtos">Editar Produto</a></li>
                        <li class="fonteMenuSup"><a href="/listar_produtos">Listar Produto</a></li>                 
                </ul>
            </li>
            <li class="fonteMenuSup"><a href="/index">Funcionário</a>
                <ul>
                        <li><a href="/cadastrar_funcionarios">Cadastrar Funcionário</a></li>
                        <li><a href="/editar_funcionarios">Editar Funcionário</a></li>                    
                </ul>
            </li>
            <li class="fonteMenuSup"><a href="/index">Parâmetros Gerais</a>
                <ul>
                        <li class="fonteMenuSup"><a href="/parametrizacao">Parametrização</a></li>                   
                </ul>
            </li>
            <li class="fonteMenuSup"><a href="/index">Grupos</a>
                <ul>
                        <li class="fonteMenuSup"><a href="/cadastrar_grupo">Cadastrar Grupo</a></li>
                        <li class="fonteMenuSup"><a href="/permissoes-grupo">Permissões de Grupo</a></li>                    
                </ul>
            </li>
        <li class="fonteMenuSup"><a href="/index">Fotos</a></li>
        <li><a href="/index"><img src="<?php echo IMG; ?>sair.png"/></a></li>  
               
    </ul>


    <!-- /.MENU DROPDOWN -->
    </nav>
    </header>
    <!-- TOPO FIM -->

    <!-- /.MENU LATERAL -->
    <div class="btn-group-vertical navbar-fixed-left">
        <h3 class="fonteMenu">Principais Operações</h3>

        <div class="btn-group">
            <button type="button" class="btn btn-default" href="/cadastrar_funcionarios">Cadastrar Clientes</button>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-default">Associar Comanda</button>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-default">Consultar Saldo Comanda</button>
        </div>
         <div class="btn-group">
            <button type="button" class="btn btn-default">Carregar Comanda</button>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-default">Fazer Pedido</button>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-default">Fechamento de Comanda</button>
        </div>
    </div>
    <!-- /.MENU LATERAL FIM -->
    
            <div class="conteudo"> 
