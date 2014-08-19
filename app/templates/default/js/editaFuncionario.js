$(document).ready(function() {
    var idfun = $('.idfunEdit').html().trim();
    $.ajax({
        url: '../../Controllers/editarFuncionarioController.class.php?chave=getFun',
        type: 'POST',
        data: "idFun=" + idfun,
        datatype: 'json',
        beforeSend: function(xhr) {
            $('.conteudoMesmo').append('<img src=../img/728.gif class="loadF" />');
        },
        success: function(data)
        {
            $('.loadF').hide();
            try
            {
                $('.EditarFuncionario').show();
                var ob = JSON.parse(data);
                $('.txtNomeFuncionario').val(ob[0].nome);
                $('.txtEnderecoFuncionario').val(ob[0].Endereco);
                $('.txtTelefoneFuncionario').val(ob[0].Telefone);
                $('.txtRgFuncionario').val(ob[0].RG);
                $('.txtCpfFuncionario').val(ob[0].CPF);
                $('.selectPermicao option[value=' + ob[0].permissao + ']').attr('selected', true);
            }
            catch (err) {
            }
        }
    });
    var erros = new Array();
    $('.btn-cadatra-funcionario').click(function(event) {
        erros = [];
        event.preventDefault();
        $('.cadastrarFuncionario input:text, input:password').each(function() {
            if ($(this).val().trim() == "") {
                erros.push("Por favor não deixe o campo " + $(this).attr('name') + " vazio");
                $(this).parent().addClass('has-error');
            }
            else
            {
                $(this).parent().removeClass('has-error');
            }


        });
        var html;
        if ($('.txtSenhaNovameneFuncionario').val() != $('.txtSenhaFuncionario').val())
        {
            erros.push("As senha não combinam!");
            $('.divsenhaNovamente').addClass('has-error');
        }
        else
        {
            $('.divsenhaNovamente').removeClass('has-error');
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