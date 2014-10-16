$(document).ready(function (){
     var erros = new Array();
     var loginde = false;
    $('.btn-cadatra-funcionario').click(function(event){
        erros = [];
        event.preventDefault();
        $('.cadastrarFuncionario input:text, input:password').each(function(){
           if ($(this).val().trim() == ""){
               erros.push("Por favor não deixe o campo "+$(this).attr('name')+" vazio");
               $(this).parent().addClass('has-error');
           }
           else
           {
               $(this).parent().removeClass('has-error');
           }
           
           
        });
        var html;
        if ( $('.txtSenhaNovameneFuncionario').val()  != $('.txtSenhaFuncionario').val())
        {
            erros.push("As senha não combinam!");
            $('.divsenhaNovamente').addClass('has-error');
        }
        else 
        {
            $('.divsenhaNovamente').removeClass('has-error');
        }
        if($('.selectPermicao').val() == "")
        {
             erros.push("Por favor escolha uma permissão para funcionario");
             $('.selectPermicaoDiv').addClass('has-error');
        }
        else
        {
            $('.selectPermicaoDiv').removeClass('has-error');
        }
            
        for (key in erros)
        {
            html += "<p>"+erros[key]+"</p>";
        }
        
        
        
       if(erros.length > 0){
            html = html.replace("undefined","");
            $('.errosCliente').fadeIn(300).html(html);
            return  false;
        }else
        {
            $('.errosCliente').fadeOut(300).html("");
            var form = $('.cadastrarFuncionario').serialize(); 
            $.ajax({
                url:'validateCadastro',
                type:'POST',
                data:form,
                datatype: 'json',
                success: function(data) {
                   try{ 
                       var json = JSON.parse(data);
                       
                       if (json['error'] > 0) {
                             Apprise(json['menssagem']);
                       } else {
                        Apprise(json['menssagem']);
                        document.forms[0].reset();
                       }
                    } catch(err){

                           Apprise('Aconteceu algum erro no parce do json');
                    }
                }
            });
            return false;
        }
    });

});