function errorReport(){
    if($('#error_1').val() ==''){
      M.toast({html:'Por favor introduce tu error', classes: 'rounded'});
    }else{
      console.log("Perfecto");
      $.ajax({
            url:'http://www.blackdish.mx/rest/controller/errorController.php',
            type:'POST',
            data:{
              accion:'errorEnviar',
              correo:$('#error_1').val()
            },
            success:function(response){
              if(response=="error"){
                    M.toast({html: 'Ha ocurrido un error al procesar tus datos!'});
              }else{
                    console.log(response);
                    M.toast({html: 'Datos enviados con exito!'});
                    setTimeout(function(){
                      window.location.href = 'main.html';
                    },1000);
            }
          },
          error:function(err){
            console.log(err);
          }
      });
    }

}
