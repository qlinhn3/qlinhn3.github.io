$(function(){
	//cho tất nọi dung thu lại
	$('.ndmotkhoi').slideUp();
	//click thẻ h3
	$('.motkhoi h3').click(function(event){
		// $('.ndmotkhoi').slideUp();
		// $('.motkhoi h3').removeClass('chuyenmau');
		$(this).next().slideToggle();
		$(this).toggleClass('chuyenmau');
	});
});