$(document).ready(function(){
    $('#enviar').click(function(){
     var user = $('#iname').val(); //o mesmo nome
     var comment = $('#imessage').val(); //o mesmo nome
     var asses = $("input[name='rating']:checked").val();
     alert(user + ', ' + comment + ' ' + asses + ' estrela[s]');
 
     $.ajax({
         url: 'Avaliacao.php',
         type: 'POST',
         data:{
             u: user,//daqui
             c: comment,// daqui
             v: asses
         },
         success : function(data){
             alert('Seu comentário foi cadastrado com sucesso');
         }
     });
        $('#imagem').css("visibility", "visible");
        $('#imagem').css("width", "400px");
        $('#imagem').css("height", "800px");
    });
    $('#db').click(function(){
        $.ajax({
            url: 'AvaliacaoSelect.php',
            success: function(data){
               $('#resultados').html(data);
            }
        })
    })

 });