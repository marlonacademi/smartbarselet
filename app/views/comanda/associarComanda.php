<link rel="stylesheet" href="<?php echo CSS ?>estilo.css"/>
<section class="well">
	<label class="titles"> Associar Comanda </label>
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
       		 	<button class="btn btn-default btn btn-primary" type="button">Associar</button>
      			</span>
    		</div>
  		</div>
	</div>
	<div class="form-group">
		<div class="col-lg-3">
			<label for="comandaPre" class="control-label col-xs-3">Comanda Pré-paga:</label>
			<input type="radio" name="comandaPre" value="preSim">Sim
			<input type="radio" name="comandaPre" value="preNao">Não
		</div>
		<div class="col-lg-3">
		<input type="submit" class="btn btn-primary button_form btn-pesquisar-cliente" value="Carregar comanda"/>
		</div>
	</div>
</section>