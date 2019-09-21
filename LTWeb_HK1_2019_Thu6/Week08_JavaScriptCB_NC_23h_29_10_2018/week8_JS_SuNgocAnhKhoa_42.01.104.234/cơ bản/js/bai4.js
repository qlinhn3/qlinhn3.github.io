function Xuat(diemhk1,diemhk2){
	var diem;
		diem=(parseFloat(diemhk1)+parseFloat(diemhk2)*2)/3;
		var dtb = diem.toFixed(2);
		diemtb.value= dtb;//Lấy 2 số thập phân sau dấu phẩy và làm tròn
	var xl;
	if(dtb<5){
		xl="Yếu";
	}else if(dtb >=5 && dtb <7){
		xl="Trung bình";
	}else if(dtb >=7 && dtb <9){
		xl="Khá";
	}else{
		xl="Giỏi";
	}
	document.getElementById("xeploai").innerHTML = xl;
}
