 <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo CSS; ?>apprise-v2.css" type="text/css" media="all" />
    <script src="<?php echo JS; ?>apprise-v2.js"></script>
    <script src="<?php echo JS; ?>cadastroDeCliente.js"></script>

 <label class="fonteMenuPag">Cadastrar Produto</label>
  <section class="conteudoMesmo cadastroCliente">
    
      <form class="form-horizontal cadastraCliente" id="cadastrarProdutos">
        <div class="bg-danger errosCliente ">
                
        </div>

          <div class="form-group ">
           <label for="produto" class="control-label col-xs-3 ">Produto:</label>
            <div class="col-xs-5">
              <input type="text" name="nomeProduto" class="form-control2  sonums" placeholder="Nome do Produto"/>
            </div>
          </div>    
        
          <div class="form-group ">
           <label for="codigoProduto" class="control-label col-xs-3">Código:</label>
            <div class="col-xs-5">
              <label for="returnCodigoProduto" class="control-label col-xs-3">XXXXXX</label>
            </div>
          </div>
        
          <div class="form-group">
           <label for="precoProduto" class="control-label col-xs-3">Preço R$:</label>
            <div class="col-xs-5">
              <input type="text" name="nomeProduto" class="form-control2 " placeholder="Nome do Produto"/>
            </div>
          </div>
        
          <div class="form-group">
           <label for="marcaProduto" class="control-label col-xs-3">Marca:</label>
            <div class="col-xs-5">
              <input type="text" name="marcaProduto" class="form-control2 " placeholder="Marca"/>
            </div>
          </div>
        
          <div class="form-group">
           <label for="tipoProduto" class="control-label col-xs-3">Tipo:</label>
            <select for="precoProduto" class="control-label col-xs-2 form-control2">
                <option value="dose">Dose</option>
                <option value="garrafa">Garrafa</option>
                <option value="lata">Lata</option>
                <option value="unidade">Unidade</option>
            </select>
            
           <input type="text" name="obsProduto" class="form-control2 " placeholder="Observações"/>
          </div>
        

    
          <div class="form-group">
            <input type="submit" class="btn btn-primary button_form btn-pesquisar-cliente" value="Salvar" name="salvarProduto"/>
          </div>
      <form>
  </section> 