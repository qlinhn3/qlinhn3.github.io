function laso(s){
	var kt ="";
	kt = isNaN(s);
	if(kt==true){
		document.getElementById("bcc").innerHTML = "Số nhập không hợp lệ! ";
	}else{
		Bangcc(s);
	}
}
function Bangcc(s){
	var i;
	var kq ="";
	for(i=1;i<10;i++){
		kq+= s + "*" + i +"=" + s*i + "<br>";
	}
	document.getElementById("bcc").innerHTML = kq;
}
