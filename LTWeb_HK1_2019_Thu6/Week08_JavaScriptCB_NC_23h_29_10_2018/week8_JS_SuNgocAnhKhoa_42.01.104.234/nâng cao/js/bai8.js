function daochuoi(){
	var s = document.getElementById("Chuois").value;
	var kq="";
	for(var i=s.length -1;i>=0;i--){
		kq+=s.charAt(i);
	}
	document.getElementById("xuat").innerHTML = kq;
}
