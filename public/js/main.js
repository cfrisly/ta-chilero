/*Price range*/
$( document ).ready(function(){
    $('.carouselExampleIndicators').carousel({
      interval: 2000
    })
});

 $('#sl2').slider();

	var RGBChange = function() {
	  $('#RGB').css('background', 'rgb('+r.getValue()+','+g.getValue()+','+b.getValue()+')')
	};	
