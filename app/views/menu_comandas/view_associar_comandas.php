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

            <div class="form-group">
                <label for="Cpf" class="control-label col-xs-2">CPF:</label>
                <div class="col-xs-5">
                    <input type="text" name="Cpf" class="form-control2 txtCpfCliente sonums cpfCliente" placeholder="Digite o CPF."/>
                </div>
                <div class="col-xs-5">
                    <input type="submit" class="btn btn-primary button_form btn-pesquisar-cliente" value="Pesquisar"/>
                </div>
            </div>
            
            
            <div class="form-group">
                <label for="codComanda" class="control-label col-xs-2" >Comanda:</label>
                <div class="col-xs-5">
                    <input type="text" name="codComanda" class="form-control2 txtNomeCliente" placeholder="Nemero da Comanda"/>
                </div>
                <div class="col-xs-5">
                    <input type="submit" class="btn btn-primary button_form btn-pesquisar-cliente" value="Associar"/>
                </div>
            </div>

            <div class="form-group">
                 <label for="comandaPre" class="control-label col-xs-13">Comanda Pré-paga:</label>
            </div>

            <div class="form-group">
                 <label for="comandaPreSim" class="control-label col-xs-1" >Sim:</label>
                 <div class="col-xs-5">
                    <input type="radio" name="comandaPre" value="preSim">
                 </div>
            </div>
            <div class="form-group">
                 <label for="comandaPreNao" class="control-label col-xs-1" >Não:</label>
                 <div class="col-xs-5">
                    <input type="radio" name="comandaPre" value="preNao">
                </div>
            </div>

            
            <div class="form-group" >
                <div class="col-xs-5">
                 <input type="submit" class="btn btn-primary button_form btn-pesquisar-cliente" value="Carregar comanda"/>
                </div>
           </div>
            
        </form>
    </table>
</section>