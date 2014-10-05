$(document).ready(function() {
    var xreAjax = 200;
    var modal = false;
    var tags = new Array();
    setInterval(function()
    {
        var idFun = $('.tagid').html();
        if (xreAjax = 200){
        $.ajax({
            url: "../Controllers/PuseiraIdController.class.php", //URL de destino
            type: "POST",
            data: "idFun=" + idFun + "&chave=achar",
            cache: false,
            datatype: 'json', //Tipo de Retorno
                beforeSend: function() {
                    xreAjax = 100;
                },
            success: function (json, textStatus, jqXHR)             
            {
                xreAjax = 200;
                var on = JSON.parse(json);
                if (on[0].retorno == "Puseira sem usuario") 
                {
                    Apprise("Esta pulseira não esta associada a nenhum usuário");
                }

                try {
                    if (!modal)
                    {

                        var ob = JSON.parse(json);
                        tags.push(ob);
                        if (ob[0].retorno == "true")
                        {
                            deletarTag();

                            if (tags.length > 0)
                            {
                                var url = location.href;
                                url = url.split("/");
                                url = url[url.length - 1];
                                if (url == "home")
                                {
                                    $('.modal').modal('show');
                                    $('.nomeCliente').html(ob[1].Cliente.nomeCliente);
                                    $('.idCliente').html(ob[1].Cliente.idCliente);
                                    modal = true;
                                    $('.modal').on('hidden.bs.modal', function(e) {
                                        modal = false;
                                    });
                                }
                                tags.shift();
                            }
                        }



                    }
                    else
                    {
                        tags.push(json);
                    }
                }
                catch (err) {
                }
            },
            error: function() {

            },
            404: function() {

            }
        });
    }
    }, 5000);
});
function deletarTag() {
    var idFun = $('.tagid').html();
    $.ajax({
        url: "../Controllers/PuseiraIdController.class.php", //URL de destino
        type: "POST",
        data: "idFun=" + idFun + "&chave=delete",
        success: function(data)
        {

        },
        error: function() {

        },
        404: function() {

        }
    });
}

