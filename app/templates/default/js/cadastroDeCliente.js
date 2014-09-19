$(document).ready(function(){
    $('#txtDataNiverCliente').datepicker({
        changeMonth: true,
        changeYear: true,
         dateFormat: 'dd/mm/yy' 
    });
    document.getElementById("checkAssocia").checked = true;
      $('.sonums').keypress(function(event) {
        var tecla = (window.event) ? event.keyCode : event.which;
        if ((tecla > 47 && tecla < 58)) return true;
        else {
            if (tecla != 8) return false;
            else return true;
        }
    });
    $('.cpfCliente').blur(function(){
        var cpf = $(this).val();
        $.ajax({
                url:'clientes_cadastrar/cpf?chave=cpf',
                type:'POST',
                data:"cpf="+cpf,
                datatype: 'json',
                beforeSend: function(xhr) {
                $('<img src="img/load.gif" class="loadCfp"/>').insertAfter('.cpfCliente');
                },
                success: function(data)
                {
                     if (data){
                         $('.txtNomeCliente').val(ob[1].nome);
                         $('.txtEnderecoCliente').val(ob[2].endereco);
                         $('.txtTelefoneCliente').val(ob[3].telefone);
                         $('.txtRgCliente').val(ob[4].rg);
                         $('#txtDataNiverCliente').val(ob[5].aniversario);
                         $('.loadCfp').hide();
                    } 
                    else {
                        $('.loadCfp').hide();
                    }
                }
            });
    });
    var erros = new Array();
    $('.btn-cadatra-cliente').click(function(event){
        erros = [];
        event.preventDefault();
        $('.cadastroCliente input:text').each(function(){
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
           var form = $('.cadastraCliente').serialize();
            $.ajax({
                url:'../Controllers/cadastroClienteController.class.php?chave=gravarUsuario',
                type:'POST',
                data:form,
                datatype: 'text',
                success: function(data)
                {
                    if (document.getElementById("checkAssocia").checked)
                    {
                        $('.cadastroCliente').html("");
                        $('.cadastroCliente').load('associaTagCliente.php', function (){
                            $('.lastIdCliente').html(data);
                        });
                    }
                    else
                    {
                      Apprise("Cliente cadastrado com sucesso!");
                      document.forms[0].reset();
                    }
                }
            });
            
            return false;
        }
    });
});


