<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Slider - Range slider</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation-float.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.js"></script>
  <script src="js/jquery-3.3.1.js"></script>
</head>

<div class="range-slider" data-slider data-options="step: 20;"> <span class="range-slider-handle" role="slider" tabindex="0"></span>
 <span class="range-slider-active-segment" style="background: #000;"></span>

    <input type="hidden">
</div>
<script>
    $(document).foundation();

    $(document).foundation({
        slider: {
            on_change: function() {

                var dx = $('div.range-slider').attr('data-slider');

                if (dx != sliderVal) {
                    sliderVal = dx;
                    $("body").append(dx + "<br/>");
                }
            }
        }
    });

    var sliderVal = $('div.range-slider').attr('data-slider');
</script>



 
</body>
</html>