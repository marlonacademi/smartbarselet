$(document).ready(function() {
    setInterval(function() {
        var idCliente = $('.lastIdCliente').html().trim();
        var idfun = $('.tagid').html();
        document.getElementById('tagIDCliente').disabled = true;
        if ($('#tagIDCliente').val().trim() == "")
        {
            $.ajax({
                url: "../Controllers/cadastroClienteController.class.php?chave=achar", //URL de destino
                type: "POST",
                data: "idCliente=" + idCliente + "&idfun=" + idfun,
                async: false,
                cache: false,
                datatype: 'json', //Tipo de Retorno
                success: function(data)
                {
                    try {
                        var ob = JSON.parse(data);
                        if (ob[0].retorno == "true")
                        {
                            $('#tagIDCliente').val(ob[1].tag);
                            $.ajax({
                                url: "../Controllers/cadastroClienteController.class.php?chave=gravarClienteTag", //URL de destino
                                type: "POST",
                                data: "tag="+ob[1].tag+"&idCliente="+idCliente+"&idfun="+ idfun,
                                cache: false,
                                async: false,
                                datatype: 'json',
                                beforeSend: function(xhr) {
                                    $('.load').show('slow');
                                },
                                success: function(data)
                                {
                                    //location.href = "cadastar_cliente";
                                }
                            });
                        }
                        else if (ob[0].retorno == "Existe")
                        {
                            Apprise("Essa TAG ja esta associada ha alguem!");
                        }
                        else
                        {
                            
                        }
                        
                    }
                    catch (err) {
                        
                    }
                }

            });
        }
        else {
            
         location.href = "cadastrar_cliente";
        }
    }, 3000);

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
