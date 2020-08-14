function login() {
  if ($("#usuario").val() == "" || $("#password").val() == "") {
    //alertify.alert('Por favor llena todos los campos!', function(){ alertify.success('Ok'); });
    M.toast({ html: "Por favor llena los campos!", classes: "rounded" });
  } else {
    $.ajax({
      url: "http://www.blackdishes.com/rest/controller/LoginController.php",
      type: "POST",
      data: {
        accion: "loginUser",
        usuario: $("#usuario").val(),
        password: $("#password").val(),
      },
      success: function (resp) {
        console.log(resp);
        if (resp == "0") {
          M.toast({
            html: "Usuario o contraseña incorrecta",
            classes: "rounded",
          });
        } else {
          localStorage.setItem("token", resp);
          //localStorage.setItem("token",undefined);
          window.location = "page-main.html";
        }
      },
      error: function (err) {
        console.log(err);
      },
    });
  }
}

function loginEmployee() {
  $.ajax({
    url: "http://www.blackdishes.com/rest/controller/LoginController.php",
    type: "POST",
    data: {
      accion: "loginEmployee",
      usuario: $("#usuario").val(),
      password: $("#password").val(),
    },
    success: function (resp) {
      console.log(resp);
      if (resp == "0") {
        M.toast({
          html: "Usuario o contraseña incorrecta",
          classes: "rounded",
        });
      } else {
        //localStorage.setItem("token",resp);
        //localStorage.setItem("token",undefined);
        //window.location="main.html";
      }
    },
    error: function (err) {
      console.log(err);
    },
  });
}
function loginInvitado() {
  window.location = "page-main1.html";
}
