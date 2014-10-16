<link rel="stylesheet" href="<?php echo CSS ?>estilo.css"/>

<section class="well">
	<label class="titles"> Fechar Comanda</label>
	 <hr>
	<form class="form-horizontal associarComanda" id="carregarComandas">
		<div class="form-group">
			<div class="col-sm-3">
				<label for="pesquisaCliente">Forma de Pesquisa:</label>
				<select name="pesquisaCliente" class="form-control">
					<option value="0">CPF</option>
					<option value="1">Comanda</option>
				</select>
			</div>
			<div class="col-lg-3">
  				<label for="cpfCliente">Dado:</label>
    			<div class="input-group">
	      			<input type="text" class="form-control">
	      			<span class="input-group-btn">
	       		 	<button class="btn btn-default btn btn-primary" type="button">Pesquisar</button>
      				</span>
    			</div>
  			</div>
			<div class="col-sm-3">
				<label>Nº Comanda:</label>
				<br>
				<label>Nome Consumidor: </label>
				<br>
				<label>Saldo pré-pago:</label>
				<br>
				<label>Saldo disponível: </label>
			</div>
		</div>
		<div class="form-group">
		<div class="col-sm-5">
				<label>Consumo:</label>
				<span>Retornar tabela com os dados do consumo</span>
			</div>
		</div>
		<hr>
		
		
		<div class="form-group">
			<div class="col-sm-3">
				<label for="Cpf">Forma de Pagamento:</label>
				<select name="permemissao" class="form-control">
					<option></option>
					<option value="0">Dinheiro</option>
					<option value="1">Débito</option>
					<option value="2">Crédito</option>
				</select>
			</div>
			<div class="col-sm-3">
				<label for="codComanda" >Valor R$:</label>
				<div class="input-gropu">

					<input type="text" name="valorRecarga" class="form-control" placeholder="Informe o valor"/>			
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-3">
				<input type="submit" class="btn btn-primary" value="Salvar" name="salvarRecarga"/>
			</div>
		</div>
	</form>
</section>
