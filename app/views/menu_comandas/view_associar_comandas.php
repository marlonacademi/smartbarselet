   <!------Tela Associar Comanda -------->
    <!------Modificado: 20/09 -------->
     <!------Jessica Leticia -------->
      <label class="fonteMenuPag">Associar Comanda</label>
    <section class="conteudoMesmo">
        
        <section class="conteudoMesmo ">
        <table border = '0'>    
        <form class="form-horizontal associarComanda" id="associarComanda">
            <div class="bg-danger errosCliente ">
                
            </div>
            <tr>
            <div class="form-group">
               
                <td> <label for="Cpf" class="control-label col-xs-3">CPF:</label></td>
                <td><div class="col-xs-5">
                    <input type="text" name="Cpf" class="form-control2 txtCpfCliente sonums cpfCliente" placeholder="Digite o CPF."/></td>
                    <td><input type="submit" class="btn btn-primary button_form btn-pesquisar-cliente" value="Pesquisar"/></td>
                </div>
                
            </div>
            </tr>
            <tr>
            <div class="form-group">
                <td><label for="codComanda" class="control-label col-xs-3" >Comanda:</label></td>
                <td><div class="col-xs-5">
                    <input type="text" name="codComanda" class="form-control2 txtNomeCliente" placeholder="Nemero da Comanda"/></td>
                    <td><input type="submit" class="btn btn-primary button_form btn-pesquisar-cliente" value="Associar"/></td>

                </div>
            </div>
            </tr>
            <tr>
                <td> <label for="comandaPre" class="control-label col-xs-3">Comanda Pré-paga:</label></td>
                <td> <input type="radio" name="comandaPre" value="preSim">Sim</td>      
                <td> <input type="radio" name="comandaPre" value="preNao">Não</td>
             </tr>     

            <tr><td colspan='3'>
            <div class="form-group" >
                <input type="submit" class="btn btn-primary button_form btn-pesquisar-cliente" value="Carregar comanda"/>
           </div>
            </td></tr>
        </form>
    </table>
</section>