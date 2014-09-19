  <label>Pesquisar Cliente</label>
    <section class="conteudoMesmo">
          <ul class="list-unstyled list-inline home">
			<form>
		 	<label for="Nome">Nome</label>
		  	<input type="text" id="cliente_nome" name="name" /><br>
		  
		  	<label for="email">Email</label>
		  	<input type="email" id="cliente_nome" placeholder="fulano@mail.com" name="email" /><br>
		  
		  	<label for="data_nascimento">data de Nascimento:</label>
		  	<input type="data" id="cliente_nascimento"  name="nascimento" /><br>
		  
		  	<label for="cpf">CPF</label>
		  	<input type="number" id="cliente_cpf" name="cpf" size="18" maxlength="50" /><br>
		  
		  	<label for="rg">RG</label>
		  	<input type="number" id="cliente_rg"  name="rg" /><br>
		  
		  	<label for="telefone">Telefone</label>
		  	<input type="tel" id="cliente_telefone"  name="telefone" size="15" placeholder="(ddd) 0000-0000" maxlength="15"/><br>
           
		   	<label for="sexo">Sexo</label>
		  	<input type="radio" name="sexo" value="feminino">Feminino      
          	<input type="radio" name="sexo" value="Masculino">Masculino   <br><br>  
		   
		   	<input type="submit" name="salvar" value="Salvar" size="15" >
		</form>
        </ul>
    </section>