<?php

include "conecta_mysql.inc";

$nomeCliente			= $_POST["nomeCliente"];
$cpfCliente				= $_POST["cpfCliente"];
$endCliente				= $_POST["endCliente"];
$telefoneCliente		= $_POST["telefoneCliente"];
$rgCliente				= $_POST["rgCliente"];
$niverCliente			= $_POST["niverCliente"];

$sql = "INSERT INTO CLIENTE VALUES";
$sql .= "('$nomeCliente', '$cpfCliente', '$endCliente', '$telefoneCliente', '$rgCliente', '$niverCliente')";
$resultado = mysql_query ($sql);
echo "usuario inserido com sucesso!";

mysql_close($conexao);
?>