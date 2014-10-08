
    <label class="fonteMenuPag">Editar Pedido</label>
        
        <section class="conteudoMesmo ">
        <table border = '0'>    
        <form class="form-horizontal associarComanda" id="carregarComandas">
            <div class="bg-danger errosCliente ">
                <input type="combobox" name="opcaoBuscaCli" form-control2 "/>
            </div>
            <tr>
            <div class="form-group">
               
                <td> <label for="Cpf" class="control-label col-xs-3">CPF:</label></td>
                <td><div class="col-xs-5">
                    <input type="text" name="Cpf" class="form-control2 txtCpfCliente sonums cpfCliente" placeholder="Digite o CPF."/></td>
                    <td rowspan="2"><input type="submit" class="btn btn-primary button_form btn-pesquisar-cliente" name="PesquisaCliente" value="Pesquisar"/></td>
                </div>
                
            </div>
            </tr>
            <tr>
            <div class="form-group">
                <td><label for="codComanda" class="control-label col-xs-3" >Comanda:</label></td>
                <td><div class="col-xs-5">
                    <input type="text" name="codComanda" class="form-control2 txtNomeCliente" placeholder="Nemero da Comanda"/></td>
                </div>
            </div>
            </tr>
            <tr>
                <td colspan="3"> <label for="retornoDadosCliente" class="control-label col-xs-13">Retorno dados do Cliente</label></td>
            </tr>     

            <tr>
                <td>
                <div class="form-group">
                    
                <select class="control-label control-label col-xs-13">
                    <option value="descriProduto">Descrição</option>
                    <option value="codProduto">Código</option>
                </select>
                </div>
                </td>
                <td><input type="text" name="pesquisarProduto" class="control-label col-xs-13"</td>
                <td><input type="submit" class="btn btn-primary button_form btn-pesquisar-cliente" value="Pesquisar" name="pesquisaProduto"/></td>
            <tr>
                <td colspan="3"><input type="submit" class="btn btn-primary button_form btn-pesquisar-cliente" value="Salvar" name="salvarRecarga"/></td>
            </tr>    
        </form>
    </table>

    </section>