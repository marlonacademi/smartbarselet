<link rel="stylesheet" href="<?php echo CSS ?>estilo.css"/>

<section class="well">
	<label class="titles"> Fechar Comanda</label>
	 <hr>
	<form class="form-horizontal associarComanda" id="carregarComandas">
		<div class="form-group">
			<div class="col-sm-3">
				<label for="Cpf">CPF:</label>
				<input type="text" name="Cpf" class="form-control" placeholder="Digite o CPF."/>
			</div>
			<div class="col-sm-3">
				<label for="codComanda" >Comanda:</label>
				<div class="input-gropu">
					<input type="text" name="codComanda" class="form-control" placeholder="Número da Comanda"/>				
				</div>
			</div>
			<div class="col-sm-3">
				<input type="submit" class="btn btn-primary" style="margin-top:25px" value="Pesquisar"/>
			</div>
		</div>
		<div class="form-group form-inline">
			<div class="col-sm-3">
				<label>Nome:</label>
				<span>Leticia Tomoda</span>
			</div>
			<div class="col-sm-3">
				<label>CPF:</label>
				<span>321.145.444-85</span>
			</div>
		</div>
		<div class="form-group">
		<div class="col-sm-3">
				<label>Consumo:</label>
				<span>1 Caipirinha R$ 15,00</span>
			</div>
		</div>
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
