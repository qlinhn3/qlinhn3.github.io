
	function la_so(gt){
		if (isNaN(gt))
			return false;
		else
			return true;
	}

	function trim(chuoi) {
		var i = 0;
		var n = chuoi.length;
		while (i<n) {
			if(chuoi.charAt(i) == ' ')
				++i;						
			else break;
		}
		var chuoitam1 = chuoi.substr(i,n);
		var j = chuoitam1.length - 1;
		while (j>0) {
			if (chuoitam1.charAt(j) == ' ')
				--j;
			else break; 
		}
		var chuoitam2 = chuoitam1.substr(0, j+1);
		return chuoitam2;
	}

	function ten_thu(Ngay){
		var day = nam.value + "/" + thang.value + "/" + ngay.value;
		var d = new Date(day);
		var thu = new Array(7);
		thu[0] = "Chủ Nhật";
		thu[1] = "Thứ 2";
		thu[2] = "Thứ 3";
		thu[3] = "Thứ 4";
		thu[4] = "Thứ 5";
		thu[5] = "Thứ 6";
		thu[6] = "Thứ 7";
		var k = thu[d.getDay()];
		return k;
	}

	function ten_thang(Thang){
		var day = nam.value + "/" + thang.value + "/" + ngay.value;
		var d = new Date(day);
		var thang = new Array(12);
		thang[0] = "Tháng 1";
		thang[1] = "Tháng 2";
		thang[2] = "Tháng 3";
		thang[3] = "Tháng 4";
		thang[4] = "Tháng 5";
		thang[5] = "Tháng 6";
		thang[6] = "Tháng 7";
		thang[7] = "Tháng 8";
		thang[8] = "Tháng 9";
		thang[9] = "Tháng 10";
		thang[10] = "Tháng 11";
		thang[11] = "Tháng 12";
		var m = thang[d.getMonth()];
		return m;
}