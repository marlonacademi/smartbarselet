<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>
        <?php echo SITETITLE.' - '.$data['title'] ;?>
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="<?php echo CSS; ?>admimflare.css"/>
    <link rel="stylesheet" href="<?php echo CSS; ?>bootstrap.css"/>
    <link rel="stylesheet" href="<?php echo CSS; ?>pages.css"/>
    <link rel="stylesheet" href="<?php echo CSS; ?>apprise-v2.css"/>
    <script src="bower_components/jquery/jquery.js"></script>
    <script src="<?php echo JS; ?>sistema/js-login.js"></script>
    <script src="<?php echo JS; ?>sistema/apprise-v2.js"></script>
</head>
<body class="signin-page">
    
    <!-- Page content
        ================================================== -->
    <section id="signin-container" class="container">
        <a title="smartBraselet" class="header">
            <img src="app/templates/default/images/af-logo-signin.png" alt="Sign in to Admin SmartBraselet">
            <span>
                Sign in to<br>
                <strong>SmartBraselet</strong>
            </span>
        </a>
        <form class="form">
            <fieldset>
                <div class="fields">
                    <input type="text" name="login" placeholder="Login" id="Login" >

                    <input type="password" name="senha" placeholder="Password" >
                </div>
                <a href="#" title="" tabindex="3" class="forgot-password">Forgot?</a>
                <button type="button" class="btn btn-primary btn-block logar" tabindex="4">Sign In</button>
            </fieldset>
        </form>
    </section>

</body>
</html>

<!-- <div id="wrapper">
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
        </div> -->
