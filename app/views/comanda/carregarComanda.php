<link rel="stylesheet" href="<?php echo CSS ?>estilo.css"/>


<section class="well">
     <label class="titles">Carregar Comandas</label>
    <hr>
	<form class="form-horizontal" id="cadastrarProduto">
	<div class="form-group">
		<div class="col-lg-3">
			<label for="cpfCliente">CPF:</label>
    		<div class="input-group">
      			<input type="text" class="form-control">
      			<span class="input-group-btn">
       		 	<button class="btn btn-default btn btn-primary" type="button">Pesquisar</button>
      			</span>
    		</div>
  		</div>
  		<div class="col-lg-3">
  			<label for="numeroComanda">Comanda:</label>
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
		<div class="form-group">
			<div class="input-group col-sm-3">
				<label for="carregarComanda" >Valor Recarga:</label>
			</div>
			<div class="input-group col-sm-3">
				<span class="input-group-addon">R$</span>
      			<input type="text" class="form-control">
      			<span class="input-group-btn">
       		 	<button class="btn btn-default btn btn-primary" type="button">Carregar</button>
      			</span>
    		</div>
		</div>
</section>