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
function dao_chuoi(chuoi){
		chuoi = trim(chuoi);
		var i;
		var chuoidao = "";
		for (i=chuoi.length-1;i>=0;i--){
			var tmp = chuoi.charAt(i);
			chuoidao+=tmp;
		}
		return chuoidao;
	}
function kiem_tra(chuoi){
	var chuoinguoc=dao_chuoi(chuoi);
	if (chuoinguoc==chuoi){
		return "Chuỗi này đọc ngược xuôi đều giống nhau";
	}
	else{
		return "Chuỗi này đọc ngược xuôi không giống nhau";
	}
}