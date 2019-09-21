function Xuat(ngay,thang,nam){
	var kq="";
	ngay = Number(ngay);
	thang = Number(thang);
	nam = Number(nam);
	if(isNaN(ngay)==true||isNaN(thang)==true||isNaN(nam)==true){
		document.getElementById("xuat").innerHTML = " ";
	}else{
		var dngay = new Date();
		dngay.setFullYear(nam,thang-1,ngay);
		var weekday = new Array(7);
		weekday[1] = "Thứ Hai";
		weekday[2] = "Thứ Ba";
		weekday[3] = "Thứ Tư";
		weekday[4] = "Thứ Năm";
		weekday[5] = "Thứ Sáu";
		weekday[6] = "Thứ Bảy";
		weekday[0] = "Chủ Nhật";
		var b = weekday[dngay.getDay()];
		document.getElementById("xuat").innerHTML = b + ", " + ngay + "/" + thang + "/" + nam;
	}
}
