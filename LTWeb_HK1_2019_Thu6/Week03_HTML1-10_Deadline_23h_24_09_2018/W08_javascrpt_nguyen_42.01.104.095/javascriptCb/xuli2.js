function xuatkq()
{
	var diem = document.getElementById("diem").value;
	var thongbao = "";
	if(diem<5){
		 thongbao = "O lai lop";
	}
	document.getElementById("ketqua").value = thongbao;
}