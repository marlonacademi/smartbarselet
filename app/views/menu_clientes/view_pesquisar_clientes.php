  <!------Tela Pesquisar Cliente -------->
    <!------Modificado: 20/09 -------->
     <!------Jessica Leticia -------->

  <label class="fonteMenuPag">Pesquisar Cliente</label>
    <section class="conteudoMesmo">
          <form class="form-horizontal cadastraCliente" id="cadastraCliente">
            <div class="bg-danger errosCliente ">
                
            </div>
            <div class="form-group">
                <label for="Cpf" class="control-label col-xs-3">CPF:</label>
                <div class="col-xs-5">
                    <input type="text" name="Cpf" class="form-control txtCpfCliente sonums cpfCliente" placeholder="Digite seu CPF."/>
                </div>
            </div>
            <div class="form-group">
                <label for="Nome" class="control-label col-xs-3" >Nome:</label>
                <div class="col-xs-5">
                    <input type="text" name="Nome" class="form-control txtNomeCliente" placeholder="Digite seu nome."/>
                </div>
            </div>

            
            <div class="form-group" >
                <input type="submit" class="btn btn-primary button_form btn-pesquisar-cliente" value="Pesquisar"/>
           </div>
        </form>
    </section>