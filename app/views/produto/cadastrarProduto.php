<link rel="stylesheet" href="<?php echo CSS ?>estilo.css"/>
<section class="well">
	<label class="titles"> Cadastrar Produto</label>
	 <hr>
	<form class="form-horizontal" id="cadastrarProduto">
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
