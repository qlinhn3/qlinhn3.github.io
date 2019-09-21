function la_so(giaTri){
	if(isNaN(giaTri)) return true;
	else return false;
}
function trim(chuoi){
	var i=0;
	var n=chuoi.length;
	while(i<n){
		if(chuoi.charAt(i)==' '){
			++i;						
		}
		else break;
	}
	var tmp1=chuoi.substr(i,n);
	var j=tmp1.length-1;
	while(j>0){
		if(tmp1.charAt(j)==' '){
			--j;
		}
		else break; 
	}
	var tmp2=tmp1.substr(0,j+1);
	return tmp2;
}
function ten_thu(Ngay){
	var day= nam.value + "/" + thang.value + "/" + ngay.value;
	var d=new Date(day);
	var thu= new Array(7);
	thu[0]="Chủ Nhật";
	thu[1]="Thứ 2";
	thu[2]="Thứ 3";
	thu[3]="Thứ 4";
	thu[4]="Thứ 5";
	thu[5]="Thứ 6";
	thu[6]="Thứ 7";
	var n = thu[d.getDay()];
	return n;
}
function ten_thang(Thang){
	var day= nam.value + "/" + thang.value + "/" + ngay.value;
	var d=new Date(day);
	var thang=new Array(12);
	thang[0]="Tháng 1";
	thang[1]="Tháng 2";
	thang[2]="Tháng 3";
	thang[3]="Tháng 4";
	thang[4]="Tháng 5";
	thang[5]="Tháng 6";
	thang[6]="Tháng 7";
	thang[7]="Tháng 8";
	thang[8]="Tháng 9";
	thang[9]="Tháng 10";
	thang[10]="Tháng 11";
	thang[11]="Tháng 12";
	var n = thang[d.getMonth()];
	return n;
}