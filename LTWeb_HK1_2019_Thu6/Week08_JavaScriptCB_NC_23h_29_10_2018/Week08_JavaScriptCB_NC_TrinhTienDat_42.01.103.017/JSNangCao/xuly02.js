function ten_thu(ngay){
	var thu = ngay.value.getDay();
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
function la_so(so){
		var a = parseInt(so);
		return !(isNaN(a));
	}
function xuat_ngay_sinh(day,month,year){
	var ngay = day.value, thang = month.value, nam=year.value;
	if (la_so(ngay) && la_so(thang) && la_so(nam)){
		var dNgay = new Date();
		dNgay = setDate(ngay);
		dNgay = setMonth(thang);
		dNgay = setYear(nam);
		var txt = ten_thu(eval(ngay)) + ", " + dNgay.getDate() + "/" + dNgay.getMonth() + "/" + dNgay.getYear();
	}
}