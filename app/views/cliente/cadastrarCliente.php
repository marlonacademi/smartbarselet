<!-- <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" href="<?php echo CSS ?>bootstrap.css"/>
    <link rel="stylesheet" href="<?php echo CSS ?>adminflare.min.css"/>
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.css"/>
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css"/>
    <script src="<?php echo JS ?>modernizr-jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo JS ?>bootstrap.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="<?php echo CSS ?>estilo.css"/>
	<?php
	session_start();
	session_destroy();
	?>		

<section class="well">

	<label class="titles"> Cadastro de Clientes </label>
	<hr>
	<form action="" method="POST" class="form-horizontal cadastraCliente" id="cadastraCliente">

	<div class="form-group">
			<label for="Cpf" class="control-label col-xs-3">CPF:</label>
			<div class="col-xs-5">
				<input type="text" name="Cpf" class="form-control2 txtCpfCliente sonums cpfCliente" placeholder="Informe o CPF."/>
			</div>
	</div>
	<div class="form-group">
			<label for="Nome" class="control-label col-xs-3" >Nome:</label>
			<div class="col-xs-5">
				<input type="text" name="Nome" class="form-control txtNomeCliente" placeholder="Informe o nome."/>
			</div>
	</div>
	<div class="form-group">
			<label for="Endereco" class="control-label col-xs-3">Endereço:</label>
			<div class="col-xs-5">
				<input type="text" name="Endereco" class="form-control txtEnderecoCliente" placeholder="Informe o endereço."/>
			</div>
	</div>
	<div class="form-group">
			<label for="Telefone" class="control-label col-xs-3">Telefone:</label>
			<div class="col-xs-5">
				<input type="text" name="Telefone" class="form-control txtTelefoneCliente sonums" placeholder="Informe o Telefone celular."/>
			</div>
	</div>

	<div class="form-group">
			<label for="Rg" class="control-label col-xs-3">RG:</label>
			<div class="col-xs-5">
				<input type="text" name="Rg" class="form-control txtRgCliente sonums" placeholder="Informe o RG."/>
			</div>
	</div>
		
	<div class="form-group">
			<label for="DataNiversario" class="control-label col-xs-3">Data aniversario:</label>
		<div class="col-xs-5">
				<input data-format="dd/MM/yyyy" type="text" name="DataNiver" id="txtDataNiverCliente" class="form-control txtDataNiverCliente" placeholder="clique para aparecer calendario"/>
		</div>
	</div>
			
	<div class="form-group">
		<div class="col-sm-2">
			<label for="checkAssociaCliente" class="control-label col-xs-3">Sexo:</label>
		</div>
		<div class="col-sm-2">
			<label for="checkAssociaCliente" class="control-label col-xs-3">F:</label>
			<input type="radio" name="sexoCliente" id="sexoClienteFem"/>
		</div>
		<div class="col-sm-2">	
			<label for="checkAssociaCliente" class="control-label col-xs-3">M:</label>
			<input type="radio" name="sexoCliente" id="sexoClienteMac"/>
		</div>
	</div>
			
	<div class="form-group">
			<label for="checkAssociaCliente" class="control-label col-xs-3">Associar cliente a TAG:</label>
		<div class="col-xs-5">
			<input type="checkbox" name="checkAssociaCliente" id="checkAssocia" class="checkAssocia"/>
		</div>
	</div>

	<div class="form-group ">
			<input type="submit"  id="acao" name="acao" class="btn btn-primary btn-cadatra-cliente" value="Cadastrar"/>
	</div>
	</form>
</section>
<?php
/*
 * caso haja o preencimento dos dados e a submissão do formulário, o
 * controlador, será chamado para interpretar a ação
 */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require("../controller/cliente.php");
}
?>