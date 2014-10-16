<link rel="stylesheet" href="<?php echo CSS ?>estilo.css"/>

<section class="well">
	<label class="titles"> Editar Pedido</label>
			<hr>
	<form class="form-horizontal associarComanda" id="carregarComandas">
		<div class="form-group">
			<div class="col-sm-3">
				<label for="buscaCliente">Forma de Pesquisa:</label>
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
		<hr>
		Resultado do consumo do cliente com a opção de excluir 
	</form>

</section>
