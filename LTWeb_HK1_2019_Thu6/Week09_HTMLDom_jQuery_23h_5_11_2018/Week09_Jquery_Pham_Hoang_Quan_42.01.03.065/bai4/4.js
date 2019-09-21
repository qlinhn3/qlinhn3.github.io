$(document).ready(function() {
	console.log('chay chua ha cac ban ban');
	$('.menu ul li:nth-child(1) a').on('click', function(event) {
		event.preventDefault();
		/* Act on the event */
		$('body').animate({scrollTop(1500)},400);
	});
});