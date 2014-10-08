     <!------Tela Cadastro de Cliente -------->
    <!------Modificado: 20/09 -------->
     <!------Jessica Leticia -------->

    <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo CSS; ?>apprise-v2.css" type="text/css" media="all" />
    <script src="<?php echo JS; ?>apprise-v2.js"></script>
    <script src="<?php echo JS; ?>cadastroDeCliente.js"></script>
    

    <label class="fonteMenuPag">Novo Cliente</label>
        
    <section class="conteudoMesmo cadastroCliente">
        <form method="POST" action="verifica" class="form-horizontal cadastraCliente" id="cadastraCliente">
            <div class="bg-danger errosCliente ">   
            </div>

            <div class="form-group">
                <label for="cpfCliente" class="control-label col-xs-3">CPF:</label>
                <div class="col-xs-5">
                    <input type="text" name="cpfCliente" class="form-control2 txtCpfCliente sonums cpfCliente" placeholder="Digite seu CPF."/>
                </div>
            </div>

            <div class="form-group">
                <label for="nomeCliente" class="control-label col-xs-3" >Nome:</label>
                <div class="col-xs-5">
                    <input type="text" name="nomeCliente" class="form-control txtNomeCliente" placeholder="Digite seu nome."/>
                </div>
            </div>

            <div class="form-group">
                <label for="endCliente" class="control-label col-xs-3">Endereço:</label>
                <div class="col-xs-5">
                    <input type="text" name="endCliente" class="form-control txtEnderecoCliente" placeholder="Digite seu endereço."/>
                </div>
            </div>

            <div class="form-group">
                <label for="Telefone" class="control-label col-xs-3">Telefone:</label>
                <div class="col-xs-5">
                    <input type="text" name="telefoneCliente" class="form-control txtTelefoneCliente sonums" placeholder="Digite seu Telefone celular."/>
                </div>
            </div>

            <div class="form-group">
                <label for="Rg" class="control-label col-xs-3">RG:</label>
                <div class="col-xs-5">
                    <input type="text" name="rgCliente" class="form-control txtRgCliente sonums" placeholder="Digite seu rg."/>
                </div>
            </div>
            <div class="form-group">
                <label for="DataNiversario" class="control-label col-xs-3">Data aniversario:</label>
                <div class="col-xs-5">
                    <input type="text" name="niverCliente" id="txtDataNiverCliente" class="form-control txtDataNiverCliente" placeholder="click para aparecer calendario"/>
                </div>
            </div>

            <div class="form-group">
                <label for="checkAssociaCliente" class="control-label col-xs-3">Associar cliente a TAG:</label> 
                <div class="col-xs-5">
                    <input type="checkbox" name="checkAssociaCliente" id="checkAssocia" class="checkAssocia"/>
                </div>
            </div>

            <div class="form-group ">
                <input type="submit" class="btn btn-primary btn-cadatra-cliente" value="Cadastrar">
                <input type="reset" id="limpar" name="limpar" class="btn btn-primary btn-cadatra-cliente" value="Limpar" />
            </div>
        </form>
         <div class="load">
        <img src="img/load.gif" />
        </div>

    </section>