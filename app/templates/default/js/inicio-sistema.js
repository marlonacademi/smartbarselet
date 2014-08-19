$(document).ready(function (){
   $("[rel=tooltip]").tooltip({ placement: 'auto'});
    var url = window.location;
    var urlString = url.toString();
    var urlArray = urlString.split("/");
    var inicia = false;
    for (var i = 0; i< urlArray.length; i++){
        if (urlArray[i].indexOf('inicia') != -1)
        {
            window.history.pushState('',"Smart Braselet Home", "home");
        }
      /*setInterval(function (){
          if (tag.retorno)
              alert("Deu certo");
                    
      },8000); */ 
    }

$('.logoff').click(function(){
    
     $.ajax({
        url: "../Controllers/logoffController.class.php", 
                type: "POST",
                data:"chave=logof",
                datatype: 'text',
                success: function(r)
                {
                    if (t = "index"){
                        window.location.href = 'index.php'
                    }
                }
            });
    });
});
