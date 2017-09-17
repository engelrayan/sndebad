$(document).ready(function(){
	$('.add-other').click(function(){
		var oth=$('#other').html();
		$(this).parents('.widme').find('.other').append(oth);
	});
	$('.pr-ord').click(function(){
		$('.order-prod').fadeIn();
		$('.back').fadeIn();
	});

	$('.close-ord').click(function(){
		$('.order-prod').fadeOut();
		$('.back').fadeOut();
	});

	$('.back').click(function(){
		$('.login-form').fadeOut(100);
		$('.order-prod').fadeOut(100);
		$(this).fadeOut();
		$('.edit-comp').fadeOut(0);
		$('.add-prod').fadeOut(0);
		$('.add-offer').fadeOut(0);
	});

	$('.login-btn').click(function(){
		$('.login-form').fadeIn(20);
		$('.back').fadeIn();
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
	$('.add-prod-btn').click(function(){
		$('.add-prod').fadeIn(10);
		$('.back').fadeIn();
	});


});