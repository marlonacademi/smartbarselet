$(document).ready(function(){
    var totalPedido = 0;
    var totalproduto = 0;
    $("#IdProduto").prop('disabled',true);
    $("#ValorProduto").prop('disabled',true);
    $('.NomeProduto').keydown(function(){
        var ob ;
       var txtNome = $(this).val();
       if (txtNome.length > 2){
           $.ajax({
               url:"../Controllers/PedidoController.class.php?chave=getProdutos",
               type:"POST",
               data:"nomeProduto="+txtNome+"",
               datatype: 'text',
               
               success: function(json)
               {
                   $('.produtosAutoComplete').show("slow");
                   try{
                    ob = JSON.parse(json);
                    var html="";
                    var key;
                    for(key in ob){
                        html += '<div class="produto" id="'+key+'">'+ob[key].NomeProduto+'</div>'; 
                    }
                    $('.produtosAutoComplete').html(html);
                    $('#NomeProduto').focus(function(){
                        $('.produtosAutoComplete').show("slow");
                    });
                    $('.produto').click(function(){
                        $('.produtosAutoComplete').hide("slow");
                        var p = $(this).attr('id');
                        $("#IdProduto").val(ob[p].idProduto);
                        $("#NomeProduto").val(ob[p].NomeProduto);
                        $("#ValorProduto").val(accounting.formatMoney(ob[p].valorProduto,"R$", 2, ".", ","));
                        $("#QuantProduto").val("1");
                    });
                    $('#NomeProduto').blur(function(){
                         $('.produtosAutoComplete').hide("slow");
                    });
                }
                    catch (err){
                        
                    }
                    
               }
           });
           
       }
       else 
       {
        $('.produtosAutoComplete').html("");
        $('.produtosAutoComplete').hide("slow");
       }
    });
    
    
    $('.addProduto').click(function(){
                if ($('#IdProduto').val() == "" || $("#NomeProduto").val() == "" || $("#ValorProduto").val() == "" || $("#QuantProduto").val() == "")
                {
                    alert("Por favor não deixar nenhum campo vazio");
                }
                else
                {
                
               var html;
               $("#IdProduto").val(); 
               totalproduto = eval(accounting.unformat($("#ValorProduto").val(),",")*$("#QuantProduto").val());
               totalPedido+= totalproduto;
               html = '<tr class="iniP"><td>'+$("#IdProduto").val()+'</td><td>'+$("#NomeProduto").val()+'</td><td>'+$("#QuantProduto").val()+'</td><td>'+accounting.formatMoney(totalproduto,"R$", 2, ".", ",")+'</td><td><button type="button" class="btn btn-danger btn_remove">Remover</button></td></tr>' ;
               $('.modal tbody').append(html);
               $("#IdProduto").val("");
               $("#NomeProduto").val("");
               $("#ValorProduto").val("");
               $("#QuantProduto").val("");
                }
                $('.totalProduto').html(accounting.formatMoney(totalPedido,"R$", 2, ".", ","))
               
           });
           $(document).keypress(function(e) {
                if(e.which == 13 && modal == true) {
                     if ($('#IdProduto').val() == "" || $("#NomeProduto").val() == "" || $("#ValorProduto").val() == "" || $("#QuantProduto").val() == "")
                {
                    alert("Por favor não deixar nenhum campo vazio");
                }
                else
                {
                
               var html;
               $("#IdProduto").val(); 
               totalproduto = eval(accounting.unformat($("#ValorProduto").val(),",")*$("#QuantProduto").val());
               totalPedido+= totalproduto;
               html = '<tr class="iniP"><td>'+$("#IdProduto").val()+'</td><td>'+$("#NomeProduto").val()+'</td><td>'+$("#QuantProduto").val()+'</td><td>'+accounting.formatMoney(totalproduto,"R$", 2, ".", ",")+'</td><td><button type="button" class="btn btn-danger btn_remove">Remover</button></td></tr>' ;
               $('.modal tbody').append(html);
               $("#IdProduto").val("");
               $("#NomeProduto").val("");
               $("#ValorProduto").val("");
               $("#QuantProduto").val("");
                }
                $('.totalProduto').html(accounting.formatMoney(totalPedido,"R$", 2, ".", ","))
               
                    
                }
           });
    $('.btn-close').click(function(){
        $('.modal tbody').html('');
        $("#IdProduto").val("");
        $("#NomeProduto").val("");
        $("#ValorProduto").val("");
        $("#QuantProduto").val("");
        $('.totalProduto').html("R$00,00");
        totalPedido = 0;
    });
    $('.btn-savePedido').click(function(){
        var jsonA = new Array();
        var counP = 0;
        $('.iniP').each(function(){
            var html = $(this).html();
            html = replaceAll("<td>","",html);
            var produtos = html.split("</td>");
            var valorP = produtos[3].replace("R$","");
            produtos[3] = valorP.replace(",",".");
            jsonA.push('{"IdProduto":"'+produtos[0]+'","NomeProduto":"'+produtos[1]+'","QuantProduto":"'+produtos[2]+'","ValorProduto":"'+produtos[3]+'"}');
            counP++;
        });
         var json = '[{"produtos":['+ jsonA.toString() + "]},";
         json += '{"Funcionario":"'+$('.tagid').html()+'"},{"Cliente":"' +$('.idCliente').html()+'" }]';
         if (counP > 0)
         {
             $.ajax({
                 url:"../Controllers/PedidoController.class.php?chave=gravarPedido",
                 type:"POST",
                 data: {JSON:json},
                 datatype: 'text',
                 success: function (data)
                 {
                     var ob = JSON.parse(data);
                     if (ob[0].retorno){
                     $('.modal tbody').html("");
                     $("#IdProduto").val("");
                     $("#NomeProduto").val("");
                     $("#ValorProduto").val("");
                     $("#QuantProduto").val("");
                     $('.totalProduto').html("R$00,00");
                     $('.modal').modal('hide');
                     totalPedido = 0;
                     numeroDeProdutos = 0;
                        setTimeout(function (){alert("Pedido gravado com sucesso");},2000); 
                 }
                 else {
                     alert("Houve algum erro por favor tente de novamente");
                 }
                 }
             });
         }
         else 
         {
             alert("por favor coloque algum produto antes de finalizar o pedido");
         }
    });
    
  $('.modal').on('click','.btn_remove',function(){
         var par = $(this).parent().parent();
         var valor = par.children('td').next().next().next().html();
         valor = valor.replace("R$","");
         valor = valor.replace(",",".");
         totalPedido -= valor;
         $('.totalProduto').html(accounting.formatMoney(totalPedido,"R$", 2, ".", ","));         
         par.fadeOut(500,function (){ par.remove();});
        
  });
    
});


function replaceAll(find, replace, str) 
    {
      while( str.indexOf(find) > -1)
      {
        str = str.replace(find, replace);
      }
      return str;
    }