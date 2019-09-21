$(function(){
	$('.menutren ul li a').on('click',function(event){
		event.preventDefault();
		$('body').animate(scrollTop(1600),400);
	});
});