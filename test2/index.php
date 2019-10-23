<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Range slider</title>

  <link rel="stylesheet" href="css/jquery-ui.css">
<!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->



   <style type="text/css">
  .pr_list{
  width:180px;
  height:220px;
  float:left;
  padding:2px;
  margin:2px;
  border:1px solid #CCCCCC;
   }
  
  </style>
  
  
  
  <script src="js/jquery-3.3.1.js"></script>
  <script src="js/jquery-ui.js"></script>

  <script>
  $( function() {
  	
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 50000,
      values: [ 0, 50000 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  

  
    var loader="<img src='images/loader.gif' />";
   
  $('.ui-slider-handle').on('click',function(){
	  $('.content').html(loader);
  
  	  var min_price=$( "#slider-range" ).slider( "values", 0 );
	  var max_price=$( "#slider-range" ).slider( "values", 1 );
	  
	
	var qs="min_price="+min_price+"&max_price="+max_price;
		//alert(ctr_id);
		
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
  
  
  } );
  </script>
</head>
<body>
 


 <div style="width:50%; margin-left: 20%;">
 
	<p style="width: 100%; text-align: center;">
	  <label for="amount">Price range:</label>
	  <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
	</p>
	 
	<div id="slider-range"></div>
	 
 
 
 </div>
 
 
 <div class="content" style="float:left; width:65%; padding:4%">
 

</div>
 
 
 
 
 
 
 
</body>
</html>