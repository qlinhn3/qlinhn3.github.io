function la_so(so){
		var a = parseInt(so.value);
		return !(isNaN(a));
}
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
function ten_thu(ngay){
	var thu = ngay.value.getDay();
	switch(thu){
		case 0:
			return "Chúa nhật";
			break;
		case 1:
			return "Thứ hai";
			break;
		case 2:
			return "Thứ ba";
			break;
		case 3:
			return "Thứ tư";
			break;
		case 4:
			return "Thứ năm";
			break;
		case 5:
			return "Thứ sáu";
			break;
		case 6:
			return "Thứ bảy";
			break;
	}
}
function ten_thang(ngay){
	var thang = ngay.value.getMonth();
	switch(thang){
		case 0:
			return "Tháng một";
			break;
		case 1:
			return "Tháng hai";
			break;
		case 2:
			return "Tháng ba";
			break;
		case 3:
			return "Tháng tư";
			break;
		case 4:
			return "Tháng năm";
			break;
		case 5:
			return "Tháng sáu";
			break;
		case 6:
			return "Tháng bảy";
			break;
		case 7:
			return "Tháng tám";
			break;
		case 8:
			return "Tháng chín";
			break;
		case 9:
			return "Tháng mười";
			break;
		case 10:
			return "Tháng mười một";
			break;
		case 11:
			return "Tháng mười hai";
			break;
	}
}
function lam_tron(So,thap_phan){
	var tmp1 = So*Math.pow(10,thap_phan);
	var tmp2 = Math.abs(Math.round(So));
	tmp /= tmp1;
	if (So<0) {return tmp*(-1);}
	else {return tmp;}
}
function dinh_dang_so(nso,nthap_phan,bngoac_don,bdau_phay,sdon_vi){
	if (la_so(nso)){
		nso = lam_tron(nso,nthap_phan);
		var dphay = nso.indexOf(".");
	}
}