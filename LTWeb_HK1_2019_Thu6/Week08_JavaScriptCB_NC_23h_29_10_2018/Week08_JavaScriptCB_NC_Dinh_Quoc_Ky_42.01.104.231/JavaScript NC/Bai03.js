function trim(chuoi){
	return chuoi.trim();
}
function la_so(so){
	so=so.trim();
    return (!isNaN(so)&&so!="");
}
function ten_thu(ngay){
	var thu=["Chủ nhật","Thứ hai","Thứ ba","Thứ tư","Thứ năm","Thứ sáu","Thứ bảy"];
	return thu[ngay.getDay()];
}
function ten_thang(ngay){
	var thang=["January","February","March","April","May","June",
				"July","August","September","October","November","December"];
	return thang[ngay.getMonth()];
}