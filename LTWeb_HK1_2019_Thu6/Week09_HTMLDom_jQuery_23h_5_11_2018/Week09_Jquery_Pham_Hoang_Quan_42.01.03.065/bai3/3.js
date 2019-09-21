$(document).ready(function() {
	$('.ndmotkhoi').slideUp();
	$('.motkhoi h3').click(function(event) {
		
		/* Act on the event */
		$(this).next().slideToggle();
		$(this).toggleClass('xanh');
	});
});