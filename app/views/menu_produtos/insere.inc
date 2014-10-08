<?php
include "conect_mysql.inc";

$nomeCliente		= $POST["nomeCliente"];
$cpfCliente			= $POST["nomeCliente"];
$endCliente			= $POST["nomeCliente"];
$telefoneCliente	= $POST["nomeCliente"];
$rgCliente			= $POST["nomeCliente"];
$niverCliente		= $POST["nomeCliente"];

$sql = "INSERT INTO cliente VALUES";
$sql .= "('$nomeCliente', '$cpfCliente', '$endCliente', '$telefoneCliente', '$rgCliente', '$niverCliente')";
$resultado = mysql_query($sql);
echo "Cliente cadastrado com sucesso!";

mysql_close($conexao);
?>
