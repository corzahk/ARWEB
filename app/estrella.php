<style >

.clasificacion input[type='radio'] {
    opacity: 0;
  }
  .clasificacion label {
    font-size: 30px;
    color:rgb(150, 150, 150);
    cursor: pointer;
  }
  .clasificacion label:hover {
    color: rgb(217, 215, 11);
  }
   .activo + label{
   color: rgb(255, 230, 0) !important;
   }
</style>
<script>
$(".clasificacion").find("input").change(function(){
  var valor = $(this).val()
  $(".clasificacion").find("input").removeClass("activo")
  $(".clasificacion").find("input").each(function(index){
     if(index+1<=valor){
      $(this).addClass("activo")
     }
     
  })
})

$(".clasificacion").find("label").mouseover(function(){
  var valor = $(this).prev("input").val()
  $(".clasificacion").find("input").removeClass("activo")
  $(".clasificacion").find("input").each(function(index){
     if(index+1<=valor){
      $(this).addClass("activo")
     }
     
  })
})
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<p class="clasificacion">
    <input id="radio1" type="radio" name="estrellas" value="1"><!--
    --><label for="radio1">★</label><!--
    --><input id="radio2" type="radio" name="estrellas" value="2"><!--
    --><label for="radio2">★</label><!--
    --><input id="radio3" type="radio" name="estrellas" value="3"><!--
    --><label for="radio3">★</label><!--
    --><input id="radio4" type="radio" name="estrellas" value="4"><!--
    --><label for="radio4">★</label><!--
    --><input id="radio5" type="radio" name="estrellas" value="5"><!--
    --><label for="radio5">★</label>
  </p>