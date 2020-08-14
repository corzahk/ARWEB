<!DOCTYPE html>
<html lang="en">
<head >

    <meta http-equiv="ScreenOrientation" content="autoRotate:disabled">
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="css/swiper.min.css">

  <!-- Demo styles -->
<style type="text/css">
.swiper-slide{
    width: 50px;
   height: 50px;
   background: ;
   border-radius: 50%;
   behavior: url(PIE.htc); /* remove if you don't care about IE8 */
   display: inline-block;
}
.img {
    width: 49px;
    height: 49px;
     border-radius: 50%;
     border: 1px groove;
}
</style>
</head>
<body  >
    <?php

    ?>

  <!-- Swiper -->
  <div class="swiper-container ">
    <div class="swiper-wrapper   ">
      <div class=" swiper-slide ">

        <a title="" href="https://blackdish.mx/wp/"><img class="img" src="logo2.png" alt="" /></a>
      </div>

      <div  class="swiper-slide">
          <a title="" href="https://blackdishes.com/ar3/app/index.php"><img class="img" src="tacos.png" alt="" /></a>

           </div>
      <div class="swiper-slide">
         <a title="" href="https://blackdishes.com/ar3/app/pollo.php"><img class="img" src="pollo.png" alt="" /></a>

      </div>
      <div class="swiper-slide">
          <a title="" href="https://blackdishes.com/ar3/app/dos.php"><img class="img" src="dos.png" alt="" /></a>

      </div>
      <div class="swiper-slide">
          <a title="" href="https://blackdishes.com/ar3/app/tres.php"><img class="img" src="tres.png" alt="" /></a>

      </div>
      <div class="swiper-slide">
           <a title="" href="https://blackdishes.com/ar3/app/cuatro.php"><img class="img" src="cuatro.png" alt="" /></a>

      </div>
      <div class="swiper-slide">
          <a title="" href="https://blackdishes.com/ar3/app/cinco.php"><img class="img" src="cinco.png" alt="" /></a>


      </div>
      <div class="swiper-slide">
          <a title="" href="https://blackdishes.com/ar3/app/seis.php"><img class="img" src="seis.png" alt="" /></a>


      </div>
      <div class="swiper-slide">
          <a title="" href="https://blackdishes.com/ar3/app/siete.php"><img class="img" src="siete.png" alt="" /></a>
      </div>
      <div class="swiper-slide">
          <a title="" href="https://blackdishes.com/ar3/app/ocho.php"><img class="img" src="nueve.png" alt="" /></a>

      </div>
    </div>
    <!-- Add Pagination -->

    <!-- Add Arrows -->

  </div>


  <!-- Swiper JS -->
  <script src="js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 5,
      spaceBetween: 50,
      slidesPerGroup: 5,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

  </script>

</body>
</html>
