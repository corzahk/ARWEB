function restore(){
  if($('#correo').val() ==""){
     M.toast({html: 'Por favor introduce tu correo!', classes: 'rounded'});
  }else{
    /*call ajax to api rest*/
    console.log("en hora buena");
        $.ajax({
          url:'http://www.blackdishes.com/rest/controller/emailController.php',
          type:'POST',
          data:{
            accion:'restablecer',
            correo:$('#correo').val()
          },
          success:function(response){
            if(response=="error"){
                  M.toast({html: 'Ha ocurrido un error al procesar tus datos!'});
            }else{
                  console.log(response);
                  M.toast({html: 'Datos enviados con exito!'});
                  setTimeout(function(){
                    window.location.href = 'passwdres.html';
                  },1000);
          }
        },
        error:function(err){
          console.log(err);
        }
        });
  }
}
