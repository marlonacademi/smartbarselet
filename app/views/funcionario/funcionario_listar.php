<section class="well">
	<label class="titles">
		<?php echo $data['title_page'] ?>
	</label>
	<hr>
	<section class="box">
		<div class="span8">
			<table class="table table-bordered">
				<thead>
					<tr>
						<td width="3%"></td>
						<td width="46%">Nome</td>
						<td width="46%">Telefone</td>
						<td width="5%">Ação</td>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($data['funcionarios'] as $funcionario) { ?>
						<tr>
							<td>
								<input type="checkbox" name="rd_id" value="<?php echo $funcionario['id'] ?>">
							</td>
							<td>
								<?php echo $funcionario['nome'] ?>
							</td>
							<td>
								<?php echo $funcionario['telefone'] ?>
							</td>
							<td>
								<a href="editarfuncionario/<?php echo $funcionario['id'] ?>" class="btn_editar "></a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</section>
</section>