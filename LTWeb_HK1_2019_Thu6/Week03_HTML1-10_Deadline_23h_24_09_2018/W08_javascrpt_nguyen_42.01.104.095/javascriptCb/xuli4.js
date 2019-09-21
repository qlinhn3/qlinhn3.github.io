function diemtb(){
	var hk1 = Number(document.getElementById("hk1").value);
	var hk2 = Number(document.getElementById("hk2").value);
	var kq = (hk1+(hk2*2))/3;
	return kq.toPrecision(2);
}
function xeploai(){
	var diem = diemtb();
	var thongbao = "";
	if(diem<=10 && diem>=9){
		thongbao = "Gioi";
	}
	else if(diem>=7){
		thongbao = "Kha";
	}
	else if(diem>=5){
		thongbao = "Trung binh";
	}
	else{
		thongbao = "Yeu";
	}
	document.getElementById("cuoinam").value = diem;
	document.getElementById("xeploai").innerHTML=thongbao;
}