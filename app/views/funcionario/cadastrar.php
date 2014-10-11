<section class="well">
	<form class="form-horizontal cadastrarFuncionario">
		<div class="bg-danger errosCliente ">
			
		</div>
		<div class="form-group">
			<label for="Nome" class="control-label col-xs-3" >Nome:</label>
			<div class="col-xs-5">
				<input type="text" name="Nome" class="form-control input-lg txtNomeFuncionario" placeholder="Digite seu nome."/>
			</div>
		</div>
		<div class="form-group">
			<label for="Endereco" class="control-label col-xs-3">Endereço:</label>
			<div class="col-xs-5">
				<input type="text" name="Endereco" class="form-control txtEnderecoFuncionario" placeholder="Digite seu endereço."/>
			</div>
		</div>
		<div class="form-group">
			<label for="Telefone" class="control-label col-xs-3">Telefone:</label>
			<div class="col-xs-5">
				<input type="text" name="Telefone" class="form-control txtTelefoneFuncionario sonums" placeholder="Digite seu Telefone celular."/>
			</div>
		</div>
		<div class="form-group">
			<label for="Rg" class="control-label col-xs-3">RG:</label>
			<div class="col-xs-5">
				<input type="text" name="Rg" class="form-control txtRgFuncionario sonums" placeholder="Digite seu rg."/>
			</div>
		</div>
		<div class="form-group">
			<label for="Cpf" class="control-label col-xs-3">CPF:</label>
			<div class="col-xs-5">
				<input type="text" name="Cpf" class="form-control txtCpfFuncionario sonums" placeholder="Digite seu CPF."/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-xs-3">Login:</label>
			<div class="col-xs-5 loginFun">
				<input type="text" name="login" class="form-control txtLoginFuncionario" placeholder="Digite seu Login"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-xs-3">Senha:</label>
			<div class="col-xs-5">
				<input type="password" name="senha" class="form-control txtSenhaFuncionario" placeholder="Digite sua senha"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-xs-3">Confirme a senha:</label>
			<div class="col-xs-5 divsenhaNovamente">
				<input type="password" name="senha Novamente" class="form-control txtSenhaNovameneFuncionario" placeholder="Digite sua senha novamente."/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-xs-3">Permissões:</label>
			<div class="col-xs-5 selectPermicaoDiv">
				<select name="permemissao" class="form-control selectPermicao ">
					<option></option>
					<option value="0">Administrador</option>
					<option value="1">Venda</option>
					<option value="2">Recepcionista</option>
					<option value="3">Balção</option>
				</select>
			</div>
		</div>
		<div class="form-group ">
			<input type="submit" class="btn btn-primary btn-cadatra-funcionario" value="Cadastrar"/>
		</div>
	</section>
    <script src="<?php echo JS ?>sistema/cadastroFuncionario.js" type="text/javascript"></script>