<html>
<body>

<?php
$nomeCliente		= $POST["nomeCliente"];
$cpfCliente			= $POST["cpfCliente"];
$endCliente			= $POST["endCliente	"];
$telefoneCliente	= $POST["telefoneCliente"];
$rgCliente			= $POST["rgCliente	"];
$niverCliente		= $POST["niverCliente"];
$erro				= 0;

if(empty($nomeCliente) oR strstr ($nomeCliente, ' ')==FALSE)
	{echo "Ops! Você esqueceu de informar o nome!"; $erro=1;}
if(empty($cpfCliente) oR strstr ($cpfCliente, ' ')==FALSE)
	{echo "Ops! Você esqueceu de informar o CPF!"; $erro=1;}
if ($erro==0) {
	echo "Usuário inserido com sucesso!"
}

?>
</body>
</html>