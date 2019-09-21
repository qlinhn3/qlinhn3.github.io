function TinhTien(tienluong,xeploai){
	var tien;
	switch(xeploai){
		case '1':
		tien = tienluong*2;
		break;
		case '2':
		tien = tienluong*1.8;
		break;
		case '3':
		tien = tienluong*1.2;
		break;
		case '4':
		tien = tienluong*0.8;
		break;
	}
	document.getElementById("sotien").innerHTML = "Tiền thưởng là: "+tien + " đồng";
}
