$(document).ready(function(){
   var id = $('.tagid').html().trim();
    $.ajax({
       url:'../Controllers/myAccountController.class.php?chave=achar',
       type:'POST',
       data:"id="+id,
       datatype: 'json',
        success: function(data)
        {
            try
            {
                var ob = JSON.parse(data);
                $('.txtNome').val(ob[1].funcionario[0].nome);
                $('.txtEndereco').val(ob[1].funcionario[0].endereco);
                $('.txtRg').val(ob[1].funcionario[0].rg);
                $('.txtCpf').val(ob[1].funcionario[0].cpf);
                $('.loadMyaccount').hide();
                $('.myaccountForm').fadeIn('fast');
            }
            catch (err)
            {
                
            }
            
        }
   });
    
});