function laso(s){
	var kt ="";
	kt = isNaN(s);
	if(kt==true){
		document.getElementById("xuat").innerHTML = "Số nhập không hợp lệ! ";
	}else{
		Xuatkq(s);
	}
}
function Xuatkq(s){
	var kq="";
	var i;
	for(i=1;i<=s;i++){
		if(i%6==0 && i%9 == 0){
			kq+=i+", ";
		}
	}
	document.getElementById("xuat").innerHTML = "Các số từ 1 đến " +s+" chia hết cho 6 và 9 là: "+kq;
}
