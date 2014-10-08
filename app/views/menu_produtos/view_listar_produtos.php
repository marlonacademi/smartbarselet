<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo CSS; ?>apprise-v2.css" type="text/css" media="all" />
    <script src="<?php echo JS; ?>apprise-v2.js"></script>
    <script src="<?php echo JS; ?>cadastroDeCliente.js"></script>

 <label class="fonteMenuPag">Listar Produtos</label>
  <section class="conteudoMesmo cadastroCliente">
    
      <form class="form-horizontal cadastraCliente" id="cadastrarProdutos">
          <div class="form-group">
           <label for="listaProduto" class="control-label col-xs-3">Filtro:</label>
            <select for="precoProduto" class="control-label col-xs-2 form-control2">
                <option value="codigo">Código</option>
                <option value="descricaoPlu">Descrição</option>
                <option value="tipo">Tipo</option>
            </select>
           <input type="text" name="obsProduto" class="form-control2 " placeholder="Digite"/>
          </div>
      
          <div class="form-group">
            <input type="submit" class="btn btn-primary button_form btn-pesquisar-cliente" value="Salvar" name="salvarProduto"/>
          </div>
          <list class="form-horizontal" id="cadastrarProdutos" id="listaProduto"></list>
      <form>
    
  </section> 