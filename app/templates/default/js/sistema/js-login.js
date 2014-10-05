$(document).ready(function() {
    $('.logar').click(function(event) {
        event.preventDefault();
        if ($('input:eq(0)').val() == "" || $('input:eq(1)').val() == "") {
            Apprise("Por favor não deixar nenhum campo vazio");
        }
        else {
            form = $('.form').serialize();
            jQuery.ajax({
                url: "/login", //URL de destino
                type: "POST",
                data: form,
                datatype: 'json', //Tipo de Retorno
                success: function(json)
                {
                    
                    var ob = JSON.parse(json);
                    if (ob[0].total > 0){
                        Apprise("Você sera redirecionada em alguns segundos!");
                        setInterval(function(){window.location.href = 'index'},3000);
                        
                    }
                    else {
                         Apprise("Seu usuario ou sua senha estão errados!");
                         $('input').val("");
                    }
                },
                error: function(){
                    alert("Deu errado");
                }
                

            });

        }

    });
});


