function laSo (argument) {
	if(isNaN(argument)) return false;
	return true;
}

function catChuoi(argument){
	return argument.trim();
}
function tenThu(argument){
	var thu=["Chủ nhật","Thứ hai","Thứ ba","Thứ tư","Thứ năm","Thứ sáu","Thứ bảy"];
	return thu[argument.getDay()];
}

function ten_thang(ngay){
	var thang=["Tháng 1","Tháng 2","Tháng 3","Tháng 4","Tháng 5","Tháng 6",
				"Tháng 7","Tháng 8","Tháng 9","Tháng 10","Tháng 11","Tháng 12"];
	return thang[ngay.getMonth()];
}