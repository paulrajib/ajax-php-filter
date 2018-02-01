<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Range slider 1</title>
  <!-- <script src="js/jquery-3.3.1.js"></script> -->
  <script src="js/jquery-2.2.4.js"></script>
  <script src="js/jquery-ui.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.js"></script>
</head>



<body style="color: #000000;">
  <div class="full-slider" style="margin-top: 100px;">
    <div class="grid-x grid-margin-x">
      <div class="cell medium-offset-1 medium-1">
        <input type="number" id="result1">
      </div>
      <div class="cell medium-8">
        <div class="slider" data-slider data-options="step: 1;" data-initial-start="10000" data-initial-end="40000" data-end="50000">
          <span class="slider-handle"  data-slider-handle role="slider" tabindex="1" aria-controls="result1"></span>
          <span class="slider-fill" data-slider-fill></span>
          <span class="slider-handle" data-slider-handle role="slider" tabindex="1" aria-controls="result2"></span>
          <span class="slider-active-segment" style="background: #000;"></span>
        </div>
      </div>
      <div class="cell medium-1">
         <input id="result2" type="number">
      </div>
    </div>
  </div>


<div class="grid-x grid-margin-x">

  <fieldset class="medium-offset-1 medium-2 cell medium-centere">
    <legend>Checkbox</legend>
    <input id="checkbox1" type="checkbox" class="select_box complemento" value="bed"><label for="checkbox1"></label>
    <input id="checkbox2" type="checkbox" class="select_box complemento" value="bath"><label for="checkbox2"></label>
    <input id="checkbox3" type="checkbox" class="select_box complemento" value="kitchen"><label for="checkbox3"></label>
  </fieldset>  

  <fieldset class="medium-2 cell medium-centered">
    <legend>Radio</legend>
    <input type="radio" name="pokemon" value="Red" id="pokemonRed" class="select complemento" value="red" required><label for="pokemonRed">Red</label>
    <input type="radio" name="pokemon" value="Blue" id="pokemonBlue" class="select complemento" value="blue"><label for="pokemonBlue">Blue</label>
    <input type="radio" name="pokemon" value="Yellow" id="pokemonYellow" class="select complemento" value="yellow"><label for="pokemonYellow">Yellow</label>
  </fieldset>

  <label class="medium-2 cell options">Select Menu
    <select class="items">
      <option value="default">Choose an option:</option>
      <option value="husker" class="complemento">Husker</option>
      <option value="starbuck" class="complemento">Starbuck</option>
      <option value="hotdog" class="complemento">Hot Dog</option>
      <option value="apollo" class="complemento">Apollo</option>
    </select>
  </label>


  <div class="medium-3 cell total">
      <div class="grid-x">
        <div class="medium-2 cell">
          <legend>Output1</legend>
          <div class="" id="total1"></div>
        </div>
        <div class="medium-2 cell">
          <legend>Output2</legend>
          <div class="" id="total2"></div>
        </div>
        <div class="medium-2 cell">
          <legend>Selected</legend>
          <div class="" id="option-selected"></div>
        </div>
      </div>
  </div>
</div>


<div class="grid-x">
  <div class="medium-12 cell">
    <div class="content" style="float:left; width:100%; padding:4%"></div>
  </div>
</div>

<div class="grid-x">
  <div class="medium-12 cell" style="margin-left: 100px;">
    <legend>All w/o Slider</legend>
    <div class="" style="width:100%; padding:4%" id="all-selected-options"></div>
  </div>
</div>


<script>

$(document).ready(function(){


    var select_options = "";
  $('.select, select, .select_box').click(function(){

    var total1 = "";
    var total2 = "";

    $('.select:checked').each(function() {
      total1 = $(this).val() + "<br /> ";
    });

    $('.select_box:checked').each(function() {
      total2 += $(this).val() + "<br /> ";
    });

    
    $('select').change(
      function(){
        x = $("select.items option:selected");
         select_options = x.val();
      });



    $('#option-selected').html(select_options);
    $('#total1').html(total1);
    $('#total2').html(total2);
    var all = select_options + " " + total1 + " " + total2 + " ";
    /*$('#all-selected-options').html(all);*/
  });



});


$(document).foundation();

$('.slider').on('moved.zf.slider', function slider_change() {
  $('#display1').html($('#result1').val());
  var min_price = $('#result1').val();


  $('#display2').html($('#result2').val());
  var max_price = $('#result2').val();

  var qs="min_price="+min_price+"&max_price="+max_price;
  /*var qs="min_price="+min_price+"&max_price="+max_price+"&select_options="+select_options;*/

    $.ajax({
      url:'products.php',
      type:'GET',
      data:qs,
      success:function(output){
          $('.content').fadeOut('slow',function(){
            $('.content').html(output).fadeIn('fast');
          
          });
          
        
        }
    
    });

});



</script>


</body>
</html>