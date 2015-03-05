$(document).ready(function() {
    var erros = new Array();
    $('.btn-cadatra-funcionario').click(function(event) {
        erros = [];
        event.preventDefault();
        var html;
        $('.editar-funcionario input').each(function(){
            if ($(this).val().trim() == ''){
                
            }
        });
        if ($('txtSenhaFuncionario').val() != ''){
            if ($('.txtSenhaNovameneFuncionario').val() != $('.txtSenhaFuncionario').val())
            {
                erros.push("As senha não combinam!");
                $('.divsenhaNovamente').addClass('has-error');
            }
            else
            {
                $('.divsenhaNovamente').removeClass('has-error');
            }
        }
        if ($('.selectPermicao').val() == "")
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
            html += "<p>" + erros[key] + "</p>";
        }



        if (erros.length > 0) {
            html = html.replace("undefined", "");
            $('.errosCliente').fadeIn(300).html(html);
            return  false;
        } else
        {
            $('.errosCliente').fadeOut(300).html("");
            var form = $('.EditarFuncionario').serialize();
            $.ajax({
                url: '../../Controllers/editarFuncionarioController.class.php?chave=updateFun',
                type: 'POST',
                data: form + "&idFun=" + idfun,
                datatype: 'json',
                success: function(data) {
                     window.location.href = '/projects/TG/Desenvolvimento/View/listar_funcionario';
                }
            });
            return false;
        }
    });



});