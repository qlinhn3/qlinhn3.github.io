$(document).ready(function() {
	$("#signup").click(function(event) {
		// $("#loginForm").animate({opacity: 0, marginLeft : -100});
		// $("#signUpForm").animate({opacity: 1, marginLeft : 0});
		$("#signUpForm").delay(100).fadeIn(100);
		$("#loginForm").fadeOut(100);
		event.preventDefault();
	});
	$("#signin").click(function(event){
		alert('Bạn đã đăng nhập!');
		event.preventDefault();
	});
	$("#signin2").click(function(event) {
		// $("#signUpForm").animate({opacity: 0, marginLeft : -100});
		// $("#loginForm").animate({opacity: 1, marginLeft : 0});
		$("#loginForm").delay(100).fadeIn(100);
		$("#signUpForm").fadeOut(100);
		event.preventDefault();
	});
	$("#signup2").click(function(event) {
		// $("#loginForm").animate({opacity: 0, marginLeft : -100});
		// $("#signUpForm").animate({opacity: 1, marginLeft : 0});
		alert('Bạn đã đăng ký!');
		event.preventDefault();
	});
});