<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>JS</title>
</head>
<body>


<script>
	
$(document).ready(function(){
  $('.select').click(function(){
    var total = "";
    $('.select:checked').each(function() {
      total += $(this).val() + "<br /> ";
      $(this).closest('input.complemento').addClass('clicked');
    });
    /* Remove class if unselected */
    $('.select:not(:checked)').each(function(){
      $(this).closest('input.complemento').removeClass('clicked');
    }); 
    
    /* Define Total Value in HTML element*/
    $('#total').html(total);
  });
});



/*checkbox-select*/

$('select').change(function(){
  var x = $("select.items option:selected");
  console.log(x.val());
   var y = x.val();
  $('#option-selected').html(y);
});

	
</script>













<p>5</p>
<p>6</p>
<p>7</p>	


<script>

$('input:checkbox').change(function () {
            var name = $(this).val();
            var check = $(this).attr('checked');
            console.log("Change: " + name + " to " + check);
        });





	function totalNum(a, b){
		this.x = a;
		this.y = b;
		this.sum = function(){
			return this.x + this.y;
		}
	}
	function productNum(a, b){
		this.x = a;
		this.y = b;
		this.product = function(){
			return this.x * this.y;
		}
	}

	totalNum.prototype = new productNum();

	var tn = new totalNum(10, 5);
	console.log(tn.product());
</script>



</body>
</html>