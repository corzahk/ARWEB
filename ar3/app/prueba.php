<?php

require 'conexion.php';

  $con = new conexion();
  $conn = $con -> conectar();
  
    /*CONECTAR A LA TABLE PARA EXTRAER EL NOMBRE DE LA IMAGEN*/
    $sql = $conn -> query( " SELECT image FROM imagenes WHERE id= '2' ");
      
        while ($fila = $sql->fetch_row()) {
                $a = $fila[0];
              }

 ?>
<!-- Autor: AngelMqz / WEB: blackdish.mx / INFO: Codigo de programacion para implementacion de realidad aumentada web, con A-frame, -->
<html>

      <link href='https://fonts.googleapis.com/css?family=Alatsi' rel='stylesheet'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
      <script src="https://cdn.rawgit.com/jeromeetienne/AR.js/dev/aframe/build/aframe-ar.js"></script>
      <script src="https://rawgit.com/donmccurdy/aframe-extras/master/dist/aframe-extras.loaders.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.0.5/gsap.min.js"></script>

      <meta name="apple-mobile-web-app-capable" content="yes">

      <script src="https://unpkg.com/merge-images"></script>

      <!--Estilos -->
      <style>
              .button{padding: 8px;text-align: center;text-decoration: none;display: inline-block;
                font-size: 12px;margin: 4px 2px;background: white;border-radius: 50%;height: 70px;width: 70px;}
              #output{display: inline-block;top: 4px;position: relative;border: dotted 1px #ccc;padding: 2px;}
              .button{border: solid 2px #ccc;}
              .menu2{position:fixed;top:0px;width:100%;height:80px;background-color:black;z-index:100;}
              .logo2{z-index: 100;top: 0px;width: 100px;margin: 0px; margin-top: -30px;display: inline-block;}
              .navigation{width: 100%;list-style: none;text-align: center;height: 20px;line-height: 20px;display: inline-block;}
              #nav2{text-align: center;height: 50px;margin: 30px auto;width: 80%;}
              #nav{text-align: center;}
              #nav li {list-style: none;display: inline-block;vertical-align: middle; /*add this line*/}
              #nav a {color: #3297FD;display: block;font-family:arial;text-transform: uppercase;font-weight: bold;margin: 0;
                      padding: 9px 18px 9px;text-decoration: none;}
              #nav a:hover {background-color: #2D89E5;color: #fff;}
              .box{width:280px;height:90px;position:center;text-align: center;text-decoration: none;display: inline-block;
                   border-radius: 18px 18px 18px 18px;-moz-border-radius: 18px 18px 18px 18px;-webkit-border-radius: 18px 18px 18px 18px;}
              .white{background:white;}
              p {margin: 1px 0;}
              .Navbar {display: flex;}
              .Navbar {background-color: white;display: flex;padding: 16px;font-family: sans-serif;color: black;}
              .Navbar__Items {display:flex;}
              .Navbar__Link {padding-right: 10px;width: 50px;margin: 5px;}
              .type2 {width: 50px;height: 50px;background: #ccc;}
              .circleBase {border-radius: 50%;behavior: url(PIE.htc); /* remove if you don't care about IE8 */}
              .img {width: 50px;height: 50px;border-radius: 50%;border: 1px}
      </style>
  <!-- Fin De Estilos -->
  <!-- Script Mostrar y Ocultar Detalles -->
<script languague="javascript">
        function mostrar() {
            div = document.getElementById('flotante');
            div.style.display = '';
        }

        function cerrar() {
            div = document.getElementById('flotante');
            div.style.display = 'none';
        }
</script>
<!--Fin Sript   -->

  <!--Div Menu  -->
  <div  style='position: fixed; bottom: 0; right: 0; left: 0%; top: 0%; width:100%; text-align: center; z-index: 1;'>

<div class="Navbar">
  <div class="Navbar__Link Navbar__Link-brand type2 CircleBase">
    <img class="img" src="logo2.png" >
  </div>

  <div class="Navbar__Link type2 CircleBase">
    <img class="img" src="pollo.png" >

  </div>
  <div class="Navbar__Link type2 CircleBase">
    <img class="img" src="dos.png" >
  </div>
  <div class="Navbar__Link type2 CircleBase">
    <img class="img" src="tres.png" >
  </div>
  <div class="Navbar__Link type2 CircleBase">
    <img class="img" src="cuatro.png" >
  </div>
  <div class="Navbar__Link type2 CircleBase">
    <img class="img" src="cinco.png" >
  </div>
</div>
</div>

  </div>

 <!-- Fin Div Menu -->

  <!-- Div Detalles -->
  <div  style='position: fixed; bottom: 0; right: 0; left: 0%; top: 20%; width:100%; text-align: center; z-index: 1; '>

<div class="box white">
    <p style="font-family:Alatsi;font-size: 16px; margin: 1px ;">Spaghetti bolognesa </p>
    <p align="right" style="margin: 1px 0;">$100.00 </p>
    <br>
    <p ><a href="javascript:mostrar();">Detalles &nbsp; ></a></p>
    <div id="flotante" style="display:none;">
     <div class="box white" id="close"><a href="javascript:cerrar();">cerrar</a>
      <p style="font-family:Alatsi;font-size: 16px; margin: 1px ;">Mezcla de carne molida mixta cebolla y pure de tomate sobre spaghetti. </p>
</div>
  </div>
  <!-- Fin Div Detalles -->
  <!--Div Boton tomar foto -->
  <div  style='position: fixed; bottom: 0; right: 0; left: 0%; top: 84%; width:100%; text-align: center; z-index: 1;'>
 <button style='font-size:60px;' class= 'button' id="snap-button"><i class="material-icons" style='font-size: 85%; position: center; text-align: center;' >add_circle_outline </i></button>
    <a  id="download-link" href="#"></a>

  </div>
  <!--Div Boton tomar foto Final -->
<meta name="apple-mobile-web-app-capable" content="yes">

<body style='margin: 0px; overflow: hidden; width: 100%;'>

    <a-scene embedded arjs="debugUIEnabled: false;" vr-mode-ui="enabled: false">
    <!--Entidad para texto AR sin tarjet-->


    <a-marker preset='custom' type='pattern' url='assets/pattern-logoblack.patt'>
    <!--Imagen a mostrar en AR(modelo) -->
    <?php echo "<a-image   width='4.9' height='3.1' src='../img/$a' look-controls  ></a-image>"; ?>
    <!--Fin Modelo(modelo) -->




   <script>
      var m = document.querySelector("a-marker")
      m.addEventListener("markerFound", (e)=>{
      console.log("found")
      var v = document.querySelector('#mivideo').play();
    })
      m.addEventListener("markerLost", (e)=>{
      console.log("lost")
      var v = document.querySelector('#mivideo').play();


})





function resizeCanvas(origCanvas, width, height) {
  let resizedCanvas = document.createElement("canvas");
  let resizedContext = resizedCanvas.getContext("2d");

  resizedCanvas.height = height;
  resizedCanvas.width = width;

  resizedContext.drawImage(origCanvas, 0, 0, width, height);
  return resizedCanvas.toDataURL();
}

document.getElementById("snap-button").addEventListener("click", function() {
  let aScene = document.querySelector("a-scene").components.screenshot.getCanvas("perspective");
  let frame = captureVideoFrame("video", "png");
  aScene = resizeCanvas(aScene, frame.width, frame.height);
  frame = frame.dataUri;

  mergeImages([frame, aScene]).then(b64 => {
    let link = document.getElementById("download-link", "jpeg");
    link.setAttribute("download", "AR.jpeg");
    link.setAttribute("href", b64);
    link.click();
    console.log("foto tomada");
  });
});


function captureVideoFrame(video, format, width, height) {
        if (typeof video === 'string') {
            video = document.querySelector(video);
        }

        format = format || 'jpeg';

        if (!video || (format !== 'png' && format !== 'jpeg')) {
            return false;
        }

        var canvas = document.createElement("CANVAS");

        canvas.width = width || video.videoWidth;
        canvas.height = height || video.videoHeight;
        canvas.getContext('2d').drawImage(video, 0, 0);
        var dataUri = canvas.toDataURL('image/' + format);
        var data = dataUri.split(',')[1];
        var mimeType = dataUri.split(';')[0].slice(5)

        var bytes = window.atob(data);
        var buf = new ArrayBuffer(bytes.length);
        var arr = new Uint8Array(buf);

        for (var i = 0; i < bytes.length; i++) {
            arr[i] = bytes.charCodeAt(i);
        }

        var blob = new Blob([ arr ], { type: mimeType });
        return { blob: blob, dataUri: dataUri, format: format, width: canvas.width, height: canvas.height };
    };

     </script>
      </a-marker>
      <a-entity camera></a-entity>
    </a-scene>
</body>


</html>
