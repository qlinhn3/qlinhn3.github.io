function ten_thu(ngay,thang,nam){
	var d = new Date();
	d.setDate(ngay);
	d.setMonth(thang);
	d.setYear(nam);
	var thu = d.getDay();
	switch(thu){
		case 0:
			return "Chúa nhật";
			break;
		case 1:
			return "Thứ hai";
			break;
		case 2:
			return "Thứ ba";
			break;
		case 3:
			return "Thứ tư";
			break;
		case 4:
			return "Thứ năm";
			break;
		case 5:
			return "Thứ sáu";
			break;
		case 6:
			return "Thứ bảy";
			break;
	}
}
function in_lich(ngay,thang,nam){
	var d = new Date();
	d.setDate(ngay);
	d.setMonth(thang);
	d.setYear(nam);
	var txt = "";
	var thu = ten_thu(ngay);
	txt += nam + "Tháng " + thang + ngay + ten_thu(ngay,thang,nam);
	document.getElementById("inralich").innerText = txt;
}
function mo_trang(){
	var d = new Date();
	in_lich(d.getDate(),d.getMonth(),d.getYear());
}