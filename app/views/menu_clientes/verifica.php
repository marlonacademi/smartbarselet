<!DOCTYPE html>
<html lang="en">
	<body>
		<label class="fonteMenuPag">Incluido com Sucesso! PARABÉNS"</label>
        
        <section class="conteudoMesmo ">

        	Clique aqui para incluir um novo cliente: <a href="cadastrar_clientes"> cadastrar novo cliente agora </a>
        </section>
		
		<?php

		
		$nomeCliente			= $_POST["nomeCliente"];
		$cpfCliente				= $_POST["cpfCliente"];
		$endCliente				= $_POST["endCliente"];
		$telefoneCliente		= $_POST["telefoneCliente"];
		$rgCliente				= $_POST["rgCliente"];
		$niverCliente			= $_POST["niverCliente"];
		$erro					= 0;

		if ($erro==0)
		{
		echo "Cliente sendo cadastrado!";
		include "insere.inc";
		}


		?>
	</body>
</html>