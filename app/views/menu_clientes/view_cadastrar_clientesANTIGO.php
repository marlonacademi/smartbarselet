<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="<?php echo CSS; ?>apprise-v2.css" type="text/css" media="all" />
<script src="<?php echo JS; ?>apprise-v2.js"></script>
<script src="<?php echo JS; ?>cadastroDeCliente.js"></script> 
<label>Cadastro de clientes</label>
    <section class="conteudoMesmo cadastroCliente">
        <form class="form-horizontal cadastraCliente" id="cadastraCliente">
            <div class="bg-danger errosCliente ">
                
            </div>
            <div class="form-group">
                <label for="Cpf" class="control-label col-xs-3">CPF:</label>
                <div class="col-xs-5">
                    <input type="text" name="Cpf" class="form-control txtCpfCliente sonums cpfCliente" placeholder="Digite seu CPF."/>
                </div>
            </div>
            <div class="form-group">
                <label for="Nome" class="control-label col-xs-3" >Nome:</label>
                <div class="col-xs-5">
                    <input type="text" name="Nome" class="form-control txtNomeCliente" placeholder="Digite seu nome."/>
                </div>
            </div>
            <div class="form-group">
                <label for="Endereco" class="control-label col-xs-3">Endereço:</label>
                <div class="col-xs-5">
                    <input type="text" name="Endereco" class="form-control txtEnderecoCliente" placeholder="Digite seu endereço."/>
                </div>
            </div>
            <div class="form-group">
                <label for="Telefone" class="control-label col-xs-3">Telefone:</label>
                <div class="col-xs-5">
                    <input type="text" name="Telefone" class="form-control txtTelefoneCliente sonums" placeholder="Digite seu Telefone celular."/>
                </div>
            </div>
            <div class="form-group">
                <label for="Rg" class="control-label col-xs-3">RG:</label>
                <div class="col-xs-5">
                    <input type="text" name="Rg" class="form-control txtRgCliente sonums" placeholder="Digite seu rg."/>
                </div>
            </div>
            <div class="form-group">
                <label for="DataNiversario" class="control-label col-xs-3">Data aniversario:</label>
                <div class="col-xs-5">
                    <input type="text" name="DataNiversario" id="txtDataNiverCliente" class="form-control txtDataNiverCliente" placeholder="click para aparecer calendario"/>
                </div>
            </div>
            <div class="form-group">
                <label for="checkAssociaCliente" class="control-label col-xs-3">Associar cliente a TAG:</label> 
                <div class="col-xs-5">
                    <input type="checkbox" name="checkAssociaCliente" id="checkAssocia" class="checkAssocia"/>
                </div>
            </div>
            <div class="form-group ">
                <input type="submit" class="btn btn-primary btn-cadatra-cliente" value="Cadastrar"/>
            </div>
        </form>
    </section>