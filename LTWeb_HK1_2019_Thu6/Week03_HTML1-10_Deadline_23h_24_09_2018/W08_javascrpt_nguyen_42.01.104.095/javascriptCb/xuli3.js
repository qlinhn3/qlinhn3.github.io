function xuatkq(){
	var diem = document.getElementById("diem").value;
	var thongbao=""
	if(diem<5)
		thongbao="Ở lại lớp";
	else
		thongbao="Được lên lớp";
	document.getElementById("ketqua").value=thongbao;
}