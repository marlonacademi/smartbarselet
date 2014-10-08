 <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo CSS; ?>apprise-v2.css" type="text/css" media="all" />
    <script src="<?php echo JS; ?>apprise-v2.js"></script>
    <script src="<?php echo JS; ?>cadastroDeCliente.js"></script>

 <label class="fonteMenuPag">Editar Funcionário</label>
  <section class="conteudoMesmo">
    <form class="form-horizontal" id="cadastrarFuncionario">
        <div class="bg-danger ">
        </div>

        <div class="form-group ">
           <label for="nomeFunc" class="control-label col-xs-3 ">Nome:</label>
            <div class="col-xs-5">
              <input type="text" name="txtNomeFunc" class="form-control2  sonums" placeholder="Nome e Sobrenome"/>
            </div>
          </div>  

           <div class="form-group ">
           <label for="dataNascimentoFunc" class="control-label col-xs-3">Data de Nascimento:</label>
            <div class="col-xs-5">
              <input type="text" for="txtDataNascimento" class="control-label col-xs-3"/>
            </div>
           </div>

           <div class="form-group ">
            <label for="sexoFunc" class="control-label col-xs-3">Sexo:</label>
             <div class="col-xs-5">
                <label for="sexo" class="control-label col-xs-13">Feminino</label> <input type="radio" name="sexoFunc" value="feminino">
                <label for="sexo" class="control-label col-xs-13">Masculono</label><input type="radio" name="sexoFunc" value="Masculino">
             </div>
           </div>

           <div class="form-group">
                <label for="rgFunc" class="control-label col-xs-3">RG:</label>
                <div class="col-xs-5">
                    <input type="text" name="txtRgFunc" class="form-control txtRgCliente sonums" placeholder="RG."/>
                </div>
           </div>

           <div class="form-group">
                <label for="cpfFunc" class="control-label col-xs-3">CPF:</label>
                <div class="col-xs-5">
                    <input type="text" name="txtCpfFunc" class="form-control2 txtCpfCliente sonums cpfCliente" placeholder="CPF."/>
                </div>
           </div>

           <div class="form-group">
                <label for="enderecoFunc" class="control-label col-xs-3">Endereço:</label>
                <div class="col-xs-5">
                    <input type="text" name="enderecoFunc" class="form-control txtEnderecoCliente" placeholder="Digite seu endereço."/>
                </div>
            </div>

           <div class="form-group">
                <label for="TelefoneFunc" class="control-label col-xs-3">Telefone:</label>
                <div class="col-xs-5">
                    <input type="text" name="telefoneFunc" class="form-control txtTelefoneCliente sonums" placeholder="Telefone"/>
                </div>
           </div>

           <div class="form-group">
                <label for="emailFunc" class="control-label col-xs-3">Email</label>
                <div class="col-xs-5">
                    <input type="email" id="cliente_nome" placeholder="fulano@mail.com" name="email"name class="form-control txtTelefoneCliente sonums" />
                </div>
           </div>

           </div>
            <div class="form-group ">
                <input type="submit" class="btn btn-primary btn-cadatra-cliente" value="Alterar"/>
            </div>

    </section>