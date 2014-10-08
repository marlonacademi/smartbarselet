<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>
        AdminFlare - Dashboard
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" href="<?php echo CSS ?>bootstrap.css"/>
    <link rel="stylesheet" href="<?php echo CSS ?>adminflare.min.css"/>
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.css"/>
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css"/>
    <script src="<?php echo JS ?>modernizr-jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo JS ?>bootstrap.min.js" type="text/javascript"></script>

</head>
<body>
    <header class="navbar navbar-fixed-top" id="main-navbar">
        <div class="navbar-inner">
            <div>
                <a class="logo" href="index"><img src="app/templates/default/images/af-logo.png"></a>

                <a class="btn nav-button collapsed" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-reorder"></span>
                </a>

                <div class="nav-collapse collapse">
                    <ul class="nav">
                        <li><a href="index">Home</a></li>
                        <li class="divider-vertical"></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown">Clientes <i class=" icon-caret-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a>Cadastrar cliente</a></li>
                                <li><a>Pesquisar cliente</a></li>
                            </ul>
                        </li>
                        <li class="divider-vertical"></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown">Comandas <i class=" icon-caret-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a>Carregar comanda</a></li>
                                <li><a>Associar comanda</a></li>
                            </ul>
                        </li>
                        <li class="divider-vertical"></li>
                         <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown">Pedidos <i class=" icon-caret-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a>Incluir Pedido</a></li>
                                <li><a>Editar pedido</a></li>
                            </ul>
                        </li>
                        <li class="divider-vertical"></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown">Produtos <i class=" icon-caret-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a>Cadastrar produto</a></li>
                                <li><a>Listar produtos</a></li>
                            </ul>
                        </li>
                        <li class="divider-vertical"></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown">Funcionarios <i class=" icon-caret-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="cadastrarfuncionario">Cadastrar funcionarios</a></li>
                                <li><a>Listar funcionarios</a></li>
                            </ul>
                        </li>
                        <li class="divider-vertical"></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown">Configurações <i class=" icon-caret-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a>Configurações</a></li>
                                <li><a>Cadastrar grupo</a></li>
                                <li><a>Grupos</a></li>
                            </ul>
                        </li>
                        <li class="divider-vertical"></li>
                    </ul>
                    <ul class="nav pull-right">
                        <li class="separator"></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle usermenu" data-toggle="dropdown">
                                <img alt="Avatar" src="app/templates/default/images/avatar.png">
                                <span>&nbsp;&nbsp;Admin</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">Profile</a>
                                </li>
                                <li>
                                    <a href="#">Settings</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="index.html">Sign In</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- / Main navigation bar -->
    
    <!-- Left navigation panel
        ================================================== -->
    <nav id="left-panel">
        <div id="left-panel-content">
            <ul>
                <li class="home">
                    <a href="index"><span class="fa fa-home"></span>Home</a>
                </li>
                <li>
                    <a href="layout.html"><span class="icon-th-large"></span>Layout</a>
                </li>
                <li>
                    <a href="typography.html"><span class="icon-font"></span>Typography</a>
                </li>
                <li>
                    <a href="forms.html"><span class="icon-edit"></span>Forms</a>
                </li>
                <li>
                    <a href="tables.html"><span class="icon-table"></span>Tables</a>
                </li>
                
                <li>
                    <a href="components.html"><span class="icon-inbox"></span>Components</a>
                </li>
                <li>
                    <a href="javascript.html"><span class="icon-cog"></span>JavaScript</a>
                </li>
                <li class="lp-dropdown">
                    <a href="#" class="lp-dropdown-toggle" id="extras-dropdown"><span class="icon-reorder"></span>Extras</a>
                    <ul class="lp-dropdown-menu" data-dropdown-owner="extras-dropdown">
                        <li>
                            <a tabindex="-1" href="extras-icons.html"><span class="icon-coffee"></span>Icons</a>
                        </li>
                        <li>
                            <a tabindex="-1" href="extras-charts.html"><span class="icon-bar-chart"></span>Charts</a>
                        </li>
                        <li>
                            <a tabindex="-1" href="extras-widgets.html"><span class="icon-star"></span>Widgets</a>
                        </li>
                    </ul>
                </li>
                <li class="lp-dropdown">
                    <a href="#" class="lp-dropdown-toggle" id="pages-dropdown"><span class="icon-file-alt"></span>Pages</a>
                    <ul class="lp-dropdown-menu simple" data-dropdown-owner="pages-dropdown">
                        <li>
                            <a tabindex="-1" href="index.html"><i class="icon-signin"></i>&nbsp;&nbsp;Sign In</a>
                        </li>
                        <li>
                            <a tabindex="-1" href="pages-signup.html"><i class="icon-check"></i>&nbsp;&nbsp;Sign Up</a>
                        </li>
                        <li>
                            <a tabindex="-1" href="pages-messages.html"><i class="icon-envelope-alt"></i>&nbsp;&nbsp;Messages</a>
                        </li>
                        <li>
                            <a tabindex="-1" href="pages-stream.html"><i class="icon-leaf"></i>&nbsp;&nbsp;Stream</a>
                        </li>
                        <li>
                            <a tabindex="-1" href="pages-pricing.html"><i class="icon-money"></i>&nbsp;&nbsp;Pricing</a>
                        </li>
                        <li>
                            <a tabindex="-1" href="pages-invoice.html"><i class="icon-pencil"></i>&nbsp;&nbsp;Invoice</a>
                        </li>
                        <li>
                            <a tabindex="-1" href="pages-map.html"><i class="icon-map-marker"></i>&nbsp;&nbsp;Full page map</a>
                        </li>
                        <li>
                            <a tabindex="-1" href="pages-error-404.html"><i class="icon-unlink"></i>&nbsp;&nbsp;Error 404</a>
                        </li>
                        <li>
                            <a tabindex="-1" href="pages-error-500.html"><i class="icon-bug"></i>&nbsp;&nbsp;Error 500</a>
                        </li>
                        <li>
                            <a tabindex="-1" href="pages-blank.html"><i class="icon-bookmark-empty"></i>&nbsp;&nbsp;Blank page</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="icon-caret-down"></div>
        <div class="icon-caret-up"></div>
    </nav>
    <section class="row-fluid">
        
