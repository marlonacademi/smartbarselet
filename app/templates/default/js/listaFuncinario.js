$(document).ready(function() {
    $.ajax({
        url: '../Controllers/listarFuncionarioController.class.php?chave=allFuncionarios',
        type: 'POST',
        datatype: 'json',
        beforeSend: function(xhr) {
            $('.tabelaFuncionario table tbody').html('<img class="LoadFuncionario" src="img/728.gif"/>');
            $('.tabelaFuncionario').height("250px");
        },
        success: function(data, textStatus, jqXHR) {
            try
            {
                var ob = JSON.parse(data);
                var html;
                for (key in ob[0].Funcionarios)
                {
                    html += "<tr><td>" + ob[0].Funcionarios[key].IdFuncionario + "</td><td>" + ob[0].Funcionarios[key].nome + "</td><td>" + ob[0].Funcionarios[key].Telefone + "</td><td>" + ob[0].Funcionarios[key].Endereco + "</td><td>" + ob[0].Funcionarios[key].CPF + "</td><td><button type=\"button\" class=\"btn btn-default btn-sm btn-editar\" id=\"" + ob[0].Funcionarios[key].IdFuncionario + "\"><span class=\"glyphicon glyphicon-pencil\"></span></button></td><td><button type=\"button\" class=\"btn btn-default btn-sm btn-delete\" id=\"" + ob[0].Funcionarios[key].IdFuncionario + "\"><span class=\"glyphicon glyphicon-trash\"></span></button></td></tr>";
                }
                $('.tabelaFuncionario').height("100%");
                $('.tabelaFuncionario table tbody').html(html);
                $('.paginationFuncionario').fadeIn("fast");
            }
            catch (err)
            {
                Console.log(err);
            }
        }
    });

    $('.tabelaFuncionario').on('click', '.btn-editar', function() {
        var id = $(this).parent().parent().children("td").html();
        location.href = "editar_funcionario/" + id;
    });
    $('.tabelaFuncionario').on('click', '.btn-delete', function() {
        var id = $(this).parent().parent().children("td").html();
        var td = $(this).parent().parent();
        var nome = td.children().next().html();
        var settings = {
            animation: 700, // Animation speed
            buttons: {
                confirm: {
                    action: function() {
                        $.ajax({
                            url: '../Controllers/listarFuncionarioController.class.php?chave=removeFuncionarios',
                            data: 'idFun=' + id,
                            type: 'POST',
                            datatype: 'text',
                            beforeSend: function(xhr) {
                                td.fadeOut('slow', function() {
                                    td.remove();
                                });
                            },
                            success: function(data, textStatus, jqXHR) {

                            }
                        });
                        Apprise ( 'close' );
                    }, // Callback function
                    className: null, // Custom class name(s)
                    id: 'confirm', // Element ID
                    text: 'Sim', // Button text
                },
                button: {
                    action: function() {
                       Apprise ( 'close' );
                    }, // Callback function
                    className: null, // Custom class name(s)
                    id: 'nao', // Element ID
                    text: 'nao', // Button text
                }
            } 
        };
        Apprise("Você deseja realmente deletar o funcionario "+nome+"!",settings);
    });
});