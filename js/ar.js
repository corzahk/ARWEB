









/*
var valueToPush = new Array();
function AddToCart(id) {
  console.log(id);
  $.ajax({
    url:'http://192.168.0.160/api-rest/controller/ArController.php',
    type:'POST',
    data:{accion:'AddToCart',
          id:id,
          },
    success:function(resp){
      var Cart = JSON.parse(resp);
      for(var i in Cart){
        valueToPush[0] = Cart[i].idPlatillo;
        valueToPush[1] = Cart[i].nombre;
        valueToPush[2] = Cart[i].descripcion;
        valueToPush[3] = Cart[i].costo;
        cart.push(valueToPush);
      }
      localStorage.setItem("car",(cart));
      //document.location = "../car.html";
    },
    error:function(err){
      console.log(err);
    }
  });
}
*/



/*
function loadCarrito(){
  $.ajax({
    url:'http://192.168.0.160/api-rest/controller/ArController.php',
    type:'POST',
    data:{accion:'loadCarrito',
          id:id,
        },
    success:function(resp){
      var Carrito = JSON.parse(resp);
      for(var i in PreCar){
        if(Carrito[i].idPlatillo == id){
          $("#orderContainer").append("");
          $("#footerContainer").append("")
        }
      }
    },
    error:function(err){
      console.log(err);
    }
  });
}
*/
