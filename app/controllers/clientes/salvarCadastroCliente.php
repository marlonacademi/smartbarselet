<?php

 $campoNome = $_POST['nomeCliente']; /*$_POST['NOME DO NAME QUE ESTA NO HTML']*/
 $campoCpf = $_POST['cpfCliente'];
 
 $queryLeticia = "INSERT INTO tabela(coluna1, coluna2) VALUES ('$campoNome','$campoCpf')";
 
 mysql_query($queryLeticia) or die(error());

 ?>