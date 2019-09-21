function trim(chuoi){
	var i=0;
	while(chuoi.charAt(i)==" "){
		i++;
	}
	var tmp = chuoi.substr(i,chuoi.length);
	i=tmp.length;
	while(tmp.charAt(i)==" "){
		i--;
	}
	var tmp2 = tmp.substr(0,i);
	return tmp2;
}
function tim_thay_the(chuoi,chuoitim,chuoithe){
	var ctim = trim(chuoitim);
	var cthe = trim(chuoithe);
	var n= chuoi.search(chuoitim);
	if (n==-1) {
		return "Không tìm thấy chuỗi cần tìm";
	}
	else{
		while(n!=-1){
			chuoi = chuoi.replace(ctim, cthe);
			n= chuoi.search(ctim);
		}
		return chuoi;
	}
}