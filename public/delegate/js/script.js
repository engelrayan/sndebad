$(document).ready(function(){
	$('.back').click(function(){
		$('.login-form').fadeOut(100);
		$('.order-prod').fadeOut(100);
		$(this).fadeOut();
		$('.edit-comp').fadeOut(0);
		$('.add-prod').fadeOut(0);
		$('.add-offer').fadeOut(0);
	});
	//company page
	$('.my-of-slide').owlCarousel({
        items : 3,
        lazyLoad : true,
        navigation : true
      });
	
	$('#add-dept').click(function(){
		$('.an-sort').slideToggle(300);
	});
	$('#add-an-sort').click(function(){
		var val=$(this).parent('.an-sort').find('input').val();
		if(val!=''){
			$('.s-sort').find('select').append('<option selected>'+val+'</option>');
		}
		//$('body').html(val);
	});
	$('.msg').click(function(){
		var cont=$(this).find('.order-info').html();
		$('.msgs').find('.order-info').html(cont);
		$('.msg').css({'background':'transparent','color':'#000'});
		$(this).css({'background':'#04518c','color':'#fff'});
	});

	$('.open-map').click(function(){
		$(this).fadeOut(0);
		$('.close-map').fadeIn(0);
		$(this).parent('.s-area').animate({'margin-left':'0px'},400);
	});
	$('.close-map').click(function(){
		$(this).fadeOut(0);
		$('.open-map').fadeIn(0);
		$(this).parent('.s-area').animate({'margin-left':'-550px'},400);
	});


	$('.open-cog').click(function(){
		$(this).fadeOut(0);
		$('.close-cog').fadeIn(0);
		$(this).parent('.control-pg').animate({'margin-left':'0px'},400);
	});
	$('.close-cog').click(function(){
		$(this).fadeOut(0);
		$('.open-cog').fadeIn(0);
		$(this).parent('.control-pg').animate({'margin-left':'-20%'},400);
	});
	$('.container').click(function(){
		$('.close-cog').fadeOut();
		$('.close-map').fadeOut();
		$('.open-map').fadeIn(0);
		$('.open-cog').fadeIn(0);
		$('.control-pg').animate({'margin-left':'-20%'},400);
		$('.s-area').animate({'margin-left':'-550px'},400);
	});

	$('.widme').each(function(){
		var wd=($(window).width()-$(this).width())/2;
		var hd=($(window).height()-$(this).height())/2;
		$(this).css({'top':hd+'px'});
		$(this).css({'left':wd+'px'});
	});


	$('.pr-ord').click(function(){
		$('.order-prod').fadeIn();
		$('.back').fadeIn();
	});

	$('.close-ord').click(function(){
		$('.order-prod').fadeOut();
		$('.back').fadeOut();
	});

	$('.login-btn').click(function(){
		$('.login-form').fadeIn(20);
		$('.back').fadeIn();
	});

	$('.edit-comp-btn').click(function(){
		$('.edit-comp').fadeIn(10);
		$('.back').fadeIn();
	});

	$('.add-prod-btn').click(function(){
		$('.add-prod').fadeIn(10);
		$('.back').fadeIn();
	});

	$('.add-offer-btn').click(function(){
		$('.add-offer').fadeIn(10);
		$('.back').fadeIn();
	});

	/*$('.prods').owlCarousel({
        items : 8,
        lazyLoad : true,
        navigation : true
      });*/

	$('.owl-prev').html('').css({'opacity':'0'});
	$('.owl-next').html('').css({'opacity':'0'});

	$('.m-c span').click(function(){
		$(this).parent('li').find('ul').slideToggle(100);
	});

	$('.open-cog').click(function(){
		$(this).fadeOut(0);
		$('.close-cog').fadeIn(0);
		$(this).parent('.control-pg').animate({'margin-left':'0px'},400);
	});
	$('.close-cog').click(function(){
		$(this).fadeOut(0);
		$('.open-cog').fadeIn(0);
		$(this).parent('.control-pg').animate({'margin-left':'-20%'},400);
	});

});
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);