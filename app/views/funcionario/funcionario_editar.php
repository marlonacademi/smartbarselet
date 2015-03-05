<link rel="stylesheet" href="<?php echo CSS ?>estilo.css"/>
<section class="well editar-funcionario">
	<label class="titles"><?php echo $data['title_page'] ?></label>
	 <hr>
	<form class="form-horizontal cadastrarFuncionario">

		<div class="bg-danger errosCliente ">
			
		</div>
		<div class="form-group">
			<label for="Nome" class="control-label col-xs-3" >Nome:</label>
			<div class="col-xs-5">
				<input type="text" name="Nome" class="form-control input-lg txtNomeFuncionario" value="<?php echo $data['funcionario']['nome'] ?>" placeholder="Digite seu nome."/>
			</div>
		</div>
		<div class="form-group">
			<label for="Endereco" class="control-label col-xs-3">Endereço:</label>
			<div class="col-xs-5">
				<input type="text" name="Endereco" class="form-control txtEnderecoFuncionario" value="<?php echo $data['funcionario']['endereco'] ?>" placeholder="Digite seu endereço."/>
			</div>
		</div>
		<div class="form-group">
			<label for="Telefone" class="control-label col-xs-3">Telefone:</label>
			<div class="col-xs-5">
				<input type="text" name="Telefone" class="form-control txtTelefoneFuncionario sonums" value="<?php echo $data['funcionario']['telefone'] ?>" placeholder="Digite seu Telefone celular."/>
			</div>
		</div>
		<div class="form-group">
			<label for="Rg" class="control-label col-xs-3">RG:</label>
			<div class="col-xs-5">
				<input type="text" name="Rg" class="form-control txtRgFuncionario sonums" value="<?php echo $data['funcionario']['telefone'] ?>" placeholder="Digite seu rg."/>
			</div>
		</div>
		<div class="form-group">
			<label for="Cpf" class="control-label col-xs-3">CPF:</label>
			<div class="col-xs-5">
				<input type="text" name="Cpf" class="form-control txtCpfFuncionario sonums" value="<?php echo $data['funcionario']['cpf'] ?>" placeholder="Digite seu CPF."/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-xs-3">Login:</label>
			<div class="col-xs-5 loginFun">
				<input type="text" name="login" class="form-control txtLoginFuncionario" value="<?php echo $data['funcionario']['login'] ?>" placeholder="Digite seu Login"/>
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
		<?php print_r($permission['id']); ?>
			<label class="control-label col-xs-3">Permissões:</label>
			<div class="col-xs-5 selectPermicaoDiv">
				<select name="permemissao" class="form-control selectPermicao ">
					<option></option>
					<?php foreach ($data['permissions'] as $permission) { ?>
						<option value="<?php echo $permission['id'] ?>" <?php echo $data['funcionario']['permissao'] == $permission['id'] ? 'selected' : '' ?> > 
							<?php echo $permission['nome'] ?> 
						</option>
					<?php } ?>
				</select>
			</div>
		</div>
		<div class="form-group ">
			<input type="submit" class="btn btn-primary btn-cadatra-funcionario" value="Cadastrar"/>
		</div>
	</section>
    <script src="<?php echo JS ?>sistema/cadastroFuncionario.js" type="text/javascript"></script>
    <script src="<?php echo JS ?>sistema/apprise-v2.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?php echo CSS ?>apprise-v2.css"/>
    

