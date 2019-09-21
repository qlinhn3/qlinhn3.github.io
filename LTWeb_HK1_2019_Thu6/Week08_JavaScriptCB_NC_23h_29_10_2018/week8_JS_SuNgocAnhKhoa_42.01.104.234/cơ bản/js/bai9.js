function Xuat(sdt,scc){
	sdt=Number(sdt);
	scc = Number(scc);
	var kq="";
	if(isNaN(sdt)==true||isNaN(scc)==true || (sdt >= scc)){
		document.getElementById("xkq").innerHTML = "Số nhập không hợp lệ!";
	}else{
		var i;
		for(i=sdt;i<=scc;i++){
			if(i%5==0 && i%7==0){
				kq=i;
				break;
			}
		}
		document.getElementById("xkq").innerHTML = "Số đầu tiên nằm trong khoảng từ "+sdt+" đến "+scc+" chia hết cho 5 và 7 là: " +kq;
	}
}
