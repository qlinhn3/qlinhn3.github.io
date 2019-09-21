function tao_tieu_de(){
	if (document.getElementById("tieude").style.left > 18){
		document.getElementById("tieude").style.left = 17;
	}
}
function cuon_trang(){
	var ele = document.getElementById("body");
	ele.scrollTop = tieude.top;
	document.getElementById("hinh1").top=ele.scrollTop+120;
	document.getElementById("hinh2").top =ele.scrollTop+260;
	document.getElementById("hinh3").top=ele.scrollTop+120;
	document.getElementById("hinh4").top=ele.scrollTop+260;
}
function khoi_dong(){
	tao_tieu_de();
	setInterval(cuon_trang(),100);
}