

	function tienthuong(){
		var luong = Number(document.getElementById("luong").value);
		var loai = document.getElementById("loai").value;
		var kq;

		switch(loai){
			case "loaia":
				kq = luong*2;
				break;
			case "loaib":
				kq = luong*1.8;
				break;
			case "loaic":
				kq = luong*1.2;
				break;
			case "loaid":
				kq = luong*0.8;
				break;
		}
		kq=parseFloat(kq).toFixed(2);
		console.log(kq);
		var xuatkqne="Tiền thưởng là: "+kq.toString()+" đồng";
		document.getElementById("thongbao").innerHTML=xuatkqne;
	}