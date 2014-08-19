$(document).ready(function() {
    $('.logar').click(function() {

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
                        $('#retorno').html("Você sera redirecionada em alguns segundos!").fadeIn('slow');
                        setInterval(function(){window.location.href = 'index'},3000);
                        
                    }
                    else {
                        $( "#login" ).effect( "bounce",{times:3}, 300 );
                         $('#retorno').html("Seu usuario ou sua senha estão errados!").fadeIn('slow');
                         $('input').val("");
                         setInterval(function(){$('#retorno').fadeOut('fast')},3000);
                    }
                },
                error: function(){
                    alert("Deu errado");
                }
                

            });

        }

    });
});


