<link rel="stylesheet" href="<?php echo CSS ?>estilo.css"/>
<section class="well">
	<label class="titles"> Editar Produto</label>
	 <hr>
	<form class="form-horizontal" id="cadastrarProduto">
	
	<div class="form-group">
		<div class="col-sm-3">
			<label for="tipoFiltro">Tipo de Filtro:</label>
				<select name="filtrarProduto" class="form-control">
					<option value="0">Nome</option>
					<option value="1">Código</option>
					<option value="2">Tipo</option>
					<option value="3">Preço</option>
				</select>
		</div>
  		<div class="col-lg-3">
  			<label for="dadosFiltro">Dados do Filtro:</label>
    		<div class="input-group">
      			<input type="text" class="form-control">
      			<span class="input-group-btn">
       		 	<button class="btn btn-default btn btn-primary" type="button">Filtrar</button>
      			</span>
    		</div>
  		</div>
	</div>
	<hr>
		<div class="form-group">
			<div class="col-sm-3">
				<label for="nomeProduto">Produto:</label>
				<input type="text" name="nomeProduto" class="form-control" placeholder="Informe o produto."/>
			</div>
			<div class="col-sm-3">
				<label for="precoProduto" >Preço:</label>
				<div class="input-gropu">
					<input type="text" name="precoProduto" class="form-control" placeholder="Informe o preço do produto"/>				
				</div>
			</div>
		</div>
			<div class="form-group">
			<div class="col-sm-3">
				<label for="codProduto" >Código:</label>
				<div class="input-gropu">
					<span>258569</span>				
				</div>
			</div>
			<div class="col-sm-3">
				<label for="marcaProduto" >Marca:</label>
				<div class="input-gropu">
					<input type="text" name="marcaProduto" class="form-control" placeholder="Informe a marca do Produto"/>				
				</div>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-3">
				<label for="Cpf">Tipo Produto:</label>
				<select name="permemissao" class="form-control">
					<option></option>
					<option value="0">Dose</option>
					<option value="1">Porção</option>
					<option value="2">Garrafa</option>
					<option value="3">Lata</option>
				</select>
			</div>
			<div class="col-sm-3">
				<label for="codComanda" >Observação:</label>
				<div class="input-gropu">
					<textarea name="obsProduto" class="form-control" maxlength = "500" placeholder="Informações adicionais"></textarea>	
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-3">
				<input type="submit" class="btn btn-primary" value="Salvar" name="salvarProduto"/>
			</div>
		</div>
	</form>
</section>
